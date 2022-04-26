@extends('Header.HeaderKantin')

@section('title','Dashboard - Kantin')

@section('container')
    
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/IndexKantin')}}">Beranda</a></li>
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
                                <th scope="col">Nama Gedung</th>
                                <th scope="col">Tanggal Karantina</th>
                                <th scope="col">Tanggal Selesai Karantina</th>
                                <th scope="col">Jumlah Mahasiswa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><a href="#">1</a></th>
                                    <td>Rusun 3</td>
                                    <td>20 - April - 2022</td>
                                    <td>25 - April - 2022</td>
                                    <td>20</td>
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