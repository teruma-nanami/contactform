@extends('layouts.app')

@section('title', '送信完了')

@section('content')
    <h2>お問い合わせありがとうございます</h2>

    <p>ご入力いただいた内容は正常に送信されました。</p>
    <p>担当者より折り返しご連絡いたしますので、しばらくお待ちください。</p>

    <br>

    <a href="{{ route('index') }}">トップページへ戻る</a>
@endsection