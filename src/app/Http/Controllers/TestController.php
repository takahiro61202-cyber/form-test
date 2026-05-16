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
    // モデルとして生成
    $contact = new Contact($request->all());

    $contact->telA = $request->telA;
    $contact->telB = $request->telB;
    $contact->telC = $request->telC;

    $contact->first_name = $request->first_name;
    $contact->last_name = $request->last_name;
    
    // 電話番号を合体
    $contact->tel = $request->telA . $request->telB . $request->telC;

    // 名前を合体
    $contact->name = $request->first_name . $request->last_name;

    // カテゴリのリレーションをセット
    $contact->setRelation('category', Categories::find($request->category_id));

    return view('confirm', compact('contact'));
}



public function thanks(Request $request)
{
    // dd($users = User::all());
    // 修正ボタン
    if ($request->action === 'mod') {
        return redirect('/')->withInput();
    }

    // 送信ボタン
    if ($request->action === 'send') {

        $form = $request->only([
            'first_name', 'last_name', 'gender', 'email',
            'tel', 'address', 'building', 'detail', 'category_id'
        ]);

        Contact::create($form);

        return view('thanks');
    }

    // ★ どの条件にも当てはまらなかった場合の保険
    return redirect('/');
}



    public function register()
    {
        $users = Users::all();
        return view('register');
    }

    public function login()
    {
        $users = Users::all();
        return view('login');
    }

    public function admin(Request $request)
    {
    // 検索キーワード
    $keyword = $request->input('keyword');

    // ソート条件
    $sort = $request->input('sort', 'id');
    $order = $request->input('order', 'asc');

    // クエリ作成
    $query = Contact::query();

    // 検索機能
    if (!empty($keyword)) {
        $query->where('first_name', 'like', "%{$keyword}%")
              ->orWhere('last_name', 'like', "%{$keyword}%")
              ->orWhere('address', 'like', "%{$keyword}%")
              ->orWhere('detail', 'like', "%{$keyword}%");
    }
    
    if ($request->target_date) {
    $query->whereDate('created_at', $request->target_date);
}
    // ソート機能
    $contacts = $query->orderBy($sort, $order)->paginate(7);

    return view('auth.admin', compact('contacts', 'sort', 'order'));
    }
}