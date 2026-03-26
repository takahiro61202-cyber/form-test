<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use App\Models\Categories;
class TestController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('index',compact('categories'));
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel',
        //'telB','telC',
        'address', 'building', 'detail']);
        

        
        return view('confirm', compact('contact'));
    }

public function thanks(Request $request)
{
    // 修正ボタンが押された場合
    if ($request->action === 'mod') {
        return redirect('/');
    }

    // 送信ボタンが押された場合
    if ($request->action === 'send') {
        return view('thanks');
    }

    // どちらでもない場合（念のため）
    return redirect('/');
}


}

