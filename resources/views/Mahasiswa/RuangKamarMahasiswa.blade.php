@extends('Header.HeaderMahasiswa')

@section('title','Ruang Karantina - Mahasiswa')

@section('container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/IndexMahasiswa')}}">Beranda</a></li>
          <li class="breadcrumb-item active">Ruang Kamar Karantina</li>
        </ol>
      </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tempat Karantina</h5>
            <h6>Tempat Karantina Anda : </h6>
            @foreach ($ruangkamar as $item)
                <p>Nama Asrama : <b>{{$item->nama_asrama}}</b></p>
                <p>Nomor Kamar Anda : <b>{{$item->nomor_kamar}}</b></p>
            @endforeach
        </div>
    </div>
</main>
@endsection