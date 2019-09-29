<div class="wrapper">
    <ul class="list-post">
        @foreach($motels as $motel)
        <li id="{{ $motel->id }}" class="post clearfix post-270520 tin-vip vipnoibat" style="border-color:#E13427;" >
            {{--<span class="hidden" >--}}
                {{--<span >110 Đường Số 7, Phường Tân Kiểng, Quận 7, Hồ Chí Minh</span>--}}
                {{--<span >Quận 7, Hồ Chí Minh</span>--}}
            {{--</span>--}}
            <div class="post-thumb lazy " data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2018/09/19/ban-do_1537345817.jpg" style="display: block; background-position:center;">
                <a class="post-link" href="" alt="" title=""></a>
                <div class="icon_vip" style="background-color:#E13427;">hot</div>
                <div class="vip_star"><i></i><i></i><i></i><i></i><i></i></div>
                <div class="image_number"><span>30 ảnh</span></div>
            </div>
            <div class="post-info clearfix">
                <div class="title">
                    <a class="post-link" style="color:#E13427;" href="{{ route('get.motel.detail',[$menu->mn_slug, $motel->mt_slug]) }}"
                       alt="{{ $motel->mt_name }}">{{ $motel->mt_name }}</a>
                </div>
                <div class="price"><strong>{{ number_format($motel->mt_price,0,',','.') }}Tr/Tháng</strong></div>
                <div class="clearfix">
                    <div class="acreage"><span class="name">Diện tích:</span><span class="value">{{ $motel->mt_acreage }}m²</span></div>
                    <div class="address">
                        <span class="name">Khu vực:</span>
                        <span class="value">
                            <a href="" title="{{ $motel->mt_name }}">{{ $motel->mt_address }}</a>
                        </span>
                    </div>
                    <time class="timeago"><span class="name">Cập nhật:</span><span class="value">{{ $motel->created_at }}</span></time>
                </div>
                <p class="p_content">{{ $motel->mt_description }}</p>
            </div>
        </li>
        @endforeach
    </ul>
</div>
<div class="clearfix">
    {!! $motels->links() !!}
</div>
