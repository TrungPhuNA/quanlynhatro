<div id="menu">
    <nav class="navbar">
        <div class="container clearfix">
            <ul id="menu-main-menu" class="container-menu">
                <li class="navbar_item clearfix menu-home current-menu-item"><a href="/"><span>Trang chủ</span></a></li>
                @if (isset($menus))
                    @foreach($menus as $menu)
                        <li class="navbar_item clearfix ">
                            <a href="{{ route('get.menu', $menu->mn_slug) }}"><span>{{ $menu->mn_name }}</span></a>
                        </li>
                    @endforeach
                @endif
                <li class="navbar_item clearfix "><a href=""><span>Hướng dẫn</span></a></li>
                <li class="navbar_item clearfix "><a href=""><span>Nạp tiền</span></a></li>
                <li id="post-new"><a class="btn-post-new" href=""><span>Đăng tin</span></a></li>
            </ul>
        </div>
    </nav>
</div>