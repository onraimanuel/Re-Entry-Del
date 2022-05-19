@extends('Header.HeaderMahasiswa')

@section('title', 'Layanan - Mahasiswa')

@section('container')
    
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/IndexMahasiswa')}}">Beranda</a></li>
          <li class="breadcrumb-item active">Layanan Mahasiswa</li>
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
                    <h3>Instruksi Self Assessment Risiko Covid - 19</h3>
                </div>
                    <div class="card-body">
                        <br>
                        <form class="row g-3" action="{{route('Kirim.Layanan')}}" method="POST" enctype="multipart/form-data">	
                          {{ csrf_field() }}
                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="nama" placeholder="Your Name" name="nama">
                              <label for="nama">Nama</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="Nik" placeholder="NIK" name="nik">
                              <label for="Nik">NIK</label>
                            </div>
                          </div>
                          <div class="col-md-4 ">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="angkatan" placeholder="Angkatan" name="angkatan">
                              <label for="Angkatan">Angkatan</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="prodi" placeholder="Prodi" name="prodi">
                              <label for="Prodi">Prodi</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-floating">
                              <input type="date" class="form-control" id="tanggal" placeholder="Tanggal" name="tanggal">
                              <label for="tanggal">Tanggal</label>
                            </div>
                          </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                              <div class="form-floating">
                                <input type="number" class="form-control" id="notel" placeholder="Nomor Telepon / HP/ WA" name="nohp">
                                <label for="notel">Nomor Telepon / HP/ WA</label>
                              </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                          <p>Demi Kesehatan dan keselamatan bersama di tempat kerja / Lingkungan / Sekolah / Kampus / Asrama dll, Anda harus <b>JUJUR</b> dalam menjawab pertanyaan dibawah ini
                          <br>
                          Dalam 14 hari, beri tanda centang <b>YA / TIDAK</b>, apakah anda pernah mengalami hal-hal berikut :
                          </p>
                        </div>
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
                              <tr>
                                <td>
                                  1
                                </td>
                                <td>
                                  Apakah pernah keluar rumah/tempat umum (pasar, fasyankes, kerumunan orang, dll) ?
                                </td>
                                <td>
                                    <input type="radio" name="value1" id="" value="Ya">
                                  </label>
                                </td>
                                <td>
                                    <input type="radio" name="value1" id="" value="Tidak">
                                  </label>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  2
                                </td>
                                <td>
                                  Apakah pernah melakukan perjalanan transportasi umum ?
                                </td>
                                <td>
                                    <input type="radio" name="value2" id="" value="Ya">
                                  </label>
                                </td>
                                <td>
                                    <input type="radio" name="value2" id="" value="Tidak">
                                  </label>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  3
                                </td>
                                <td>
                                  Apakah pernah melakukan perjalanan luar daerah/kota/internasional, atau ke wilayah yang terjangkit / zona merah ?
                                </td>
                                <td>
                                    <input type="radio" name="value3" id="" value="Ya">
                                  </label>
                                </td>
                                <td>
                                    <input type="radio" name="value3" id="" value="Tidak">
                                  </label>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  4
                                </td>
                                <td>
                                  Apakah anda mengikuti kegiatan yang melibatkan orang banyak ?
                                </td>
                                <td>
                                    <input type="radio" name="value4" id="" value="Ya">
                                  </label>
                                </td>
                                <td>
                                    <input type="radio" name="value4" id="" value="Tidak">
                                  </label>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  5
                                </td>
                                <td>
                                  Apakah anda memiliki riwayat kontak erat dengan orang yang dinyatakan Kasus Suspek, Kasus Probable, Kasus Konfirmasi, Kontak Erat dan / atau Discarded (berjabat tangan, berbicara, berada dalam satu ruangan/ satu rumah) ?
                                </td>
                                <td>
                                    <input type="radio" name="value5" id="" value="Ya">
                                  </label>
                                </td>
                                <td>
                                    <input type="radio" name="value5" id="" value="Tidak">
                                  </label>
                                </td>
                              </tr>

                              <tr>
                                <td>
                                  6
                                </td>
                                <td>
                                  Apakah anda pernah mengalami demam/batuk/pilek/sakit tenggorokan/sesak dalam 14 hari terakhir ?
                                </td>
                                <td>
                                    <input type="radio" name="value6" id="" value="Ya">
                                  </label>
                                </td>
                                <td>
                                    <input type="radio" name="value6" id="" value="Tidak">
                                  </label>
                                </td>
                              </tr>

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
                          <div class="row">
                            <h6><b>TINDAK LANJUT :</b></h6>
                            <p>
                              Risiko Besar, agar dilakukan investigasi dan tidak diperkenankan masuk ke tempat acara. Tamu dilakukan pemeriksaan RT-PCR, jika tidak tersedia dapat dilakukan Rapid Tes oleh petugas kesehatan/fasyankes setempat
                            </p>
                            <p>Risiko kecil - sedang, diperbolehkan masu namun dilakukan pemeriksaan suhu di pintu masuk. Apabila didapatkan suhu ≥ 37,3 <sup>o</sup>C agar dilakukan investigasi dan pemeriksaan petugas kesehatan. Jika dipastikan tamu tidak memenuhi kriteria Kasus Suspek, Kasus Probable, Kasus Konfirmasi, Kontak Erat dan/atau <i>Discarced</i>. Tamu dapat masuk ke tempat acara.</p>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <input class="form-control" type="file" id="formFile" name="fileswab">
                          <p style="font-size:10px; color:red">* File Upload Hasil SWAB</p>
                        </div>
                        <div class="col-md-12">
                          <input class="form-control" type="file" id="formFile" name="filepersetujuan">
                          <p style="font-size:10px; color:red">* File Upload Surat Persetujuan Orang Tua. <br>* Klik <a href="{{asset('assets/Dokumen/Form_Persetujuan_OrangTua.pdf')}}">disini</a> untuk mengunduh.</p>
                        </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                    </div>
          </div>
          </div>
          </div>
      </div>
    </section>

  </main><!-- End #main -->

  <script>
    $(document).on('click', 'input[type="checkbox"]', function() {      
        $('input[type="checkbox"]').not(this).prop('checked', false);      
    });
    </script>
@endsection