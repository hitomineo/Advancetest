<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>会員登録</title>
  <link rel="stylesheet" link href="{{asset('css/register.css')}}">


</head>


<body>

  <header class="header">
    <div class="logo">Atte</div>
  </header>



  <div class="register-content">
    <h2 class="register-ttl">会員登録</h2>
    <form action="/register" method="POST">
      @csrf
    </form>


      <div class="register-lists">
        <div class="register-list"><input class="register-item" type="text" name="name" placeholder="名前" required></div>
        <div class="register-list"><input class="register-item" type="email" name="mail_address" placeholder="メールアドレス" required></div>
        <div class="register-list"><input class="register-item" type="password" name="password" id="password" placeholder="パスワード" required></div>
        <div class="register-list"><input class="register-item" type="password" name="confirm" placeholder="確認用パスワード" required></div>
        <div class="register-list"><input class="register-btn" type="submit" value="会員登録"></div>
      </div>
  

    <div class="register-login">
      <p class="register-login-message">アカウントをお持ちの方はこちらから</p>
      <a href="/login" class="register-login-btn">ログイン</a>
    </div>
  </div>


    <footer class="footer">
      <div class="last-logo">Atte,inc.</div>
    </footer>
</body>

</html>