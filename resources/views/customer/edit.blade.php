@extends('layout.master')

@section('title','Tambah Data Customer')
    
@section('sdbar-datacustomer','active')

@section('content-judul','Tambah Data Customer')

@section('content-breadcrumb')
    <div class="breadcrumb-item"><a href="/">Data Master</a></div>
    <div class="breadcrumb-item active">Tambah Data Customer</div>
@endsection

@section('content-dalam')
    <div class="section-body">
        <form form action="{{ route('datacustomer.update',$datacustomer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">

            <div class="col-8 col-md-8 col-lg-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Edit Data Customer</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                          <label for="namacustomer" class="col-sm-3 col-form-label">Nama Customer</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $datacustomer->nama_customer }}" name="namacustomer" placeholder="input nama customer">
                            @error('namacustomer')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                                                
                        <div class="form-group row">
                            <label for="alamatcustomer" class="col-sm-3 col-form-label">Alamat Customer</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" value="{{ $datacustomer->alamat_customer }}" name="alamatcustomer" placeholder="input alamat customer">
                              @error('alamatcustomer')
                              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Alamat Email </label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" value="{{ $datacustomer->email}} "name="email" placeholder="input email customer">
                              @error('email')
                              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomorhp" class="col-sm-3 col-form-label">Nomor HP</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" value="{{ $datacustomer->nomor_hp }}" name="nomorhp" placeholder="input nomor HP customer">
                              @error('nomorhp')
                              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-danger btn-icon icon-left btn-sucess"><i class="far fa-plus-square"></i>Update Data Customer
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