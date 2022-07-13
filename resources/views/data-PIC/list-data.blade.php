@extends('layout-adm.master')

@section('title','Data PIC')

@section('drop-pic','active')

@section('sdbar-list-pic','active')

@section('content-judul','Data PIC')

@push('css-scripts')
<link rel="stylesheet" href="../assets/css/style-custom.css">
@endpush

@section('content-breadcrumb')
    <div class="breadcrumb-item"><a href="/dashboard">Data PIC</a></div>
    <div class="breadcrumb-item active">List Data</div>
@endsection

@section('content-dalam')
    <div class="section-body">
        <div class="row">  
            <div class="col-12 col-md-12 col-lg-12">
            <div class="card card-info">
                <div class="card-header">
                    <h4>List Data PIC</h4>
                </div>
                    @if (session()->has('sucess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('sucess') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
    
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                <div class="card-body">
                    <base target="_parent"><iframe src="{{route('table-pic')}}" frameborder="0"  width="100%" height="800px" id="iframe-table" scrolling="no">
                </iframe>
                
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


