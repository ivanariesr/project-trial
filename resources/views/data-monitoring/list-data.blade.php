@extends('layout.master')

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
                    <h4>List Data Proyek</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered" id="users-table">
                        <thead class="thead-dark">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">No PRK</th>
                              <th scope="col">Nama Pekerjaan</th>
                              <th scope="col">Customer</th>
                              <th scope="col">Unit</th>
                              <th scope="col">Status Pekerjaan</th>
                              <th scope="col">PIC</th>
                              <th scope="col">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>00002022</td>
                              <td>Major Overhaul ST 2.0 PLTU Belawan</td>
                              <td>PT PLN UIKSBU</td>
                              <td>PLTU Belawan #1</td>
                              <td>Belum Jalan</td>
                              <td>Ria Rizky</td>
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