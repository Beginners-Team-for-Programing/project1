<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Http\Requests\beginnerRequest;

use App\Models\Contact;

class ContactController extends Controller
{
    public function get(Request $request) {
        return view('contact');
    }

    public function create(beginnerRequest $request) {

        $contact = new Contact();
        $contact -> name = $request-> name;
        $contact -> mail = $request-> mail;
        $contact -> tel = $request-> tel;
        $contact -> contents = $request-> contents;
        $contact ->save();
        return view('contact',compact('contact'));
    }

}
