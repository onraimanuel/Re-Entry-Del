@extends('Header.HeaderKeamanan')

@section('title','Dashboard - Keamanan')

@section('container')
    
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/IndexKeamanan')}}">Beranda</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">Data Mahasiswa Re-Entry</h5>
        
                            <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Prodi</th>
                                <th scope="col">Angkatan</th>
                                <th scope="col">Asal</th>
                                <th scope="col">Tanggal Re-Entry</th>
                                </tr><?php $nomor = 1?>
                            </thead>
                            <tbody>
                                @foreach ($re_entry as $item)
                                <tr>
                                    <th scope="row"><a href="">{{$nomor++}}</a></th>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->nim}}</td>
                                    <td>{{$item->prodi}}</td>
                                    <td>{{$item->angkatan}}</td>
                                    <td>{{$item->asal}}</td>
                                    <td>                                    
                                    <?php
                                        $date=date_create($item->tanggal);
                                        echo date_format($date,"d M Y");
									?>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
        
                        </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->
@endsection