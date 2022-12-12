@extends('dashboard.layout')
@section('title', 'Inicio')
@section('id'){{Auth::user()->id}}@endsection
@section('photo'){{Auth::user()->avatar}}@endsection
@section('name'){{Auth::user()->name}}@endsection
@section('proffession'){{Auth::user()->proffession}}@endsection
@section('projects')
@if ($projects == NULL)
<li><a class="dropdown-item border-radius-md" href="{{route('homes.create')}}">Crea un nuevo proyecto</a></li>
@endif
@foreach ($projects as $project)
<li><a class="dropdown-item border-radius-md" href="{{$project->url}}">{{$project->name}}</a></li>
@endforeach

@endsection
@section('main')
<div class="container-fluid py-4">
@foreach ($projects as $project)
<div class="row mt-4">
  <div class="col-lg-12 col-md-12 mt-4 mb-4">
    <div class="card z-index-2 ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-danger shadow-primary border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Estadisticas de Vistas</h6>
        <p class="text-sm ">{{$project->name}}</p>
        <img src="{{$project->url_qr}}" alt="">
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">schedule</i>
          <p class="mb-0 text-sm">Lecturas del ultimo año</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
</div>
@section('chart')
<script>
  var ctx = document.getElementById("chart-line").getContext("2d");


    new Chart(ctx, {
      type: "line",
      data: {
        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        datasets: [{
          label: "Visitas",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: <?php print_r(json_encode($views)); ?>,
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
</script>
@endsection
@endsection