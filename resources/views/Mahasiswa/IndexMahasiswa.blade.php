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
                                        <th>Oleh</th>
                                        <th>Keperluan</th>
                                        <th>Asal Daerah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <td>1</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                        <td>PDT</td>
                                        <td>Praktikum TA</td>
                                        <td>Medan</td>
                                        <td><button class="btn btn-success" onclick="window.location.href='{{url('/DetailRequestMahasiswa')}}'"><i class="bi bi-wrench"></i>  Detail</button></td>
                                    </tr>         
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