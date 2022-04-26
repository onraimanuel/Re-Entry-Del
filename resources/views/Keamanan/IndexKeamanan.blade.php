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
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><a href="#">1</a></th>
                                    <td>Onra</td>
                                    <td>11420035</td>
                                    <td>D4TRPL</td>
                                    <td>2020</td>
                                    <td>Balige</td>
                                    <td>04 April 2022</td>
                                </tr>
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