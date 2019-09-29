@extends('admin.layout.master')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-default">
            <div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href=""><i class="icon-home2 position-left"></i> Home</a></li>
                    <li class="active">Location</li>
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
                                Danh sách Location<span class="badge badge-primary"></span>
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
                            @if (isset($locations))
                                @foreach($locations as $location)
                                    <tr>
                                        <td>{{ $location->id }}</td>
                                        <td>
                                            <a href="">{{ $location->loc_name }}</a><br>
                                            <span>{{ $location->loc_slug }}</span>
                                        </td>
                                        <td>
                                           <span>{{ $location->loc_type }}</span>
                                        </td>
                                        <td>{{ $location->loc_description }}</td>
                                        <td class="text-center">
                                            <ul class="icons-list">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="icon-menu9"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="">Update</a></li>
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
                    @if (isset($locations))
                        {!! $locations->links() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection