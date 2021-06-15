@extends('layout.master')

@section('title','Data Customer')
    
@section('sdbar-datacustomer','active')

@section('content-judul','Data Customer')

@push('css-scripts')
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content-breadcrumb')
    <div class="breadcrumb-item"><a href="/">Data Master</a></div>
    <div class="breadcrumb-item active">Data Customer</div>
@endsection

@section('content-dalam')
    <div class="section-body">
        <div class="row">  

            <div class="col-12 col-md-12 col-lg-12">
            <div class="card card-info">
                <div class="card-header">
                    <h4> Data Customer </h4>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    </div>
                    @endif
                </div>
                <div class="col-md"> 
                  <a href="{{ route('datacustomer.create') }}" class="btn btn-icon icon-left btn-info"><i class="far fa-plus-square"></i>Tambah Data</a> 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                      @csrf
                        <table class="table table-sm table-bordered text-center datatable">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Customer</th>
                              <th scope="col">Alamat Customer</th>
                              <th scope="col">Email</th>
                              <th scope="col">Nomor HP</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
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
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
@endpush
@push('js-after-scripts')
<script type="text/javascript">
$(document).ready( function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
    
    var table = $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('datacustomer.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nama_customer', name: 'nama_customer'},
            {data: 'alamat_customer', name: 'alamat_customer'},
            {data: 'email', name: 'email'},
            {data: 'nomor_hp', name: 'nomor_hp'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });

    $('body').on('click', '.delete', function () {
    if (confirm("Apakah Anda Ingin Hapus Data ini?") == true) {
        var id = $(this).data('id');
// ajax
        $.ajax({
        type:"POST",
        url: "{{ url('datacustomer-delete') }}",
        data: { id: id},
        dataType: 'json',
        success: function(res) {

        var oTable = $('.datatable').dataTable();
        oTable.fnDraw(false); 
        }
        });
    }
  });

});
</script>

@endpush

