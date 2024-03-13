<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Storage;
use DOMDocument;


class ContactController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $xcontactx = $request->input('search');
            $contact = Contact::where('messages', 'LIKE', "%$xcontactx%")->paginate(5);
        } else {
            $contact = Contact::paginate(5);
        }
        return view('admin.contact', compact('contact'));
    }

    public function create()
    {
        return view('home');
    }


    public function store(ContactRequest $request)
    {
        $messages = $request->input('messages');
        $dom = new DOMDocument();
        $dom->loadHTML($messages, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(',', $img->getAttribute('src'))[1])[1]);
            $images_name = "/uploads" . time() . $key . '.png';
            Storage::put('public' . $images_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $images_name);
        }

        $gambar = $request->file('gambar');
        $gambar_path = $gambar->store('public/images');
        
        Contact::create([
            'messages'=>$dom->saveHTML(),
        ]);
        return back()->with('success','Contact added successfully');
    }

    public function show(Contact $contact)
    {
        //
    }

    public function edit(Contact $contact)
    {
        $contact = Contact::all();
        return view('admin.contact', compact('contact'));
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update([
            'pesan'=>$request->input('pesan'),
        ]);
        return back()->with('success','Contact updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success','Contact successfully deleted');
    }
}
