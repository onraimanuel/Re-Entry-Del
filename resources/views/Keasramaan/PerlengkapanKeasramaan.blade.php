@extends('Header.HeaderKeasramaan')

@section('title','Perlengkapan - Keasramaan')

@section('container')
<!-- MAIN -->


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/IndexKeasramaan')}}">Beranda</a></li>
          <li class="breadcrumb-item active">Perlengkapan</li>
        </ol>
      </nav>
    </div>

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Perlengkapan Mahasiswa</h5>
    
          <!-- Bordered Tabs Justified -->
          <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
            <li class="nav-item flex-fill" role="presentation">
              <button class="nav-link w-100 active" id="Aspa" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true">Aspa</button>
            </li>
            <li class="nav-item flex-fill" role="presentation">
              <button class="nav-link w-100" id="Aspi" data-bs-toggle="tab" data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Aspi</button>
            </li>
          </ul>
          <div class="tab-content pt-2" id="borderedTabJustifiedContent">
            <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="Aspa">

                <button class="btn btn-success" onclick="window.location.href='/TambahPerlengkapanKeasramaan'" type="button"><i class="bi bi-plus-square"></i> Tambah</button>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th style="width: 300px">Nama Perlengkapan</th>
                                <th>Gambar</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                                <th>Aksi</th><?php $nomor = 1;?>
                            </tr>
                        </thead>
                        @foreach ($PerlengkapanAspa as $item)
                        <tr>
                            <td><?php echo $nomor++;?></td>
                            <td>{{$item->nama_perlengkapan}}</td>
                            <td><center><img src="{{url('assets')}}/Perlengkapan/{{$item->gambar}}" alt="" style="width: 200px"></center></td>
                            <td  style="width: 300px">{{$item->keterangan}}</td>
                            <td>{{$item->jumlah}}</td>
                            <td class="text-center">
                                <button class="btn btn-primary" onclick="window.location.href='/Perlengkapan/edit/{{$item->perlengkapan_id}}'"> <i class="bi bi-pencil-square"></i> Edit</button>
                                <button class="btn btn-danger" onclick="window.location.href='/Perlengkapan/delete/{{$item->perlengkapan_id}}'"><i class="bi bi-trash"> </i> Hapus</button>
                            </td>
                        </tr> 
                        @endforeach
                      </table>
                </div>
            </div>
            <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="Aspi">
                <button class="btn btn-success" onclick="window.location.href='/TambahPerlengkapanKeasramaan'" type="button"><i class="bi bi-plus-square"></i> Tambah</button>
                <br>
                <br>
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th style="width: 300px">Nama Perlengkapan</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr><?php $nomor = 1;?>
                    </thead>
                    @foreach ($PerlengkapanAspi as $item)
                      <tr>
                          <td><?php echo $nomor++; ?></td>
                          <td>{{$item->nama_perlengkapan}}</td>
                          <td><center><img src="{{url('assets')}}/Perlengkapan/{{$item->gambar}}" alt="" style="width: 200px"></center></td>
                          <td  style="width: 300px">{{$item->keterangan}}</td>
                          <td>{{$item->jumlah}}</td>
                          <td class="text-center">
                              <button class="btn btn-primary" onclick="window.location.href='/Perlengkapan/edit/{{$item->perlengkapan_id}}'"> <i class="bi bi-pencil-square"> </i> Edit</button>
                              <button class="btn btn-danger" onclick="window.location.href='/Perlengkapan/delete/{{$item->perlengkapan_id}}'"><i class="bi bi-trash"> </i> Hapus</button>
                          </td>
                      </tr>
                    @endforeach
                  </table>
                </div>
            </div>
          </div><!-- End Bordered Tabs Justified -->
          
        </div>
    </div>
</main>

@endsection