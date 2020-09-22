<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;


class BeginnerController extends Controller
{
    public function access() {
        return view('access');
    }

    public function contact() {
        return view('contact');
    }

    public function get(Request $request) {
        //$data = ['msg'=>'お問い合わせフォームを入力してください。'];
        return view('contact');
    }

    public function store(Request $request) {
        //$msg = $request->msg;
        //$data = ['msg'=>'正しく入力されました。'];

        $Person = new Person;
        $Person->name = $request->name;
        $Person->tel = $request->tel;
        $Person->mail = $request->mail;
        $Person->content = $request->content;
        $Person->save();

        //$this->validate($request, $validateRules, $validateMessages);
        //$data = $request->all();

        return view('contact',compact('Person'));

        //return redirect(route('store', [
        //    'name' => $name
        //]));

        //$validate_rule = [
        //    'name'=>'required',
        //    'tel'=>'required',
        //    'mail'=>'email',
        //    'cantents'=>'filled',
        //];
        //$this->validate($request,$validate_rule);
        //return view('contact',$data);
    }
}
