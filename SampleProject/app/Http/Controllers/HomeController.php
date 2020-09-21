<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;

class HomeController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function result(){
        return view('result');
    }

    public function store(Request $request)
    {
        $person = new Person;
        $person->name = $request->name;
        $person->tel = $request->tel;
        $person->mail = $request->mail;
        $person->save();

        return redirect("contact");
    }
}
