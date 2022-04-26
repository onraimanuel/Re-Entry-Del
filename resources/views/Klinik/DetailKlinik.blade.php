@extends('Header.HeaderKlinik')

@section('title','Dashboard - Klinik')

@section('container')

    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{url('/IndexKlinik')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Detail Instruksi Self Assessment</li>
            </ol>
        </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
        <div class="row">
            <div class="container-fluid"> 
            <br> 
            </div>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3>Detail Form Pengajuan Re-Entry</h3>
                    </div>
                        <div class="card-body">
                            <br>
                            <form class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                <input type="text" class="form-control" id="nama" value="Onra" name="nama" readonly>
                                <label for="nama">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                <input type="text" class="form-control" id="Nim" value="11420035" readonly>
                                <label for="Nim">NIM</label>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-floating">
                                <input type="text" class="form-control" id="angkatan" name="Angkatan" value="2020" readonly>
                                <label for="Angkatan">Angkatan</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                <input type="text" class="form-control" id="prodi" name="Prodi" value="D4TRPL" readonly>
                                <label for="Prodi">Prodi</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="col-md-12">
                                    <table class="table table-bordered" style="text-align: center;">
                                      <thead>
                                        <tr>
                                          <th style="width: 100px;" >NO</th>
                                          <th>PERNYATAAN</th>
                                          <th style="width: 100px">YA</th>
                                          <th style="width: 100px">TIDAK</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($pertanyaan as $pertanyaan)
                                        <tr>
                                          <td>
                                            {{$pertanyaan->pertanyaan_id}}
                                          </td>
                                          <td>
                                            {{$pertanyaan->pertanyaan}}
                                          </td>
                                          <td>
                                              <input type="radio" name="{{$pertanyaan->pertanyaan_id}}" id="" value="Ya">
                                          </td>
                                          <td>
                                              <input type="radio" name="{{$pertanyaan->pertanyaan_id}}" id="" value="Tidak">
                                          </td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                    <div class="row">
                                      <div class="col-md-4">
                                        <p> 0 = Risiko Kecil</p>
                                      </div>
                                      <div class="col-md-4">
                                        <p> 1 - 4 = Risiko Sedang</p>
                                      </div>
                                      <div class="col-md-4">
                                        <p> > 5 = Risiko Besar</p>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12">
                                <div class="form-floating">
                                    <label for="FileSwab">
                                        File Swab : <a href="">ok.pdf</a>
                                    </label>
                                    
                                </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                                <div class="col-md-12">
                                <div class="form-floating">
                                    <label for="FileSwab">
                                        File Persetujuan : <a href="">Persetujuan.pdf</a>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <br><br><br>
                            </form>
            
                        </div>
                    </div>
            </div>
            </div>
        </div>
        </section>

    </main><!-- End #main -->