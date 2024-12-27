<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catatan Perjalanan</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="{{ asset('js/script.js') }}" defer></script>

</head>
<body>
  <div class="navbar">
    <img src="{{ asset('img/logo2.png') }}" alt="Logo" class="logo">
    <ul class="nav-links">
      <li><a href="/home">Home</a></li>
      <li><a href="/catatan">Catatan Perjalanan</a></li>
      <li><a href="/isi">Isi Data</a></li>
    </ul>
    <button class="purple-btn" id="logoutBtn">Logout</button>
  </div>

  <div class="logout-modal" id="logoutModal">
    <div class="modal-content">
      <p>Apa kamu yakin ingin keluar?</p>
      <button onclick="logout()">Ya, Keluar</button>
      <button onclick="closeModal()">Batal</button>
    </div>
  </div>

  <div class="container">
    @yield('content') 
  </div>
</body>
</html>
