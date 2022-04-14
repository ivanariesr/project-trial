@extends('layout-adm.master')

@section('title','Data Customer')

@section('drop-customer','active')

@section('sdbar-input-customer','active')

@section('content-judul','Data Customer')

@section('content-breadcrumb')
    <div class="breadcrumb-item"><a href="/dashboard">Data Customer</a></div>
    <div class="breadcrumb-item active">Input Data</div>
@endsection

@section('content-dalam')
    <div class="section-body">
        <div class="row">  
            <div class="col-12 col-md-12 col-lg-12">
            <div class="card card-info">
                <div class="card-header">
                    <h4>Input Data Customer Baru</h4>
                </div>
                <div class="card-body">
                    
                        <div class="form-group row">
                            <div class="form-group col-sm-4">
                                <label for="customer" class="col-form-label">Customer</label>
                                <input type="text" class="form-control" id="customer" placeholder="Nama Customer">
                            </div>

                            <div class="form-group col-sm-2">
                                <label for="cust_type" class="col-form-label">Customer Type</label>
                                <select class="form-control" id="cust_type" name="cust_type">
                                    <optgroup label="Customer Type">
                                        <option value="" disabled selected>Pilih</option>
                                        <option value="pjbgroup">PJB Group</option>
                                        <option value="pln">PLN</option>
                                        <option value="pihaklain">Pihak Lain</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group col-sm-2">
                                <label for="area" class="col-form-label">Area</label>
                                <input type="text" class="form-control" id="area" placeholder="Area">
                            </div>

                            <div class="form-group col-sm-2">
                                <label for="unit" class="col-form-label">Unit</label>
                                <input type="text" class="form-control" id="unit" placeholder="Unit">
                            </div>

                            <div class="form-group col-sm-2">
                                <label for="kode_cust" class="col-form-label">Kode Customer</label>
                                <input type="text" class="form-control" id="kode_cust" placeholder="Kode Customer">
                            </div>
                        </div>
                        
                </div>

                </div>
                </div>
                <div class="card-footer">
                    <a href="/stokbahanbaku/tambah" class="btn btn-icon icon-left btn-info"><i class="far fa-plus-square"></i>Tambah Data</a>
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