@extends('layouts.app')

@section('title', 'お問い合わせフォーム')

@section('content')
    <h2>お問い合わせフォーム</h2>

    <form action="{{ route('contact.confirm') }}" method="POST">
        @csrf

        <!-- 名前 -->
        <div>
            <label for="name">お名前：</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div><br>

        <!-- メールアドレス -->
        <div>
            <label for="email">メールアドレス：</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div><br>

        <!-- 年齢（セレクトボックス） -->
        <div>
            <label for="age">年齢：</label><br>
            <select name="age" id="age" required>
                <option value="">選択してください</option>
                @for ($i = 18; $i <= 65; $i++)
                    <option value="{{ $i }}" {{ old('age') == $i ? 'selected' : '' }}>{{ $i }}歳</option>
                @endfor
            </select>
            @error('age')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div><br>

        <!-- 性別（ラジオボタン） -->
        <div>
            <label>性別：</label><br>
            <label><input type="radio" name="gender" value="男性" {{ old('gender') == '男性' ? 'checked' : '' }} required> 男性</label>
            <label><input type="radio" name="gender" value="女性" {{ old('gender') == '女性' ? 'checked' : '' }}> 女性</label>
            <label><input type="radio" name="gender" value="その他" {{ old('gender') == 'その他' ? 'checked' : '' }}> その他</label>
            @error('gender')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div><br>

        <!-- 興味のあるサービス領域（チェックボックス） -->
        <div>
            <label>興味のある分野：</label><br>
            @php
                $oldInterests = old('interests', []);
            @endphp
            <label><input type="checkbox" name="interests[]" value="Webサイト制作" {{ in_array('Webサイト制作', $oldInterests) ? 'checked' : '' }}> Webサイト制作</label><br>
            <label><input type="checkbox" name="interests[]" value="システム開発" {{ in_array('システム開発', $oldInterests) ? 'checked' : '' }}> システム開発</label><br>
            <label><input type="checkbox" name="interests[]" value="WordPress運用" {{ in_array('WordPress運用', $oldInterests) ? 'checked' : '' }}> WordPress運用</label><br>
            <label><input type="checkbox" name="interests[]" value="Laravel構築" {{ in_array('Laravel構築', $oldInterests) ? 'checked' : '' }}> Laravel構築</label><br>
            <label><input type="checkbox" name="interests[]" value="SEO相談" {{ in_array('SEO相談', $oldInterests) ? 'checked' : '' }}> SEO相談</label>
            @error('interests')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div><br>

        <!-- 本文 -->
        <div>
            <label for="message">お問い合わせ内容：</label><br>
            <textarea name="message" id="message" rows="5" required>{{ old('message') }}</textarea>
            @error('message')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div><br>

        <!-- 送信ボタン -->
        <button type="submit">内容を確認する</button>
    </form>
@endsection