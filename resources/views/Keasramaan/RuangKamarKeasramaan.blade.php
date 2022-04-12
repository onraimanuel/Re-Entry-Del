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
                        <th scope="col">Kamar</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><a href="#">#1</a></th>
                            <td>Brandon Jacob</td>
                            <td><a href="#" class="text-primary">At praesentium minu</a></td>
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
    </div>
</main>

@endsection