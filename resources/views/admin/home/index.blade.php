@extends('admin.layout.master')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-default">
            <div class="page-header-content">
                <div class="page-title">
                    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Trang Quản Lý</h4>
                </div>
            </div>

            <div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><i class="icon-home2 position-left"></i> Trang chủ</li>

                </ul>
            </div>
        </div>
        <!-- /page header -->
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="panel panel-flat">
                        <div class="panel-body">
                            Chào mừng bạn đến với Trang quản trị Phòng trọ đà nẵng
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quick stats boxes -->
            <div class="row">
                <div class="col-lg-4">

                    <!-- Members online -->
                    <div class="panel bg-teal-400">
                        <div class="panel-body">
                            <h3 class="no-margin">{{ $total_users_active ?? 0 }}</h3>
                            Thành viên hoạt động
                            <div class="text-muted text-size-small"> {{ $total_users_deactive ?? 0 }} bị khóa</div>
                        </div>
                        <div class="container-fluid">
                            <div id="members-online"></div>
                        </div>
                    </div>
                    <!-- /members online -->

                </div>

                <div class="col-lg-4">

                    <!-- Motelroom -->
                    <div class="panel bg-pink-400">
                        <div class="panel-body">
                            <h3 class="no-margin">{{ $total_rooms_approve ?? 0 }}</h3>
                            Phòng trọ đã duyệt
                            <div class="text-muted text-size-small">trên tổng số  phòng trọ đã đăng</div>
                        </div>

                        <div id="server-load"></div>
                    </div>
                    <!-- /current server load -->

                </div>

                <div class="col-lg-4">

                    <!-- Today's report -->
                    <a href="admin/thongke">
                        <div class="panel bg-blue-400">
                            <div class="panel-body">
                                <h3 class="no-margin">{{ $total_report ?? 0 }}</h3>
                                Báo cáo
                                <div class="text-muted text-size-small">từ người dùng</div>
                            </div>
                            <div id="today-revenue"></div>
                        </div>
                    </a>
                    <!-- /today's revenue -->

                </div>
            </div>
            <!-- /quick stats boxes -->
            <!-- Footer -->
            <div class="footer text-muted">
                &copy; 2019. <a href="#">Project Phòng trọ Đà nẵng</a> by <a href="" target="_blank">Thành Trung</a>
            </div>
            <!-- /footer -->
        </div>
    </div>
@endsection