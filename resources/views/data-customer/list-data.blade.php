@extends('layout-adm.master')

@section('title','Data Monitoring')

@section('drop-monitoring','active')

@section('sdbar-list-monitoring','active')

@section('content-judul','Data Monitoring')

@section('content-breadcrumb')
    <div class="breadcrumb-item"><a href="/dashboard">Data Monitoring</a></div>
    <div class="breadcrumb-item active">Input Data</div>
@endsection

@section('content-dalam')
    <div class="section-body">
        <div class="row">  
            <div class="col-12 col-md-12 col-lg-12">
            <div class="card card-info">
                <div class="card-header">
                    <h4>List Data Customer</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered" id="users-table">
                           <thead class="thead-dark">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Customer</th>
                              <th scope="col">Type</th>
                              <th scope="col">Area</th>
                              <th scope="col">Unit</th>
                              <th scope="col">Kode Customer</th>
                              <th scope="col">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>PT PLN UIKSBU</td>
                              <td>PLN</td>
                              <td>Sumatera</td>
                              <td>PLTU Belawan #1</td>
                              <td>CSM01</td>
                              <td>Edit / Delete</td>
                            </tr>
                          </tbody>
                    </table>

                </div>
                </div>
            </div>
            </div>

        </div>
    </div>
@endsection

@push('js-before-scripts')
@endpush
@push('js-after-scripts')
@endpush

@push('css-scripts')
<link rel="stylesheet" href="../assets/css/style-custom.css">
@endpush