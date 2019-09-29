@extends('admin.layout.master')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-default">
            <div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
                    <li class="active">Menu</li>
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
                                Danh sách Menu<span class="badge badge-primary"></span>
                                <a href="{{ route('admin.get.menu.create') }}" class="btn btn-success">Thêm mới</a>
                            </h5>
                        </div>
                        <table class="table datatable-show-all">
                            <thead>
                            <tr class="bg-blue">
                                <th>ID</th>
                                <th>Location</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th class="text-center">Actions</th>
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
@endsection