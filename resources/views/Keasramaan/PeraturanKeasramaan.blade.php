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
                    <button class="btn btn-success" onclick="window.location.href='/TambahPeraturanKeasramaan'"><i class="bi bi-plus-square"></i> Tambah</button>
                    <br><br>
                    <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" cellspacing="0" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th style="width: 600px">File Peraturan</th>
                                        <th>Nama Peraturan</th>
                                        <th>Aksi</th>
                                    </tr><?php $nomor = 1;?>
                                </thead>
                                @foreach ($Peraturan as $peraturan)
                                <tr>
                                    <td><?php echo $nomor++; ?></td>
                                    <td><a href="{{url('assets')}}/DokumenPeraturan/{{$peraturan->file_peraturan}}">{{$peraturan->file_peraturan}}</a></td>
                                    <td>{{$peraturan->nama_peraturan}}</td>
                                    <td>
                                        <button class="btn btn-primary" type="button" onclick="window.location.href='/Peraturan/edit/{{$peraturan->peraturan_id}}'"> <i class="bi bi-pencil-square"> </i> Edit</button>
                                        <button class="btn btn-danger" type="button" onclick="window.location.href='/Peraturan/delete/{{$peraturan->peraturan_id}}'"> <i class="bi bi-trash"> </i> Hapus</button>
                                    </td>
                                </tr>  
                                @endforeach   
                              </table>
                    </div>
                </div>
        </div>
    </div>
</main>

@endsection