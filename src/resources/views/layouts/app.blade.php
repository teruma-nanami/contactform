<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'お問い合わせフォーム')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

  <header>
    <h1>お問い合わせフォーム</h1>
    <nav>
      <a href="{{ route('index') }}">トップ</a> |
      <a href="{{ route('contact') }}">お問い合わせ</a>
    </nav>
    <hr>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <hr>
    <p style="text-align: center;">&copy; {{ date('Y') }} </p>
  </footer>

</body>

</html>