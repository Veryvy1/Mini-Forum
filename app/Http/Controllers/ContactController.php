<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::paginate(5);
        return view('admin.contact', compact('contact'));
    }
    public function create()
    {
        $contact = Contact::all();
        return view('admin.contact', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        Contact::create([
            'messages'=>$request->input('messages'),
        ]);
        return redirect()->route('contact.index')->with('success','Contact added successfully');
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
        return redirect()->route('contact.index')->with('success','Contact updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('success','Contact successfully deleted');
    }
}
