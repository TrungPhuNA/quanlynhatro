@extends('admin.layout.master')
@section('admin_title','Cập nhật phòng trọ')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-default">
            <div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
                    <li class="active">Motel</li>
                </ul>
            </div>
        </div>
        <!-- /page header -->
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                Cập nhật phòng<span class="badge badge-primary"></span>
                                <a href="{{ route('admin.get.motel.list') }}" class="btn btn-danger">Trở về</a>
                            </h5>
                        </div>
                        <div class="panel-body">
                            @include('admin.motel.form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection