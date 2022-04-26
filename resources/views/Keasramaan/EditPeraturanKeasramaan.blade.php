@extends('Header.HeaderKeasramaan')

@section('title','Edit Peraturan - Keasramaan')

@section('container')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a>Beranda</a></li>
          <li class="breadcrumb-item"><a href="{{url('/PeraturanKeasramaan')}}">Peraturan</a></li>
          <li class="breadcrumb-item active">Edit Peraturan</li>
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
                    <h3>Edit Peraturan</h3>
                </div>
                    <div class="card-body">
                        <br>
                        <form action="{{route('Update.Peraturan',$EditPeraturan)}}" method="post" id="contact-form" enctype="multipart/form-data">	
                        {{ csrf_field() }}
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="file" id="formFile" name="file_peraturan">{{$EditPeraturan->file_peraturan}}
                                </div>
                              </div>
                            <div class="row mb-3">
                                <label for="namafile" class="col-sm-2 col-form-label" name="nama_peraturan">Nama File</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama_peraturan" value="{{$EditPeraturan->nama_peraturan}}">
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