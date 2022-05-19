@extends('Header.HeaderKeasramaan')

@section('title','Ruang Kamar - Keasramaan')

@section('container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/IndexKeasramaan')}}">Beranda</a></li>
          <li class="breadcrumb-item active">Ruang Kamar Karantina</li>
        </ol>
      </nav>
    </div>

    <div class="col-lg-12">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">Ruang Kamar Karantina</h5>

                    <table class="table table-borderless datatable  align-center">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Asrama</th>
                        <th scope="col">Kamar</th>
                        <th scope="col">Aksi</th>
                        </tr><?php $nomor = 1?>
                    </thead>
                    <tbody>
                        @foreach ($ruangkamar as $item)
                        <tr>
                            <th scope="row"><a href="#">{{$nomor++}}</a></th>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->nama_asrama}}</td>
                            <td>{{$item->nomor_kamar}}</td>
                            <td>
                                <button class="btn btn-primary" onclick="window.location.href='/RuangKamar/edit/{{$item->ruangkamar_id}}'"><i class="bi bi-pencil-square"> </i> Edit</button>
                                <button class="btn btn-danger" onclick="window.location.href='/RuangKamar/delete/{{$item->ruangkamar_id}}'"><i class="bi bi-trash"> </i> Hapus</button>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                    </table>

                </div>

                </div>
            </div>
        </div>
    </div>
</main>

@endsection