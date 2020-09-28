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

    public function confirm(beginnerRequest $request)
 {

     //フォームから受け取ったすべてのinputの値を取得
     $inputs = $request->all();

     //入力内容確認ページのviewに変数を渡して表示
     return view('confirm', [
         'inputs' => $inputs,
     ]);
 }

    public function create(Request $inputs) {


        $contact = new Contact();
        $contact -> name = $inputs-> name;
        $contact -> mail = $inputs-> mail;
        $contact -> tel = $inputs-> tel;
        $contact -> contents = $inputs-> contents;
        $contact ->save();
        return view('contact',compact('contact'));
    }

}
