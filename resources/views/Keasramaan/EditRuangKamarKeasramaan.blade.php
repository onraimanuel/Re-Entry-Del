@extends('Header.HeaderKeasramaan')

@section('title','Edit Ruang Kamar - Keasramaan')

@section('container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{url('/RuangKamarKeasramaan')}}">Ruang Kamar Karantina</a></li>
            <li class="breadcrumb-item active">Edit Ruang Kamar Karantina</li>
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
                      <h3>Edit Ruang Kamar Karantina</h3>
                  </div>
                      <div class="card-body">
                          <br>
                          <form action="{{route('Update.RuangKamar',$EditRuangKamar)}}" method="post" id="contact-form" enctype="multipart/form-data">	
                          {{ csrf_field() }}  
                              <div class="row mb-3">
                                  <label for="nama_asrama" class="col-sm-2 col-form-label" name="nama_asrama">Nama Asrama</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_asrama" id="nama_asrama" value="{{$EditRuangKamar->nama_asrama}}">
                                  </div>
                              </div>
                              
                              <div class="row mb-3">
                                <label for="nomor_kamar" class="col-sm-2 col-form-label" name="nomor_kamar">Ruang Kamar</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nomor_kamar" id="nomor_kamar" value="{{$EditRuangKamar->nomor_kamar}}">
                                </div>
                              </div>

                              <center>
                                  <button class="btn btn-primary" type="submit">
                                      Simpan
                                  </button>
                              </center>
                          </form>
  
                        </div>
                  </div>
            </div>
            </div>
        </div>
      </section>

@endsection