@extends('Header.HeaderHRD')

@section('title','Detail Request - HRD')

@section('container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a>Beranda</a></li>
          <li class="breadcrumb-item"><a href="{{url('/IndexHrd')}}">Dashboard</a></li>
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
                        <form class="row g-3" action="{{$DetailReentry}}" method="post" id="contact-form" enctype="multipart/form-data">	
                          {{ csrf_field() }}
                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="nama" name="nama" value="{{$DetailReentry->nama}}">
                              <label for="nama">Nama</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="Nim" placeholder="NIM" name="nim" value="{{$DetailReentry->nim}}">
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
                              <input type="text" class="form-control" id="prodi" placeholder="Prodi" name="prodi" value="{{$DetailReentry->prodi}}">
                              <label for="Prodi">Prodi</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-floating">
                              <textarea class="form-control" placeholder="Address" id="Keperluan" style="height: 100px;" name="keperluan">{{$DetailReentry->keperluan}}</textarea>
                              <label for="Keperluan">Keperluan</label>
                            </div>
                          </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                              <div class="form-floating">
                                <input type="text" class="form-control" id="asal" placeholder="Asal Daerah" name="asal" value="{{$DetailReentry->asal}}">
                                <label for="Asal">Asal Daerah</label>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                              <select class="form-select" name="status">
                                <option>{{$DetailReentry->status}}</option>
                              </select>
                            </div>
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