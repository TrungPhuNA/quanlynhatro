@extends('admin.layout.master')
@section('admin_title','Thêm mới phòng trọ')
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
                                Thêm mới phòng<span class="badge badge-primary"></span>
                                <a href="{{ route('admin.get.motel.list') }}" class="btn btn-danger">Trở về</a>
                            </h5>
                        </div>
                        <div class="panel-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group {{ $errors->has('mt_name') ? 'has-error' : '' }}">
                                    <label for="mt_name">Tiêu đề bài đăng <span class="text-danger">(*)</span></label>
                                    <input type="text" class="form-control" autocomplete="off" placeholder="Cho thuê nhà trọ ..." name="mt_name">
                                    @if ($errors->has('mt_name'))
                                        <span class="help-block text-error">{{ $errors->first('mt_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('mt_address') ? 'has-error' : '' }}">
                                    <label for="mt_name">Địa chỉ <span class="text-danger">(*)</span></label>
                                    <input type="text" class="form-control" autocomplete="off" placeholder="Quỳnh Ngọc - Quỳnh Lưu - Nghệ An ..." name="mt_address">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group {{ $errors->has('mt_price') ? 'has-error' : '' }}">
                                            <label for="mt_price">Giá <span class="text-danger">(*)</span></label>
                                            <input type="number" class="form-control" autocomplete="off" placeholder="2500000" name="mt_price">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group {{ $errors->has('mt_acreage') ? 'has-error' : '' }}">
                                            <label for="mt_acreage">Diện tích (m <sup>2</sup>) <span class="text-danger">(*)</span></label>
                                            <input type="number" class="form-control" autocomplete="off" placeholder="20" name="mt_acreage">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('mt_description') ? 'has-error' : '' }}">
                                    <label for="mt_name">Mô tả <span class="text-danger">(*)</span></label>
                                    <textarea name="mt_description" class="form-control" cols="30" rows="5" autocomplete="off" placeholder="Mô tả  ..."></textarea>
                                </div>
                                <div class="form-group {{ $errors->has('mt_content') ? 'has-error' : '' }}">
                                    <label for="mt_name">Nội dung <span class="text-danger">(*)</span></label>
                                    <textarea name="mt_content" class="form-control" cols="30" rows="5" autocomplete="off" placeholder="Nội dung  ..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection