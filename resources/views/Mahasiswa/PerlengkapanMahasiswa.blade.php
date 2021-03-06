@extends('Header.HeaderMahasiswa')

@section('title','Perlengkapan - Mahasiswa')

@section('container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/IndexMahasiswa')}}">Beranda</a></li>
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
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perlengkapan</th>
                                <th>Gambar</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th><?php $nomor = 1;?>
                              </tr>
                          </thead>
                          @foreach ($PerlengkapanAspa as $item)
                          <tr>
                              <td><?php echo $nomor++;?></td>
                              <td>{{$item->nama_perlengkapan}}</td>
                              <td><center><img src="{{url('assets')}}/Perlengkapan/{{$item->gambar}}" alt="" style="width: 200px"></center></td>
                              <td  style="width: 300px">{{$item->keterangan}}</td>
                              <td>{{$item->jumlah}}</td>
                        @endforeach
                      </table>
                </div>
            </div>
            <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="Aspi">
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perlengkapan</th>
                                <th>Gambar</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                            </tr><?php $nomor = 1;?>
                          </tr>
                        </thead>
                      
                        @foreach ($PerlengkapanAspi as $item)
                        <tr>
                          <td><?php echo $nomor++;?></td>
                          <td>{{$item->nama_perlengkapan}}</td>
                          <td><center><img src="{{url('assets')}}/Perlengkapan/{{$item->gambar}}" alt="" style="width: 200px"></center></td>
                          <td  style="width: 300px">{{$item->keterangan}}</td>
                          <td>{{$item->jumlah}}</td>
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