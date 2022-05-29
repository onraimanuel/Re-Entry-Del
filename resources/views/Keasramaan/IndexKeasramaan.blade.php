@extends('Header.HeaderKeasramaan')

@section('title','Dashboard - Keasramaan')

@section('container')

    
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/IndexKeasramaan')}}">Beranda</a></li>
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
                                </tr><?php $nomor= 1?>
                            </thead>
                            <tbody>
                                @foreach ($DataRedel as $item)
                                <tr>
                                    <th scope="row"><a href="">{{$nomor++}}</a></th>
                                    <td>{{$item->nama}}</td>
                                    <td><span class="badge {{($item->status == "Menunggu") ? 'bg-warning' : 'bg-success';}}" >{{$item->status}}</span></td>
                                    <td>
                                        <button type="button" class="btn btn-success" onclick="window.location.href='/DetailRequestKeasramaan/{{$item->id}}'"><i class="bi bi-wrench"></i> Detail</button>
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

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-6">
                        <div class="col-md-12">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Re-Entry</h5>
                
                                <!-- Pie Chart -->
                                <div id="pieChart" style="min-height: 350px;" class="echart"></div>
                
                                <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#pieChart")).setOption({
                                    title: {
                                        text: 'Data Mahasiswa Re-Entry per Angkatan',
                                        left: 'right'
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
                                    <div class="panel">
                                        <div id="chartbulan"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->
@stop

@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
    Highcharts.chart('chartbulan', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Mahasiswa Re-Entry'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: {!!json_encode($DataBulan)!!},
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }, {
        name: 'New York',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

    }, {
        name: 'London',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

    }, {
        name: 'Berlin',
        data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

    }]
});
</script>

@stop