<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Requests\ContactRequest;

class TestController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('index',compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        // dd("confirmが実行された");
        // dd($request -> all());
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'telA','telB','telC','address', 'building', 'detail', 'category_id']);
        // dd($contact);
        

        // dd(compact('contact'));
        // return view('confirm', compact('contact'));
        return view('confirm',['contact' => $contact]);
    }

public function thanks(Request $request)
{
    // dd($request -> all());
    // 修正ボタンが押された場合
    if ($request->action === 'mod') {
        return redirect('/');
    }

    // 送信ボタンが押された場合
    dd(compact('request'));
    if ($request->action === 'send') {
        $tel = $request->telA.$request->telB.$request->telC;
        contact::create($request);

        return view('thanks');
    }

    // どちらでもない場合（念のため）
    return redirect('/');
}


}

