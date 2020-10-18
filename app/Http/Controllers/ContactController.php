<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {
    public function submit(ContactRequest $req) {
        // $validatedData = $req->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'message' => 'required|min:10'
        // ]);
    }
}
