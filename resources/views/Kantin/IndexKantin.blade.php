@extends('Header.HeaderKantin')

@section('title','Dashboard - Kantin')

@section('container')
    
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/IndexKantin')}}">Beranda</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">Data Mahasiswa Re-Entry</h5>
        
                            <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Gedung</th>
                                <th scope="col">Tanggal Karantina</th>
                                <th scope="col">Tanggal Selesai Karantina</th>
                                <th scope="col">Nama Mahasiswa</th>
                                </tr><?php $nomor = 1?>
                            </thead>
                            <tbody>
                                @foreach ($ruangkamar as $item)
                                <tr>
                                    <th scope="row"><a href="#">{{$nomor++}}</a></th>
                                    <td>{{$item->nama_asrama}}</td>
                                    <td>
                                        <?php
                                            $tanggal = $item->users->tanggal;
                                            $tanggal = date('d M Y');
                                            echo $tanggal;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $tgl1 = $item->users->tanggal;// pendefinisian tanggal awal
                                            $tgl2 = date('d M Y', strtotime('+3 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
                                            echo $tgl2;
                                        ?>
                                    </td>
                                    <td>{{$item->user->name}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
        
                        </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->
@endsection