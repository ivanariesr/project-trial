@extends('layout-usr.master')

@section('title','Home - User')

@section('content-dalam')
        <div class="section-body">
            <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                <div class="card-header">
                    <h4>Nilai Kontrak Tahunan</h4>
                </div>
                <div class="card-body">
                    
                    <canvas id="myChart"></canvas>

                </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                <div class="card-header">
                    <h4>Proyek Deadline 2022 (Rencana Selesai)</h4>
                </div>
                <div class="card-body">

                    <canvas id="myChart2"></canvas>

                </div>
                </div>
            </div>
            </div>
            
            <div class="row padding-top">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                <div class="card-header">
                    <h4>Status Admin</h4>
                </div>
                <div class="card-body">

                    <canvas id="myChart3"></canvas>
                
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                <div class="card-header">
                    <h4>Status Pekerjaan</h4>
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

