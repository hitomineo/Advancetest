<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン</title>
  <link rel="stylesheet" link href="{{asset('css/register.css')}}">

</head>


<body>
  <header class="header">
    <h1 class="logo">Atte</h1>
  </header>

  <div class="register-content">
    <h2 class="register-ttl">ログイン</h2>
    <form action="login" method="POST">
      @csrf
    </form>


    <div class="register-lists">
      <div class="register-list"><input class="register-item" type="email" name="mail_address" id="mail_address" placeholder="メールアドレス" required></div>
      <div class="register-list"><input class="register-item" type="password" name="password" id="password" placeholder="パスワード" required></div>
      <div class="register-list"><input class="register-item register-btn" type="submit" value="ログイン"></div>
    </div>



    <div class="register-login">
      <p class="register-login-message">アカウントをお持ちでない方はこちらから</p>
      <div class="blue-btn">
        <a href="/register" class="register-login-btn">会員登録</a>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="last-logo">Atte,inc.</div>
  </footer>

</body>

</html>