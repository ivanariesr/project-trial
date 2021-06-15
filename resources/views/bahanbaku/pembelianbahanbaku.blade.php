@extends('layout.master')

@section('title','Pembelian Bahan Baku')

@section('drop-bhnbaku','active')

@section('sdbar-inpbelibahanbaku','active')

@section('content-judul','Pembelian Bahan Baku')

@section('content-breadcrumb')
    <div class="breadcrumb-item"><a href="/">Data Master</a></div>
    <div class="breadcrumb-item active">Pembelian Bahan Baku</div>
@endsection

@section('content-dalam')
    <div class="section-body">
        <div class="row">  

            <div class="col-8 col-md-8 col-lg-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4> Input Bahan Baku</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                            <input type="date" class="form-control" id="tanggal" placeholder="Input Tanggal">
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="suplier" class="col-sm-3 col-form-label">Suplier</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="suplier" placeholder="Input Nama Suplier">
                          </div>
                        </div>
                                                
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-3 col-form-label">Nama Bahan</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="namabahan" placeholder="Nama Bahan">
                            </div>
                            <label for="harga" class="col-sm-2 col-form-label">Kode Bahan</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="kodebahan" placeholder="Kode Bahan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="satuan" placeholder="Input Satuan Bahan">
                            </div>                            
                            <!--div class="col-sm-9">
                                <select class="form-control" id="satuan" name="satuan">
                                    <option value="" disabled selected>Pilih Satuan</option>
                                    <optgroup label="Satuan Berat">
                                        <option value="kg">Kilogram</option>
                                        <option value="hg">Hektogram (Ons)</option>
                                        <option value="dag">Dekagram</option>
                                        <option value="gr">Gram</option>
                                        <option value="dg">Desigram</option>
                                        <option value="cg">Sentigram</option>
                                        <option value="mg">Miligram</option>
                                    </optgroup>
                                    <optgroup label="Satuan Volume">
                                        <option value="kl">Kiloliter</option>
                                        <option value="hl">Hektoliter</option>
                                        <option value="dal">Dekaliter</option>
                                        <option value="l">Liter</option>
                                        <option value="dl">Desiliter</option>
                                        <option value="cl">Sentiliter</option>
                                        <option value="ml">Mililiter</option>
                                    </optgroup>
                                </select>
                            </div-->
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="jumlah" placeholder="Jumlah Bahan">
                            </div>
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="harga" placeholder="Harga">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="keterangan" placeholder="Keterangan Bahan">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="/stokbahanbaku/tambah" class="btn btn-icon icon-left btn-info"><i class="far fa-plus-square"></i>Tambah Data Bahan</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h4> Data Pembelian Bahan Baku Hari Ini</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm">
                              <thead>
                                <tr>
                                  <th scope="col">Nomor</th>
                                  <th scope="col">Kode</th>
                                  <th scope="col">Nama Bahan</th>
                                  <th scope="col">Stok</th>
                                  <th scope="col">Satuan</th>
                                  <th scope="col">Harga</th>
                                  <th scope="col">Keterangan</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>PRF-1</td>
                                    <td>Parfum Aromatherapy</td>
                                    <td>5</td>
                                    <td>Liter</td>
                                    <td>500.000</td>
                                    <td>BCL</td>
                                    <td>
                                        <a href="/stokbahanbaku/edit" class="btn btn-icon icon-left btn-warning"><i class="far fa-edit"></i>Edit Data</a>
                                        <a href="/stokbahanbaku/hapus" class="btn btn-icon icon-left btn-danger"><i class="far fa-minus-square"></i>Hapus Data</a>                        
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>PRF-2</td>
                                    <td>Parfum Body Shop</td>
                                    <td>4</td>
                                    <td>Liter</td>
                                    <td>360.000</td>
                                    <td>-</td>
                                    <td>
                                        <a href="/stokbahanbaku/edit" class="btn btn-icon icon-left btn-warning"><i class="far fa-edit"></i>Edit Data</a>
                                        <a href="/stokbahanbaku/hapus" class="btn btn-icon icon-left btn-danger"><i class="far fa-minus-square"></i>Hapus Data</a>                        
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>PRF-3</td>
                                    <td>Parfum Cuci Piring</td>
                                    <td>3</td>
                                    <td>Liter</td>
                                    <td>120.000</td>
                                    <td>-</td>
                                    <td>
                                        <a href="/stokbahanbaku/edit" class="btn btn-icon icon-left btn-warning"><i class="far fa-edit"></i>Edit Data</a>
                                        <a href="/stokbahanbaku/hapus" class="btn btn-icon icon-left btn-danger"><i class="far fa-minus-square"></i>Hapus Data</a>                        
                                    </td>
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