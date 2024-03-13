<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact', compact('contact'));
    }

    public function create()
    {
        return view('home'); // Mengarahkan ke view 'home.blade.php'
    }


    public function store(ContactRequest $request)
    {
        Contact::create([
            'pesan'=>$request->input('pesan'),
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
            'pesan'=>$request->input('pesan'),
        ]);
        return redirect()->route('contact.index')->with('success','Contact updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('success','Contact successfully deleted');
    }
}
