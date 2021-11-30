<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
       $contacts = Contact::all();
       return view ('contact.index')->with('contacts', $contacts);
    }

    public function create()
    {
       return view('contact.create');
    }

    public function store(Request $request)
    {
       $input = $request->all();
       Contact::create($input);
       return view('contact.thanks');
    }

  
    public function show($id)
    {
       $contact = Contact::find($id);
       return view('contact.show')->with('contact', $contact);
    }

   
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contact.edit')->with('contact', $contact);
    }

 
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $input = $request->all();
        $contact->update($input);
        return view('contact.thanks');
    }

   
    public function destroy($id)
    {
       
    }
}