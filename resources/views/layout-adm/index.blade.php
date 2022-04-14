@extends('layout-adm.master')

@section('title','Dashboard')

@section('sdbar-dashboard','active')

@section('content-judul','Dashboard')

@push('css-scripts')
<link rel="stylesheet" href="../assets/css/style-custom.css">
@endpush

@section('content-breadcrumb')
    <div class="breadcrumb-item"><a href="/">Dashboard</a></div>
@endsection

@section('content-dalam')
        <div class="section-body">
            <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                <div class="card-header">
                    <h4>Line Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                <div class="card-header">
                    <h4>Bar Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="myChart2"></canvas>
                </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                <div class="card-header">
                    <h4>Doughnut Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="myChart3" width="400" height="400"></canvas>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                <div class="card-header">
                    <h4>Pie Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="myChart4"></canvas>
                </div>
                </div>
            </div>
            </div>
        </div>
@endsection

@push('js-before-scripts')
@endpush

@push('js-after-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/js/dashboard-chart.js') }}"></script>
@endpush

