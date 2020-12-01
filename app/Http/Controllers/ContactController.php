<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //

    public function store(Request $request){

        $contact = New Contact();

        $contact->firstName = $request['firstName'];
        $contact->lastName  = $request['lastName'];
        $contact->email     = $request['email'];
        $contact->country   = $request['country'];
        $contact->city      = $request['city'];

        $contact->save();

    }

    public function get(){
        
        $contacts = Contact::all();

        return response()->json($contacts);

    }

    public function show($id){

        $contact = Contact::findOrFail($id);

        return response()->json($contact);
    }

    public function update($id,Request $request){

        $contact = Contact::findOrFail($id);

        $contact->firstName = $request['firstName'];
        $contact->lastName  = $request['lastName'];
        $contact->email     = $request['email'];
        $contact->country   = $request['country'];
        $contact->city      = $request['city'];

        $contact->save();

    }

    public function delete($id){

        $contact = Contact::findOrFail($id);

        $contact->delete();
        
    }
}
