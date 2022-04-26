@extends('Header.HeaderKeasramaan')

@section('title','Peraturan - Keasramaan')

@section('container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/IndexKeasramaan')}}">Beranda</a></li>
            <li class="breadcrumb-item active">Peraturan Mahasiswa</li>
        </ol>
      </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Peraturan Mahasiswa Selama Karantina</h5>
                <div class="card-body ">
                    <button class="btn btn-success"><i class="bi bi-plus-square"></i> Tambah</button>
                    <br><br>
                    <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" cellspacing="0" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th style="width: 600px">File Peraturan</th>
                                        <th>Nama Peraturan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <td>1</td>
                                        <td>PDT</td>
                                        <td>OK</td>
                                        <td>
                                            <button class="btn btn-primary"> <i class="bi bi-pencil-square"> </i> Edit</button>
                                            <button class="btn btn-danger"><i class="bi bi-trash"> </i> Hapus</button>
                                        </td>
                                    </tr>    

                                    </tbody>
                              </table>
                    </div>
                </div>
        </div>
    </div>
</main>

@endsection