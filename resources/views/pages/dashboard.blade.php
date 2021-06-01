@extends('layouts.admin')
@section('title', 'Dashboard SIA-UNIV')
    
@section('content')
    
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
      </div>
      <div class="row">
        {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Mahasiswa</h4>
              </div>
              <div class="card-body">
                0
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Statistics</h4>
              <div class="card-header-action">
              </div>
            </div>
            <div class="card-body">
              <div id="chartMatkul"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      </div>
    </section>
</div>


<script>
  // Create the chart
Highcharts.chart('chartMatkul', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Jumlah Mahasiswa Berdasarkan Mata Kuliah'
    },
   
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Jumlah Mahasiswa'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "Mata Kuliah",
            colorByPoint: true,
            data: {!!$jml_mhs!!}
        }
    ],
});
         
              
</script>
@endsection
