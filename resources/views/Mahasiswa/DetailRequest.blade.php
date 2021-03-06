@extends('Header.HeaderMahasiswa')

@section('title', 'Detail Request - Mahasiswa')

@section('container')
    
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a>Beranda</a></li>
          <li class="breadcrumb-item"><a href="{{url('/IndexMahasiswa')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">Detail Request Re-Entry</li>
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
                    <h3>Detail Form Pengajuan Re-Entry</h3>
                </div>
                    <div class="card-body">
                        <br>
                        <form class="row g-3" action="{{$DetailReentry}}">
                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="nama" placeholder="Your Name" name="nama" value="{{$DetailReentry->nama}}">
                              <label for="nama">Nama</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="Nim" placeholder="NIM" value="{{$DetailReentry->nim}}">
                              <label for="Nim">NIM</label>
                            </div>
                          </div>
                          <div class="col-md-4 ">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="angkatan" placeholder="Angkatan" name="angkatan" value="{{$DetailReentry->angkatan}}">
                              <label for="Angkatan">Angkatan</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="prodi" placeholder="Prodi" name="Prodi" value="{{$DetailReentry->prodi}}">
                              <label for="Prodi">Prodi</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-floating">
                              <textarea class="form-control" placeholder="Address" id="Keperluan" style="height: 100px;" name="Keperluan">{{$DetailReentry->keperluan}}</textarea>
                              <label for="Keperluan">Keperluan</label>
                            </div>
                          </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                              <div class="form-floating">
                                <input type="text" class="form-control" id="asal" placeholder="Asal Daerah" name="Asal" value="{{$DetailReentry->asal}}">
                                <label for="Asal">Asal Daerah</label>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="date" class="form-control" id="tanggal" placeholder="Tanggal Re-Entry" name="tanggal" value="{{$DetailReentry->tanggal}}">
                              <label for="tanggal">Tanggal Re-Entry</label>
                            </div>
                          </div>
                      </div>
                        <div class="col-md-1">
                            <label for="status">Status : </label>
                        </div>
                        <div class="col-md-11">
                            <div class="form-floating">
                              <span class="badge {{($DetailReentry->status == "Menunggu") ? 'bg-warning' : 'bg-success';}}" >{{$DetailReentry->status}}</span>
                            </div>
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