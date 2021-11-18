@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Home</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="text-white"><i class="fas fa-industry"></i>&nbsp; Kelistrikan</strong> </h4>
                    </div>
                    <div class="card-body">
                        <h4>Custom Select</h4>
                        <div class="form-group">
                            <select id="cohort" class="form-control">
                                <option>Voltage</option>
                                <option>Current</option>
                                <option>Power</option>
                            </select>
                        </div>
                        <h3>Voltage</h3>
                        <canvas id="linechart" width="100" height="20"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- Close Data -->
    </div>
</section>
@endsection

@section('third_party_scripts')
<script type="text/javascript">
    var ctx = document.getElementById("linechart").getContext("2d");
    var data = {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8"],
        datasets: [{
            label: "R",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#29B0D0",
            borderColor: "#29B0D0",
            pointHoverBackgroundColor: "#29B0D0",
            pointHoverBorderColor: "#29B0D0",
            data: [1, 2, 3, 4, 5, 6, 7, 8]
        }, {
            label: "S",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#2A516E",
            borderColor: "#2A516E",
            pointHoverBackgroundColor: "#2A516E",
            pointHoverBorderColor: "#2A516E",
            data: [3, 4, 5, 3, 5, 7, 6, 5]
        }, {
            label: "T",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#F07124",
            borderColor: "#F07124",
            pointHoverBackgroundColor: "#F07124",
            pointHoverBorderColor: "#F07124",
            data: [2, 3, 4, 3, 7, 1, 2, 8]
        }, ]
    };

    var myBarChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            legend: {
                display: true
            },
            barValueSpacing: 2,
            scales: {
                yAxes: [{
                    ticks: {
                        min: 0,
                    }
                }],
                xAxes: [{
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                    }
                }]
            }
        }
    });
</script>
@endsection