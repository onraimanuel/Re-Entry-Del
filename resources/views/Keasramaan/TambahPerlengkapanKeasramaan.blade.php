@extends('Header.HeaderKeasramaan')

@section('title','Tambah Perlengkapan - Keasramaan')

@section('container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a>Beranda</a></li>
          <li class="breadcrumb-item"><a href="{{url('/PerlengkapanKeasramaan')}}">Perlengkapan</a></li>
          <li class="breadcrumb-item active">Tambah Perlengkapan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="container-fluid"> 
          <br> 
        </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h3>Tambah Perlengkapan</h3>
                </div>
                    <div class="card-body">
                        <br>
                        <form action="{{route('Tambah.Perlengkapan')}}" method="post" id="contact-form" enctype="multipart/form-data">	
                        {{ csrf_field() }}

                            <div class="row mb-3">
                                <label for="nama_perlengkapan" class="col-sm-2 col-form-label"> Nama Perlengkapan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_perlengkapan">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="file" id="gambar" name="gambar">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="keterangan" class="col-sm-2 col-form-label" name="keterangan">Keterangan</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="keterangan" id="keterangan">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jumlah" class="col-sm-2 col-form-label" name="jumlah">Jumlah</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="jumlah" id="jumlah">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="filter" class="col-sm-2 col-form-label" name="filter">Filter</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="filter" id="gridRadios1" value="aspa" checked>
                                      <label class="form-check-label" for="gridRadios1">
                                        Aspa
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="filter" id="gridRadios2" value="aspi">
                                      <label class="form-check-label" for="gridRadios2">
                                        Aspi
                                      </label>
                                    </div>
                                  </div>
                            </div>
                            
                            <center>
                                <button class="btn btn-primary" type="submit">
                                    Tambah
                                </button>
                            </center>
                        </form>

                      </div>
                </div>
          </div>
          </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection