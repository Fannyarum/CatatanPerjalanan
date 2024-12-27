<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <div class="main-container">   
    <div class="kiri">
      <div class="welcome-text">
        <img src="/img/logo.png" alt="Welcome Image" class="logo">
        <h2>Selamat Datang!</h2>
        <p>Untuk tetap terhubung dengan kami, masuk dengan akun anda.</p>
      </div>
    </div>

    <div class="kanan">
      <div class="card">
        <h1>Login</h1>
        <p>{{session()->get('warning')}}</p>
        <form action="/login" method="post">
            @csrf
            <input type="email" name="Email" placeholder="Email" class="inputan" required><br>
            <input type="password" name="Password" placeholder="Password" class="inputan" required><br><br>
            <button type="submit" class="login-btn">Login</button>
            <p>Tidak punya akun? <a href="/register"><span>Register disini</span></a></p>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
