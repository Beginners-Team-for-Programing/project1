<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeginnerController extends Controller
{
    public function access() {
        return view('access');
    }

    public function get(Request $request) {
        $data = ['msg'=>'お問い合わせフォームを入力してください。'];
        return view('contact',$data);
    }

    public function post(Request $request) {
        $msg = $request->msg;
        $data = ['msg'=>'正しく入力されました。'];
        $validate_rule = [
            'name'=>'required',
            'tel'=>'required',
            'mail'=>'email',
            'cantents'=>'filled',
        ];
        $this->validate($request,$validate_rule);
        return view('contact',$data);
    }
}
