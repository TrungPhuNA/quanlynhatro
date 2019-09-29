@inject('ListSidebar','App\Services\AdminSidebarListService')
<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">
        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <div class="media-body pt-5">
                        <span class="media-heading text-semibold">{{ Auth::user()->name }}</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> Đà Nẵng
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->
        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li class="navigation-header"><span>QUẢN TRỊ</span> <i class="icon-menu" title="Main pages"></i>
                    </li>
                    @foreach($ListSidebar->getListSidebar() as $item)
                        <li>
                            <a href="{{ route($item['route']) }}">
                                <i class="{{ $item['icon'] }}"></i> <span>{{ $item['name'] }}</span>
                            </a>
                        </li>
                    @endforeach
                    <!-- Main -->
                    <li><a href="admin/users/list"><i class="icon-user-check"></i><span> Danh sách người dùng</span></a>
                    </li>
                    <li><a href="admin/report"><i
                                    class="icon-bubble-notification"></i><span> Báo cáo nội dung</span></a></li>
                    <li><a href="admin/thongke"><i class="icon-pie-chart8"></i><span> Thống kê</span></a></li>
                    <li><a href="https://icomoon.io/#preview-essential" target="_blank"><i class="icon-pie-chart8"></i><span> List Icon</span></a></li>
                    <li><a href=""><i class="icon-home2"></i><span> Xem Trang chủ</span></a></li>
                    <!-- /page kits -->

                </ul>
                <img src="images/logo.png" alt="">
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->