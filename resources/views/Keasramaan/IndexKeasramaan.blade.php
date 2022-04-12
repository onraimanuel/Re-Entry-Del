@extends('Header.HeaderKeasramaan')

@section('title','Dashboard - Keasramaan')

@section('container')
    
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
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
                                <th scope="col">Nama</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><a href="#">1</a></th>
                                    <td>Brandon Jacob</td>
                                    <td><span class="badge bg-success">Approved</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success"><i class="bi bi-wrench"></i> Detail</button>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
        
                        </div>
        
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-6">
                        <div class="col-md-12">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Re-Entry</h5>
                
                                <!-- Pie Chart -->
                                <div id="pieChart" style="min-height: 358px;" class="echart"></div>
                
                                <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#pieChart")).setOption({
                                    title: {
                                        text: 'Data Mahasiswa Re-Entry per Angkatan',
                                        left: 'center'
                                    },
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        orient: 'vertical',
                                        left: 'left'
                                    },
                                    series: [{
                                        name: 'Access From',
                                        type: 'pie',
                                        radius: '50%',
                                        data: [{
                                            value: 5,
                                            name: '2016'
                                        },
                                        {
                                            value: 735,
                                            name: '2017'
                                        },
                                        {
                                            value: 580,
                                            name: '2018'
                                        },
                                        {
                                            value: 484,
                                            name: '2019'
                                        },
                                        {
                                            value: 300,
                                            name: '2020'
                                        },
                                        {
                                            value: 200,
                                            name: '2021'
                                        }
                                        ],
                                        emphasis: {
                                        itemStyle: {
                                            shadowBlur: 10,
                                            shadowOffsetX: 0,
                                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                                        }
                                        }
                                    }]
                                    });
                                });
                                </script>
                                <!-- End Pie Chart -->
                
                            </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Diagram Mahasiswa Re-Entry per bulan</h5>
                    
                                    <!-- Bar Chart -->
                                    <canvas id="barChart" style="max-height: 400px;"></canvas>
                                    <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#barChart'), {
                                        type: 'bar',
                                        data: {
                                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                            datasets: [{
                                            label: 'Bar Chart',
                                            data: [65, 59, 80, 81, 56, 55, 40],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(255, 159, 64, 0.2)',
                                                'rgba(255, 205, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(201, 203, 207, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgb(255, 99, 132)',
                                                'rgb(255, 159, 64)',
                                                'rgb(255, 205, 86)',
                                                'rgb(75, 192, 192)',
                                                'rgb(54, 162, 235)',
                                                'rgb(153, 102, 255)',
                                                'rgb(201, 203, 207)'
                                            ],
                                            borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                            }
                                        }
                                        });
                                    });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->
@endsection