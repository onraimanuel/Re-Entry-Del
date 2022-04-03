@extends('MahasiswaHeader.Header')

@section('title','Peraturan - Mahasiswa')

@section('container')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/IndexMahasiswa')}}">Beranda</a></li>
          <li class="breadcrumb-item active">Peraturan Mahasiswa</li>
        </ol>
      </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Peraturan Mahasiswa Selama Karantina</h5>
            <ul>
                <li> <a href="{{url('assets')}}/Dokumen/Protokol_Re-entry.docx">Protokol Re-entry</a></li>
              </ul>  
        </div>
    </div>
</main>
@endsection