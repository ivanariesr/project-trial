@extends('layout.master')

@section('title','Stok Bahan Baku')

@section('drop-bhnbaku','active')
    
@section('sdbar-stokbahanbaku','active')

@section('content-judul','Stok Bahan Baku')

@section('content-breadcrumb')
    <div class="breadcrumb-item"><a href="/">Data Master</a></div>
    <div class="breadcrumb-item active">Stok Bahan Baku</div>
@endsection

@section('content-dalam')
    <div class="section-body">
        <div class="row">  
            <!--div class="col-12 col-md-4 col-lg-4">
            <div class="card card-primary">
                <div class="card-header">
                    <h4> Edit Data Bahan Baku </h4>
                </div>
                <div class="card-body">
                    
                        <div class="form-group row">
                          <label for="kodebahan" class="col-sm-3 col-form-label">Kode Bahan</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="kodebahan" placeholder="Input Kode">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="namabahan" class="col-sm-3 col-form-label">Nama Bahan</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="namabahan" placeholder="Input Nama">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="satuan" placeholder="Input Satuan Bahan">
                        </div>    
                          <div class="col-sm-9">
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
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-sm-3 col-form-label">Harga Satuan</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" id="harga" placeholder="Harga">
                            </div>
                            <label for="harga" class="col-sm-2 col-form-label">Stok</label>
                            <div class="col-sm-3">
                              <input type="text" class="form-control" id="harga" placeholder="Stok">
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
                    <a href="/stokbahanbaku/edit" class="btn btn-icon icon-left btn-warning"><i class="far fa-edit"></i>Edit Data</a>
                    <a href="/stokbahanbaku/hapus" class="btn btn-icon icon-left btn-danger"><i class="far fa-minus-square"></i>Hapus Data</a>                    
                </div>
            </div>
            </div-->

            <div class="col-12 col-md-12 col-lg-12">
            <div class="card card-info">
                <div class="card-header">
                    <h4> Data Master Bahan Baku </h4>
                </div>
                <div class="col-md"> 
                  <a href="/inputbahanbaku/" class="btn btn-icon icon-left btn-info"><i class="far fa-plus-square"></i>Tambah Data</a> 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      @csrf
                        <table id="editable" class="table table-sm text-center">
                          <thead>
                            <tr>
                              <th scope="col">Nomor</th>
                              <th scope="col">Kode</th>
                              <th scope="col">Nama Bahan</th>
                              <th scope="col">Stok</th>
                              <th scope="col">Satuan</th>
                              <th scope="col">Harga Satuan</th>
                              <th scope="col">Harga Total</th>
                              <th scope="col">Keterangan</th>
                              <th scope="col">Tanggal Input</th>                              
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($data as $row)
                            <tr>
                              <td>{{ $row->id }}</td>
                              <td>{{ $row->kode_bahan }}</td>
                              <td>{{ $row->nama_bahan }}</td>
                              <td>{{ $row->jumlah }}</td>
                              <td>{{ $row->satuan_bahan }}</td>
                              <td>{{ $row->harga }}</td>
                              <td>Total Harga</td>
                              <td>{{ $row->ket }}</td>
                              <td>{{ $row->tgl_input }}</td>
                            </tr>
                            @endforeach
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

<script type="text/javascript">
  $(document).ready(function(){
     
    $.ajaxSetup({
      headers:{
        'X-CSRF-Token' : $("input[name=_token]").val()
      }
    });
  
    $('#editable').Tabledit({
      url:'{{ route("tabledit.action") }}',
      dataType:"json",
      columns:{
        identifier:[0, 'id'],
        editable:[[1, 'kode_bahan'], [2, 'nama_bahan'], [3, 'jumlah'], [4, 'satuan_bahan'], [5, 'harga'], [7, 'ket']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
        if(data.action == 'delete')
        {
          $('#'+data.id).remove();
        }
      }
    });
  });
  </script>
@endpush

@push('css-scripts')
<link rel="stylesheet" href="../assets/css/style-custom.css">
@endpush