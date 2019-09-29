@extends('admin.layout.master')
@section('admin_title','Thêm mới menu')
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
                                Thêm mới menu<span class="badge badge-primary"></span>
                                <a href="{{ route('admin.get.menu.list') }}" class="btn btn-danger">Trở về</a>
                            </h5>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Tên menu:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  placeholder="Tên menu" name="mn_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Lưu thông tin</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection