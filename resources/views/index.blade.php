@extends('layout.master')

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
        ini adalah konten Dashboard
    </div>
@endsection

@push('js-before-scripts')

@endpush
@push('js-after-scripts')
@endpush

