<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
</head>



<body>
  <form method="POST">
    @csrf
    <header>@yield('Atte')</header>
    <div class="content">
      @yield('content')
      <footer>
        <small>Atte,inc</small>
      </footer>
    </div>

</body>

</html>