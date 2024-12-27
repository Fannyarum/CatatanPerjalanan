@extends('Cp.navbar')

@section('content')
  <div class="content-container">
    <div class="text-container">
      <h1 style="text-align: center;">Isi Data</h1>
      <form action="/isi" method="post">
        @csrf 
        
        <label for="tanggal">Tanggal:</label><br>
        <input type="date" id="tanggal" name="Tanggal" class="inputan" required><br>

        <label for="waktu">Waktu:</label><br>
        <input type="time" id="waktu" name="Waktu" class="inputan" required><br>

        <label for="lokasi">Lokasi:</label><br>
        <input type="text" id="lokasi" name="Lokasi" placeholder="Masukkan Lokasi" class="inputan" required><br>

        <label for="suhu">Suhu Tubuh (°C):</label><br>
        <input type="number" id="suhu" name="SuhuTubuh" placeholder="Masukkan Suhu Tubuh" class="inputan" step="0.1" min="30" max="45" required><br>

        <button type="submit" class="login-btn">Kirim Data</button>
      </form>
    </div>
  </div>
@endsection
