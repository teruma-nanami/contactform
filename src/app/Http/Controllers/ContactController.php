<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
  public function index()
  {
    $contacts = Contact::latest()->get(); // 新しい順に取得
    return view('index', compact('contacts'));
  }

  public function show($id)
  {
    $contact = Contact::findOrFail($id);
    return view('show', ['contact' => $contact]);
  }

  // 入力フォーム表示
  public function contact()
  {
    return view('contact');
  }


  public function confirm(ContactRequest $request)
  {
    $contact = $request->validated();
    return view('confirm', compact('contact'));
  }

  public function store(ContactRequest $request)
  {
    // バリデーション済みデータを取得（安全に取り扱える）
    $data = $request->validated();

    // 配列 → カンマ区切り文字列へ変換（if文で処理）
    if (isset($data['interests']) && is_array($data['interests'])) {
      $data['interests'] = implode(',', $data['interests']);
    } else {
      $data['interests'] = null;
    }

    Contact::create($data);

    return redirect('/thanks');
  }


  // 完了ページ表示
  public function thanks()
  {
    return view('thanks');
  }
}
