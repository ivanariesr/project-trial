@extends('layout-adm.master')

@section('title','Data Monitoring')

@section('drop-monitoring','active')

@section('sdbar-input-monitoring','active')

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
                    <h4>Input Data Proyek Baru</h4>
                </div>
                <div class="card-body">
                    
                        <div class="form-group row">
                          <label for="penugasan" class="col-sm-12 col-form-label"><h6>[PENUGASAN]</h6></label>
                        </div>

                        <div class="form-group row">
                            <div class="form-group col-sm-4">
                                <label for="no_penugasan" class="col-form-label">No Surat</label>
                                <input type="text" class="form-control" id="no_penugasan" placeholder="Nomor Surat">
                            </div>
                            <div class="form-group col-sm-8">
                                <label for="nm_pekerjaan" class="col-form-label">Nama Pekerjaan</label>
                                <input type="text" class="form-control" id="nm_pekerjaan" placeholder="Nama Pekerjaan" required>
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="tgl_penugasan" class="col-form-label">Tanggal Surat</label>
                                <input type="date" class="form-control" id="tgl_penugasan" placeholder="Tanggal Surat">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="rkap" class="col-form-label">RKAP / NON RKAP</label>
                                <select class="form-control" id="rkap" name="rkap" required>
                                    <optgroup label="RKAP / NON RKAP">
                                        <option value="" disabled selected>Pilih</option>
                                        <option value="rkap">RKAP</option>
                                        <option value="nonrkap">Non RKAP</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="woprk" class="col-sm-4 col-form-label"><h6>[WO /PRK]</h6></label>
                            <label for="customer" class="col-sm-8 col-form-label"><h6>[CUSTOMER]</h6></label>
                        </div>

                        <div class="form-group row">
                            <div class="form-group col-sm-4">
                                <label for="prktype" class="col-form-label">Type</label>
                                <select class="form-control" id="prktype" name="prktype">
                                    <optgroup label="PRK / WO">
                                        <option value="" disabled selected>Pilih</option>
                                        <option value="PRK">WO</option>
                                        <option value="PRK">PRK</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="no_idc" class="col-form-label">Kode Customer</label>
                                <input type="text" class="form-control" id="no_idc" placeholder="Kode Customer">
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="area" class="col-form-label">Area Customer</label>
                                <input type="text" class="form-control" id="area" placeholder="Area Customer" required>
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="no_prkorwo" class="col-form-label">Nomor PRK / WO</label>
                                <input type="text" class="form-control" id="no_prkorwo" placeholder="Input Nomor PRK / WO">
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="customer" class="col-form-label">Customer</label>
                                <input type="text" class="form-control" id="customer" placeholder="Customer" required>
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="unit" class="col-form-label">Unit</label>
                                <input type="text" class="form-control" id="unit" placeholder="Unit Pembangkit">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pelpekerjaan" class="col-sm-4 col-form-label"><h6>[PELAKSANAAN PEKERJAAN]</h6></label>
                            <label for="nilai" class="col-sm-8 col-form-label"><h6>[NILAI INCLUDE PPN]</h6></label>
                        </div>

                        <div class="form-group row">
                            <div class="form-group col-sm-4">
                                <label for="stts_pkerjaan" class="col-form-label">Status Pekerjaan</label>
                                <select class="form-control" id="stts_pkerjaan" name="stts_pkerjaan" required>
                                    <optgroup label="Status Pekerjaan">
                                        <option value="" disabled selected>Pilih</option>
                                        <option value="batal">Batal</option>
                                        <option value="blmjalan">Belum Jalan</option>
                                        <option value="running">Running</option>
                                        <option value="selesai">Selesai</option>
                                    </optgroup>
                                </select>

                                <label for="stts_admin" class="col-form-label">Status Admin</label>
                                <select class="form-control" id="stts_pkerjaan" name="stts_admin">
                                    <optgroup label="Status Admin">
                                        <option value="" disabled selected>Pilih</option>
                                        <option value="blmadapermintaan">Belum Ada Permintaan</option>
                                        <option value="rab">RAB</option>
                                        <option value="pricing">Pricing</option>
                                        <option value="penawaran">Penawaran</option>
                                        <option value="nego">Nego</option>
                                        <option value="blmkontrak">Belum Kontrak</option>
                                        <option value="kspktnharga">Kesepakatan Harga</option>
                                        <option value="bakspktn">BA Kesepakatan</option>
                                        <option value="kontrak">Kontrak</option>
                                        <option value="amandemen">Amandemen</option>
                                        <option value="laporanba">Laporan / BA</option>
                                        <option value="terminretensi">Termin / Retensi</option>
                                        <option value="tagihan">Tagihan</option>
                                        <option value="terbayar">Terbayar</option>
                                        <option value="cancel">Cancel</option>
                                    </optgroup>
                                </select>
                                
                                <label for="tgl_mulai" class="col-form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control col-sm-6" id="tgl_mulai" placeholder="Tanggal Mulai Pekerjaan">

                                <label for="tgl_akhir" class="col-form-label">Tanggal Akhir</label>
                                <input type="date" class="form-control col-sm-6" id="tgl_akhir" placeholder="Tanggal Akhir Pekerjaan">
                            </div>

                            <div class="form-group col-sm-2">
                                <label for="rab" class="col-form-label">RAB Dasar</label>
                                <input type="text" class="form-control" id="rab" placeholder="RAB Dasar">
                                <br>
                                <button type="upload" class="btn btn-primary">Upload</button>
                                <br>
                                <br>
                                <label for="kontrak" class="col-form-label">Kontrak</label>
                                <input type="text" class="form-control" id="kontrak" placeholder="Harga Kontrak">
                                <br>
                                <button type="upload" class="btn btn-primary">Upload</button>
                            </div>

                            <div class="form-group col-sm-2">
                                <label for="pnwrn" class="col-form-label">Penawaran</label>
                                <input type="text" class="form-control" id="pnwrn" placeholder="Penawaran Harga">
                                <br>
                                <button type="upload" class="btn btn-primary">Upload</button>
                                <br>
                                <br>
                                <label for="tagihan" class="col-form-label">Tagihan</label>
                                <input type="text" class="form-control" id="tagihan" placeholder="Nilai Tagihan">
                            </div>

                            <div class="form-group col-sm-2">
                                <label for="hpp" class="col-form-label">HPP</label>
                                <input type="text" class="form-control" id="hpp" placeholder="Harga Pokok Produksi">
                                <br>
                                <br>
                                <br>
                                <label for="terbayar" class="col-form-label" style="padding-top: 20px">Terbayar</label>
                                <input type="text" class="form-control" id="terbayar" placeholder="Nilai Terbayar">
                            </div>

                            <div class="form-group col-sm-2">
                                <label for="lr" class="col-form-label">L / R</label>
                                <input type="text" class="form-control" id="lr" placeholder="Laba / Rugi">
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="PIC" class="col-sm-4 col-form-label"><h6>[PIC]</h6></label>
                                <label for="Datasurat" class="col-sm-4 col-form-label"><h6>[Data Surat]</h6></label>
                        </div>

                        <div class=row>
                            <div class="form-group col-sm-2">
                                <label for="nm_pm" class="col-form-label">Project Manager</label>
                                <input type="text" class="form-control" id="nm_pm" placeholder="Nama PM">
                                <br>
                                <label for="nm_rend" class="col-form-label">Rendal</label>
                                <input type="text" class="form-control" id="nm_rend" placeholder="Nama Rendal">
                            </div>

                            <div class="form-group col-sm-2">
                                <label for="nm_niaga" class="col-form-label">Niaga</label>
                                <input type="text" class="form-control" id="nm_niaga" placeholder="Nama Niaga">
                            </div>

                            <div class="form-group col-sm-2">
                                <label for="noba_kspktn" class="col-form-label">Nomor BAK</label>
                                <input type="text" class="form-control" id="noba_kspktn" placeholder="Nomor Surat">
                                <br>
                                <button type="upload" class="btn btn-primary">Upload</button>
                            </div>
                            
                            <div class="form-group col-sm-2">
                                <label for="tglk_dok" class="col-form-label">Tanggal BAK</label>
                                <input type="date" class="form-control" id="tglk_dok" placeholder="Tanggal Mulai Pekerjaan">
                            </div>

                            <div class="form-group col-sm-2">
                                <label for="noba_pp" class="col-form-label">Nomor BAPP</label>
                                <input type="text" class="form-control" id="noba_pp" placeholder="Nomor Surat">
                                <br>
                                <button type="upload" class="btn btn-primary">Upload</button>
                            </div>
                            
                            <div class="form-group col-sm-2">
                                <label for="tglp_dok" class="col-form-label">Tanggal BAPP</label>
                                <input type="date" class="form-control" id="tglp_dok" placeholder="Tanggal Mulai Pekerjaan">
                            </div>

                            <div class="form-group col-sm-2"></div>
                            <div class="form-group col-sm-2"></div>
                            
                            <div class="form-group col-sm-2">
                                <label for="noba_stp" class="col-form-label">Nomor BASTP</label>
                                <input type="text" class="form-control" id="noba_stp" placeholder="Nomor Surat">
                                <br>
                                <button type="upload" class="btn btn-primary">Upload</button>
                            </div>
                            
                            <div class="form-group col-sm-2">
                                <label for="tgls_dok" class="col-form-label">Tanggal BASTP</label>
                                <input type="date" class="form-control" id="tgls_dok" placeholder="Tanggal Mulai Pekerjaan">
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