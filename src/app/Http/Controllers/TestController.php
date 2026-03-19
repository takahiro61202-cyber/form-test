<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
     {
         $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail', 'create_at', 'update_at']);
   return view('confirm', ['contact' => $contact]);
     }

}

