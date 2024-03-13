<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
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
        Contact::create([
            'messages' => $request->input('messages'),
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
            'messages'=>$request->input('messages'),
        ]);
        return back()->with('success','Contact updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success','Contact successfully deleted');
    }
}
