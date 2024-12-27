@extends('Cp.navbar')

@section('content')
  <div class="contain">
    <div class="box">
      <img src="{{ asset('img/lokasi.png') }}" alt="Lokasi">
      <p>Kunjungi tiap-tiap tempat yang Anda mau</p>
    </div>
    <div class="box">
      <img src="{{ asset('img/suhu.png') }}" alt="Suhu Tubuh">
      <p>Pemantauan suhu tubuh</p>
    </div>
    <div class="box">
      <img src="{{ asset('img/catatan.png') }}" alt="Catatan">
      <p>Catat kondisi Anda di mana pun</p>
    </div>
  </div>

  @php
  $cekData = false;
  @endphp

  <div class="crud">
    <div class="container">
      @if($data->isEmpty() || !$data->contains('UserID', session()->get('user')->UserID))
        <h1>Belum Ada Catatan</h1>
        <p>Buat catatan perjalanan Anda disini</p>
        <a href="/isi"><button class="purple-btn"> Catatan Baru </button></a>
      @else
        <h1>Daftar Catatan</h1>
        <a href="/isi"><button class="purple-btn"> Catatan Baru </button></a>
        <table>
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Waktu</th>
              <th>Lokasi</th>
              <th>Suhu Tubuh</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $datas)
              @if(session()->get('user')->UserID == $datas->UserID)
                @php
                $cekData = true;
                @endphp
                <tr>
                  <td>{{ $datas->Tanggal }}</td>
                  <td>{{ $datas->Waktu }}</td>
                  <td>{{ $datas->Lokasi }}</td>
                  <td>{{ $datas->SuhuTubuh }}</td>
                  <td>
                    <a href="/edit{{ $datas->PerjalananID }}" class="btn-action"><i class="fa fa-edit"></i></a>
                    <a href="/hapus{{ $datas->PerjalananID }}" 
                       class="btn-action" 
                       onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                      <i class="fa fa-trash"></i>
                    </a>
                  </td>
                </tr>
              @endif
            @endforeach
          </tbody>
        </table>
      @endif
    </div>
  </div>
@endsection

