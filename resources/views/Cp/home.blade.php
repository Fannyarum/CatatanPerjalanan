@extends('Cp.navbar')

@section('content')
  <div class="content-container">
    <div class="image-container">
      <img src="{{ asset('img/perjalanan.png') }}" alt="Perjalanan">
    </div>
    <div class="text-container">
      <h1>Catatan Perjalanan</h1>
      <h2>Pemantauan Kesehatan</h2>
      <p>
        Catatan Perjalanan adalah aplikasi sederhana berbasis website yang membantu Anda memantau kondisi tubuh dengan mencatat suhu tubuh di setiap lokasi yang Anda kunjungi. Aplikasi ini digunakan saat pandemi untuk mencatat kesehatan pengguna.
      </p>
      <a href="/catatan"><button class="purple-btn">Catatan Saya</button></a>
    </div>
  </div>
@endsection