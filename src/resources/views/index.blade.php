@extends('layouts.app')

@section('title', 'お問い合わせ一覧')

@section('content')
<h2>お問い合わせ一覧</h2>

@if ($contacts->isEmpty())
<p>まだお問い合わせはありません。</p>
@else
<table border="1" cellpadding="8" cellspacing="0">
  <thead>
    <tr>
      <th>ID</th>
      <th>名前</th>
      <th>メール</th>
      <th>年齢</th>
      <th>性別</th>
      <th>送信日時</th>
      <th>詳細</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($contacts as $contact)
    <tr>
      <td>{{ $contact->id }}</td>
      <td>{{ $contact->name }}</td>
      <td>{{ $contact->email }}</td>
      <td>{{ $contact->age }}</td>
      <td>{{ $contact->gender }}</td>
      <td>{{ $contact->created_at }}</td>
      <td><a href="{{ route('show', $contact->id) }}">詳細</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
@endsection