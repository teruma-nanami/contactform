@extends('layouts.app')

@section('title', 'お問い合わせ詳細')

@section('content')
    <h2>お問い合わせ詳細</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <td>{{ $contact->id }}</td>
        </tr>
        <tr>
            <th>名前</th>
            <td>{{ $contact->name }}</td>
        </tr>
        <tr>
            <th>メール</th>
            <td>{{ $contact->email }}</td>
        </tr>
        <tr>
            <th>年齢</th>
            <td>{{ $contact->age }}</td>
        </tr>
        <tr>
            <th>性別</th>
            <td>{{ $contact->gender }}</td>
        </tr>
        <tr>
            <th>興味のある分野</th>
            <td>{{ $contact->interests }}</td>
        </tr>
        <tr>
            <th>お問い合わせ内容</th>
            <td>{{ $contact->message }}</td>
        </tr>
        <tr>
            <th>送信日時</th>
            <td>{{ $contact->created_at->format('Y-m-d H:i') }}</td>
        </tr>
    </table>

    <a href="{{ route('index') }}">一覧へ戻る</a>
@endsection