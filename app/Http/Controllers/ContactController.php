<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {
    public function submit(ContactRequest $req) {
       $contact = new Contact();
       $contact->name = $req->input('name');
       $contact->email = $req->input('email');
       $contact->message = $req->input('message');

       $contact->save();

       return redirect()->route('home')->with('success', 'Message was sent successfully');
    }

    public function allData() {
        $contact = new Contact;
        // return view('messages', ['data' => $contact->orderBy('id', 'dsc')->skip(1)->take()->get()]);

        return view('messages', ['data' => $contact->all()]);
    }

    public function showOneMessage($id) {
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);
    }

}
