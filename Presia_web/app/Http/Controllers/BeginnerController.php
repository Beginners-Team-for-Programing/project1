<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Http\Requests\beginnerRequest;

class BeginnerController extends Controller
{
    public function access() {
        return view('access');
    }

    public function get(Request $request) {
        return view('contact',['msg'=>'下記のフォームを入力してください。']);
    }

    public function post(beginnerRequest $request) {

        return view('result',['msg'=>'お問い合わせを受付しました。ご連絡まで少々お待ちくださいませ。']);
    }


}
