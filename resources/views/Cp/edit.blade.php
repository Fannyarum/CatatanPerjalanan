@extends('Cp.navbar')

@section('content')
  <div class="content-container">
    <div class="text-container">
      <h1 style="text-align: center;">Edit Data</h1>
      <form action="{{ route('Cp.edit', ['id' => $data->PerjalananID]) }}" method="POST">
        @csrf 
        @method('POST')
      
        <label for="tanggal">Tanggal:</label><br>
        <input type="date" id="tanggal" name="Tanggal" class="inputan" value="{{ $data->Tanggal }}" required><br>

        <label for="waktu">Waktu:</label><br>
        <input type="time" id="waktu" name="Waktu" class="inputan" value="{{ $data->Waktu }}" required><br>

        <label for="lokasi">Lokasi:</label><br>
        <input type="text" id="lokasi" name="Lokasi" class="inputan" value="{{ $data->Lokasi }}" required><br>

        <label for="suhu">Suhu Tubuh (°C):</label><br>
        <input type="number" id="suhu" name="SuhuTubuh" class="inputan" value="{{ $data->SuhuTubuh }}" step="0.1" min="30" max="45" required><br>

        <button type="submit" class="login-btn">Update Data</button>
      </form>
    </div>
  </div>
@endsection
