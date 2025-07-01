@extends('layouts.app')

@section('title', '内容確認')

@section('content')
    <h2>入力内容の確認</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr><th>お名前</th><td>{{ $contact['name'] }}</td></tr>
        <tr><th>メールアドレス</th><td>{{ $contact['email'] }}</td></tr>
        <tr><th>年齢</th><td>{{ $contact['age'] }}歳</td></tr>
        <tr><th>性別</th><td>{{ $contact['gender'] }}</td></tr>
        <tr><th>興味のある分野</th><td>{{ isset($contact['interests']) ? (is_array($contact['interests']) ? implode(', ', $contact['interests']) : $contact['interests']) : 'なし' }}</td></tr>
        <tr><th>お問い合わせ内容</th><td>{!! nl2br(e($contact['message'])) !!}</td></tr>
    </table><br>

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        @foreach ($contact as $key => $value)
            @if (is_array($value))
                @foreach ($value as $v)
                    <input type="hidden" name="{{ $key }}[]" value="{{ $v }}">
                @endforeach
            @else
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endif
        @endforeach

        <button type="submit">送信する</button>
    </form>

    <form action="{{ route('contact') }}" method="GET" style="margin-top: 10px;">
        @csrf
        @foreach ($contact as $key => $value)
            @if (is_array($value))
                @foreach ($value as $v)
                    <input type="hidden" name="{{ $key }}[]" value="{{ $v }}">
                @endforeach
            @else
                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
            @endif
        @endforeach

        <button type="submit">戻って修正する</button>
    </form>
@endsection