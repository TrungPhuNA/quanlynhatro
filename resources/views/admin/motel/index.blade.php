@extends('admin.layout.master')
@section('admin_title','Quản lý phòng trọ')
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
                                Danh sách phòng trọ<span class="badge badge-primary"></span>
                                <a href="{{ route('admin.get.motel.create') }}" class="btn btn-success">Thêm mới</a>
                            </h5>
                        </div>
                        <table class="table datatable-show-all">
                            <thead>
                                <tr class="bg-blue">
                                    <th style="width: 3%">ID</th>
                                    <th style="width: 20%">Name</th>
                                    <th style="width: 10%">Type</th>
                                    <th style="width: 40%">Description</th>
                                    <td style="width: 10%">Active</td>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($motels))
                                    @foreach($motels as $motel)
                                        <tr>
                                            <td>{{ $motel->id }}</td>
                                            <td>
                                                <a href="">{{ $motel->mt_name }}</a>
                                            </td>
                                            <td>
                                                <a href="">{{ $motel->menu->mn_name ?? '[N\A]' }}</a>
                                            </td>
                                            <td>
                                                <p>{{ $motel->mt_description }}</p>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.get.motel.action',['success',$motel->id]) }}" class="label {{ $motel->getAttributeActive($motel->mt_active)['class'] }}">
                                                    {{ $motel->getAttributeActive($motel->mt_active)['text'] }}
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <ul class="icons-list">
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-menu9"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="{{ route('admin.get.motel.action', ['cancel',$motel->id]) }}"><i class="icon-pencil4"></i>Cancel</a></li>
                                                            <li><a href="{{ route('admin.get.motel.edit', $motel->id) }}"><i class="icon-pencil4"></i>Update</a></li>
                                                            <li><a href="{{ route('admin.get.motel.delete', $motel->id) }}"><i class="icon-bin"></i>Delete</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection