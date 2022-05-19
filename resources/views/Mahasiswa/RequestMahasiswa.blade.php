@extends('Header.HeaderMahasiswa')

@section('title', 'Data Diri - Mahasiswa')

@section('container')
    
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a>Beranda</a></li>
          <li class="breadcrumb-item"><a href="{{url('/IndexMahasiswa')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Request Re-Entry</li>
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
                    <h3>Form Pengajuan Re-Entry</h3>
                </div>
                    <div class="card-body">
                        <br>
                        <form class="row g-3" action="{{route('Kirim.Request')}}" method="POST" enctype="multipart/form-data">	
                          {{ csrf_field() }}
                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="nama" placeholder="Your Name" name="nama">
                              <label for="nama">Nama</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="Nim" placeholder="NIM" name="nim">
                              <label for="Nim">NIM</label>
                            </div>
                          </div>
                          <div class="col-md-4 ">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="angkatan" placeholder="Angkatan" name="angkatan">
                              <label for="Angkatan">Angkatan</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="prodi" placeholder="Prodi" name="prodi">
                              <label for="Prodi">Prodi</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-floating">
                              <textarea class="form-control" placeholder="Address" id="Keperluan" style="height: 100px;" name="keperluan"></textarea>
                              <label for="Keperluan">Keperluan</label>
                            </div>
                          </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                              <div class="form-floating">
                                <input type="text" class="form-control" id="asal" placeholder="Asal Daerah" name="asal">
                                <label for="Asal">Asal Daerah</label>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="date" class="form-control" id="asal" placeholder="Tanggal Re-Entry" name="tanggal">
                              <label for="Asal">Tanggal Re-Entry</label>
                            </div>
                          </div>
                      </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
          
                      </div>
                </div>
          </div>
          </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection