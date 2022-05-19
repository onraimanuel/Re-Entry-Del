@extends('Header.HeaderMahasiswa')

@section('title','Dashboard - Mahasiswa')

@section('container')
    
  <main id="main" class="main">

      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/IndexMahasiswa')}}">Beranda</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
        <button type="button" class="btn btn-success" onclick="window.location.href='/RequestMahasiswa'"><i class="bi bi-pencil-square"> Request</i></button>
      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">
          <div class="container-fluid"> 
            <br> 
          </div>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                  <div class="card-header py-3">
                  </div>
                  <div class="card-body ">
                      <div class="table-responsive">
                              <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" >
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Status</th>
                                          <th>Keperluan</th>
                                          <th>Asal Daerah</th>
                                          <th>Aksi</th> <?php $nomor = 1?>
                                      </tr>
                                  </thead>
                                  @foreach ($re_entry as $item)
                                  <tr>
                                    <td>{{$nomor++}}</td>
                                    <td><span class="badge {{($item->status == "Menunggu") ? 'bg-warning' : 'bg-success';}}" >{{$item->status}}</span></td>
                                    <td>{{$item ->keperluan}}</td>
                                    <td>{{$item->asal}}</td>
                                    <td><button class="btn btn-success" onclick="window.location.href='/DetailRequestMahasiswa/{{$item->id}}'"><i class="bi bi-wrench"></i>  Detail</button></td>
                                </tr>  
                                  @endforeach       
                                      </tbody>
                                </table>
                      </div>
                  </div>
            </div>
            </div>
        </div>
      </section>

    </main><!-- End #main -->
@endsection