@extends('Header.HeaderKlinik')

@section('title','Dashboard - Klinik')

@section('container')
    
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/IndexKlinik')}}">Beranda</a></li>
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
                                <th scope="col">Aksi</th>
                                </tr><?php $nomor=1 ?>
                            </thead>
                            <tbody>
                                @foreach ($layanan as $item)
                                <tr>
                                    <th scope="row">{{$nomor++}}</th>
                                    <td>{{$item->nama}}</td>
                                    <td>
                                        <button type="button" class="btn btn-success" onclick="window.location.href='/DetailKlinik/{{$item->layanan_id}}'"><i class="bi bi-wrench"></i> Detail</button>
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