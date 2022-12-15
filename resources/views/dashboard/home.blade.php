@extends('dashboard.layout')
@section('title', 'Inicio')
@section('id'){{Auth::user()->id}}@endsection
@section('photo'){{Auth::user()->avatar}}@endsection
@section('name'){{Auth::user()->name}}@endsection
@section('proffession'){{Auth::user()->proffession}}@endsection
@section('head')
    <style>
        .h-100{
            height: 100vh!important;
        }
    </style>
@endsection
@section('projects')
<div class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Mis Proyectos</a>
  <div class="dropdown-menu bg-transparent border-0">
      @foreach ($projects as $project)
      <a href="{{$project->url}}" class="dropdown-item">{{$project->name}}</a>
      @endforeach
      <a href="{{route('project.create')}}" class="dropdown-item">Crea un nuevo proyecto</a>
  </div>
</div>

@endsection
@section('main')
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  <div class="col-sm-12 ">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Multiple Line Chart</h6>
                        <canvas id="chart" style="display: block; box-sizing: border-box; height: 376px; width: 752px;" width="752" height="376"></canvas>
                    </div>
                </div>
                </div>
            </div>
@section('scripts')
<script>
  (function ($) {
    Chart.defaults.color = "#6C7293";
    Chart.defaults.borderColor = "#000000";
    var ctx2 = $("#chart").get(0).getContext("2d");
    var myChart2 = new Chart(ctx2, {
        type: "line",
        data: {
            labels: <?php print_r(json_encode($final[0]->mouths)); ?>,
            datasets: [
                <?php
                foreach ($final as $data){
                ?>
                {
                    label: <?php print_r(json_encode($data->name)); ?>,
                    
                    backgroundColor: <?php print_r(json_encode($data->color)); ?>,
                    fill: true,
                    data: <?php print_r(json_encode($data->views)); ?>,
                },
                <?php
                }
                ?>
            ]
            },
        options: {
            responsive: true
        }
    });
})(jQuery);
</script>
@endsection
@endsection