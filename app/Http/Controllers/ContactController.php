<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function index(Request $request)
    {
        $oldSearch = $request->input('search');
        if ($request->has('search')) {
            $xcontactx = $request->input('search');
            $contact = Contact::where('messages', 'LIKE', "%$xcontactx%")->paginate(5);
        } else {
            $contact = Contact::paginate(5);
        }
        return view('admin.contact', compact('contact','oldSearch'));
    }

    public function create()
    {
        return view('home');
    }

    public function store(ContactRequest $request)
    {
        try {

        Contact::create([
            'messages' => $request->input('messages'),
        ]);
        return back()->with('success','Contact added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }

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
        try {

        $contact->update([
            'messages'=>$request->input('messages'),
        ]);
        return back()->with('success','Contact updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success','Contact successfully deleted');
    }
}
