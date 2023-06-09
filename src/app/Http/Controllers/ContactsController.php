<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactsSendmail;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
        'email' => 'required|email',
        'title' => 'required',
        'body' => 'required',
    ]);

    $inputs = $request->all();

    return view('contact.confirm', ['inputs' => $inputs,]);
}

    public function send(Request $request)
    {
        $request->validate([
        'email' => 'required|email',
        'title' => 'required',
        'body' => 'required'
    ]);

    

    // actionの値を取得
    $action = $request->input('action');

    // action以外のinputの値を取得
    $inputs = $request->except('action');

    //actionの値で分岐
    if($action !== 'submit'){

        // 戻るボタンの場合リダイレクト処理
        return redirect()
        ->route('contact.index')
        ->withInput($inputs);
        
    } else {
        // 送信ボタンの場合、送信処理

        // ユーザにメールを送信
        \Mail::to($inputs['email'])->send(new ContactsSendmail($inputs));
        // 自分にメールを送信
        \Mail::to('furebo2023@gmail.com')->send(new ContactsSendmail($inputs));

        // 二重送信対策のためトークンを再発行
        $request->session()->regenerateToken();

        // 送信完了ページのviewを表示
        return view('contact.thanks');

    }
}
}
