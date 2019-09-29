@extends('layouts.master_v2')
@section('content')
    <main id="main">
        <div class="post_single_page tin-vip vipnoibat">
            <div class="breadcrumbs_wrapper">
                <div class="container">
                    <div class="ad-breadcrumbs">
                        <ol class="clearfix" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" class="first link" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemtype="https://schema.org/Thing" itemprop="item" href="https://phongtro123.com"><span itemprop="name">Trang chủ</span></a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li itemprop="itemListElement" class="link link" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemtype="https://schema.org/Thing" itemprop="item" href="https://phongtro123.com/cho-thue-phong-tro"><span itemprop="name">Phòng trọ</span></a>
                                <meta itemprop="position" content="2">
                            </li>
                            <li itemprop="itemListElement" class="link link" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemtype="https://schema.org/Thing" itemprop="item" href="https://phongtro123.com/tinh-thanh/ho-chi-minh"><span itemprop="name">Phòng trọ Hồ Chí Minh</span></a>
                                <meta itemprop="position" content="3">
                            </li>
                            <li itemprop="itemListElement" class="link last" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemtype="https://schema.org/Thing" itemprop="item" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3"><span itemprop="name">Phòng trọ Quận 3</span></a>
                                <meta itemprop="position" content="4">
                            </li>
                        </ol>
                    </div>
                    <h1 class="page-title" style="color:#E13427;">PHÒNG TRỌ - CĂN HỘ ĐẦY ĐỦ TIỆN NGHI - GIÁ RẺ QUẬN 3</h1>
                </div>
            </div>
            <div class="navigation_post">
                <div class="container clearfix">
                    <div class="navigation_post_left">
                        <ul>
                            <li><a class="scrollto_thongtinchung" href="#">Thông tin chung</a></li>
                            <li><a class="scrollto_motachitiet" href="#">Mô tả chi tiết</a></li>
                            <li><a class="scrollto_bando" href="#">Bản đồ</a></li>
                            <li><a class="scrollto_hinhanh" href="#">Hình ảnh</a></li>
                        </ul>
                    </div>
                    <div class="navigation_post_right">
                        <ul>
                            <li><a class="btn_contact_now_phone" href="tel:0855936857">Gọi ngay <strong>0855936857</strong></a></li>
                            <!--<li>LIKE</li>-->
                            <li>
                                <a rel="nofollow" href="https://phongtro123.com/quan-ly/sua-tin-dang/105893">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                        <path d="M12 20h9"></path>
                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                    </svg>
                                    Sửa tin
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="page_view_wrapper clearfix">
                    <div class="block-left">
                        <div id="post-105893" class="post post-single">
                            <div class="view-detail">
                                <div class="block-content-1 clearfix">
                                    <div class="block-content-meta">
                                        <div class="table_overview desktop">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td class="name">Địa chỉ</td>
                                                    <td colspan="3">{{ $motel->mt_address }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="name">Loại tin rao:</td>
                                                    <td colspan="3">
                                                        <h2 style="margin: 0;"><a href="">{{ $menu->mn_name }}</a></h2>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="name">Mã tin</td>
                                                    <td>#{{ $motel->id }}</td>
                                                    <td class="name">Người đăng:</td>
                                                    <td>{{ $motel->user->name ?? 'Admin' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="name">Đối tượng:</td>
                                                    <td>Tất cả</td>
                                                    <td class="name">Điện thoại:</td>
                                                    <td><a href="tel:0855936857" class="_js-get-phone" data-phone="0855936857"><span style="color: #4cae4c; font-weight: bold; font-size: 1.5rem;">0855936857</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="name">Ngày cập nhật:</td>
                                                    <td>{{ $motel->updated_at }}</td>
                                                    <td class="name">Diện tích:</td>
                                                    <td><span style="color: #E74C3C; font-weight: bold;">{{ $motel->mt_acreage }}m²</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="name">Ngày hết hạn:</td>
                                                    <td>30/09/2019 19:51:35</td>
                                                    <td class="name">Giá cho thuê:</td>
                                                    <td><span class="price" style="color: #E74C3C; font-weight: bold;">{{ number_format($motel->mt_price,0,',','.') }} triệu/tháng</span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="da_het_han"></div>
                                        <div id="da_cho_thue"></div>
                                    </div>
                                </div>
                                <div id="motachitiet" class="block-content-2">
                                    <span class="block_headline">Thông tin mô tả</span>
                                    {!! $motel->mt_description !!}
                                </div>
                                <div id="hinhanh" class="block-photo">
                                    <div class="block-photo-title">Hình ảnh</div>
                                    <div id="flexslider_slider" class="flexslider">
                                        <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                            <ul class="slides" style="width: 200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                <li style="width: 680px; margin-right: 0px; float: left; display: block;" class="flex-active-slide"><img title="PHÒNG TRỌ - CĂN HỘ ĐẦY ĐỦ TIỆN NGHI - GIÁ RẺ QUẬN 3" alt="PHÒNG TRỌ - CĂN HỘ ĐẦY ĐỦ TIỆN NGHI - GIÁ RẺ QUẬN 3" class="photo_item_image" data-image="https://static123.com/phongtro123/uploads/images/thumbs/900x600/fit/2018/08/13/840458b4-3df5-4b34-a502-8720567ab82a_1534130697.jpg" src="https://static123.com/phongtro123/uploads/images/thumbs/900x600/fit/2018/08/13/840458b4-3df5-4b34-a502-8720567ab82a_1534130697.jpg" draggable="false"></li>
                                            </ul>
                                        </div>
                                        <ol class="flex-control-nav flex-control-paging"></ol>
                                        <ul class="flex-direction-nav">
                                            <li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li>
                                            <li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>&nbsp;</p>
                                <div id="bando" class="block-photo">
                                    <div class="block-photo-title">Bản đồ</div>
                                    <p style="margin-top: 5px;">Địa chỉ: 207/31 Lê Văn Sỹ, Phường 13, Quận 3, Hồ Chí Minh</p>
                                    <div class="maps_wrapper">
                                        <div id="__maps_content" style="width:100%; height:350px;" data-lat="10.786084" data-long="106.67936600000007" data-address="207/31 Lê Văn Sỹ, Phường 13, Quận 3, Hồ Chí Minh"><iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=10.786084,106.67936600000007&amp;key=AIzaSyD6Coia3ssHYuRKJ2nDysWBdSlVlBCzKAw&amp;zoom=14" allowfullscreen=""></iframe></div>
                                    </div>
                                </div>
                                <div class="article_share">
                                    <span class="sharing_label">Chia sẻ tin đăng đến bạn bè</span>
                                    <div class="facebook_like_box clearfix js-social-group-button" data-url="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-day-du-tien-nghi-gia-re-quan-3.html">
                                        <div class="google-like" style="display: inline-block; float: left; margin-right: 5px;">
                                            <!-- Place this tag in your head or just before your close body tag. --><script src="https://apis.google.com/js/platform.js" async="" defer="" gapi_processed="true">{lang: "vi"}</script><!-- Place this tag where you want the +1 button to render. -->
                                            <div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1569754249518" name="I0_1569754249518" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;annotation=inline&amp;size=standard&amp;hl=vi&amp;origin=https%3A%2F%2Fphongtro123.com&amp;url=https%3A%2F%2Fphongtro123.com%2Ftinh-thanh%2Fho-chi-minh%2Fphong-day-du-tien-nghi-gia-re-quan-3.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.X-97V6KC4to.O%2Fam%3DwQE%2Fd%3D1%2Frs%3DAGLTcCOC0_TT6Ehi3FB4NEUHD9nTKN8uEg%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1569754249518&amp;_gfid=I0_1569754249518&amp;parent=https%3A%2F%2Fphongtro123.com&amp;pfname=&amp;rpctoken=20858464" data-gapiattached="true"></iframe></div>
                                            <div class="g-plusone" data-annotation="inline" data-size="standard" data-href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-day-du-tien-nghi-gia-re-quan-3.html" data-gapiscan="true" data-onload="true" data-gapistub="true"></div>
                                        </div>
                                        <a target="blank" class="fb_btn fb_send_btn clearfix show_desktop" href="http://www.facebook.com/dialog/send?app_id=1748349635396853&amp;link=https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-day-du-tien-nghi-gia-re-quan-3.html&amp;redirect_uri=https://bds123.vn/"><i></i><span>Gửi Messenger</span></a><a target="blank" class="fb_btn fb_send_btn clearfix show_mobile" href="fb-messenger://share?link=https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-day-du-tien-nghi-gia-re-quan-3.html&amp;app_id=1748349635396853"><i></i></a>
                                        <div class="fb_btn fb-like fb_iframe_widget" data-href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-day-du-tien-nghi-gia-re-quan-3.html" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=1748349635396853&amp;container_width=0&amp;href=https%3A%2F%2Fphongtro123.com%2Ftinh-thanh%2Fho-chi-minh%2Fphong-day-du-tien-nghi-gia-re-quan-3.html&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=false&amp;size=large"><span style="vertical-align: bottom; width: 140px; height: 28px;"><iframe name="fe3708477c0d74" width="1000px" height="1000px" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.3/plugins/like.php?action=like&amp;app_id=1748349635396853&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df17996c07e8889c%26domain%3Dphongtro123.com%26origin%3Dhttps%253A%252F%252Fphongtro123.com%252Ff15dbc5971dec8c%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fphongtro123.com%2Ftinh-thanh%2Fho-chi-minh%2Fphong-day-du-tien-nghi-gia-re-quan-3.html&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=false&amp;size=large" style="border: none; visibility: visible; width: 140px; height: 28px;" class=""></iframe></span></div>
                                        <div class="show_desktop">
                                            <div class="fb_btn fb-save fb_iframe_widget" data-uri="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-day-du-tien-nghi-gia-re-quan-3.html" data-size="large" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1748349635396853&amp;container_width=0&amp;locale=vi_VN&amp;sdk=joey&amp;size=large&amp;uri=https%3A%2F%2Fphongtro123.com%2Ftinh-thanh%2Fho-chi-minh%2Fphong-day-du-tien-nghi-gia-re-quan-3.html"><span style="vertical-align: bottom; width: 153px; height: 28px;"><iframe name="f1f215cf33ed304" width="1000px" height="1000px" title="fb:save Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.3/plugins/save.php?app_id=1748349635396853&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df28892e624e8dec%26domain%3Dphongtro123.com%26origin%3Dhttps%253A%252F%252Fphongtro123.com%252Ff15dbc5971dec8c%26relation%3Dparent.parent&amp;container_width=0&amp;locale=vi_VN&amp;sdk=joey&amp;size=large&amp;uri=https%3A%2F%2Fphongtro123.com%2Ftinh-thanh%2Fho-chi-minh%2Fphong-day-du-tien-nghi-gia-re-quan-3.html" style="border: none; visibility: visible; width: 153px; height: 28px;" class=""></iframe></span></div>
                                        </div>
                                        <div class="btnZalo zalo-share-button clearfix" data-href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-day-du-tien-nghi-gia-re-quan-3.html" data-oaid="273083239502498077" data-layout="icon-text" data-customize="true"><a href="javascript:void(0);" class="zalo_share clearfix" title="Chia sẻ qua Zalo"><i></i><span>Chia sẻ Zalo</span></a></div>
                                    </div>
                                    <div class="article_copy_link input-group">
                                        <input class="form-control" id="article_copy_link_input" type="text" readonly="" value="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-day-du-tien-nghi-gia-re-quan-3.html">
                                        <div class="input-group-addon"><button class="btn btn_copy_link2" data-clipboard-target="#article_copy_link_input">Copy link</button></div>
                                    </div>
                                </div>
                                <div class="alert alert-warning post_report">
                                    <p>Mọi thông tin trên website chỉ mang tính chất tham khảo. Chúng tôi luôn cố gắng cung cấp các thông tin đầy đủ, chính xác và minh bạch đến người xem, tuy nhiên quá trình kiểm duyệt vẫn có thể xảy ra sơ sót. Nếu bạn có phản hồi với tin đăng này (tin đã cho thuê, không liên lạc được, các trường hợp khác), vui lòng thông báo để PhòngTrọ123 có thể xử lý.</p>
                                    <p><a class="btn btn-default" target="_blank" href="https://phongtro123.com/lien-he">Gửi phản hồi</a></p>
                                </div>
                            </div>
                        </div>
                        <ul class="wrapper list-post similar_post">
                            <h2 class="similar_post_header"> Cho thuê phòng trọ nhà trọ Quận 3 Hồ Chí Minh </h2>
                            <li id="post-288619" class="post clearfix post-288619 tin-vip vip3" style="border-color:#3763e0;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">297 Đường Lê Văn Sỹ, Phường 8, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="10.787253">
                                <meta itemprop="longitude" content="106.678675">
                            </span>
                                <meta itemprop="branchCode" content="288619">
                                <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/28/phong_1569667891.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/28/phong_1569667891.jpg&quot;);" data-loaded="true">
                                    <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-297-le-van-sy-co-ban-cong-va-bao-2-chiec-xe.html" alt="Phòng 297 lê văn sỹ có ban công và bao 2 chiếc xe" title=""></a>
                                    <div class="icon_vip" style="background-color:#3763e0;">vip 3</div>
                                    <div class="vip_star"><i></i><i></i></div>
                                    <div class="image_number"><span>3 ảnh</span></div>
                                </div>
                                <div class="post-info clearfix">
                                    <div class="title"><a class="post-link" style="color:#3763e0;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-297-le-van-sy-co-ban-cong-va-bao-2-chiec-xe.html" alt="Phòng 297 lê văn sỹ có ban công và bao 2 chiếc xe"> Phòng 297 lê văn sỹ có ban công và bao 2 chiếc xe </a></div>
                                    <div class="price"><strong>4 triệu/tháng</strong></div>
                                    <div class="clearfix">
                                        <div class="acreage"><span class="name">Diện tích:</span><span class="value">25m²</span></div>
                                        <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                        <time class="timeago"><span class="name">Cập nhật:</span><span class="value">Hôm nay</span></time>
                                    </div>
                                    <p class="p_content">Cho thuê nguyên lầu 1 hẻm 297 lê văn sỹ quận 3. 2 phòng ngủ 1 nhà vệ sinh. .bao 4 chiếc xe. điện 4 ngàn/kg. nước 100k/ người. wifi 50k/ phòng. giá 7tr/tháng .Cần…</p>
                                </div>
                            </li>
                            <li id="post-288565" class="post clearfix post-288565 normal" style="border-color:#055699;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">372/15/13 Đường Cách Mạng Tháng Tám, Phường 10, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="10.7833729">
                                <meta itemprop="longitude" content="106.672912">
                            </span>
                                <meta itemprop="branchCode" content="288565">
                                <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/27/img-1557717935025-1557722286032_1569599006.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/27/img-1557717935025-1557722286032_1569599006.jpg&quot;);" data-loaded="true">
                                    <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-noi-that-cao-cap-day-du-khu-trung-tam-quan-3.html" alt="Cho Thuê Phòng Nội Thất Cao Cấp Đầy Đủ Khu Trung Tâm Quận 3" title=""></a>
                                    <div class="image_number"><span>6 ảnh</span></div>
                                </div>
                                <div class="post-info clearfix">
                                    <div class="title"><a class="post-link" style="color:#055699;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-noi-that-cao-cap-day-du-khu-trung-tam-quan-3.html" alt="Cho Thuê Phòng Nội Thất Cao Cấp Đầy Đủ Khu Trung Tâm Quận 3"> Cho Thuê Phòng Nội Thất Cao Cấp Đầy Đủ Khu Trung Tâm Quận 3 </a></div>
                                    <div class="price"><strong>6 triệu/tháng</strong></div>
                                    <div class="clearfix">
                                        <div class="acreage"><span class="name">Diện tích:</span><span class="value">20m²</span></div>
                                        <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                        <time class="timeago"><span class="name">Cập nhật:</span><span class="value">1 ngày trước</span></time>
                                    </div>
                                    <p class="p_content">Cho Thuê Phòng Trọ Căn Hộ Dịch Vụ Quận 3+ Diện Tích Từ 20-25m2 + Phòng Full nội thất , có máy lạnh, tủ quần áo, tủ lạnh...+ Chỗ để xe trước sân…</p>
                                </div>
                            </li>
                            <li id="post-288557" class="post clearfix post-288557 tin-vip vip3" style="border-color:#3763e0;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">449 Đường Điện Biên Phủ, Phường 3, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="10.7721714">
                                <meta itemprop="longitude" content="106.67864940000004">
                            </span>
                                <meta itemprop="branchCode" content="288557">
                                <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/27/0a327f7691c3769d2fd2_1569592052.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/27/0a327f7691c3769d2fd2_1569592052.jpg&quot;);" data-loaded="true">
                                    <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-tro-cao-cap-day-du-tien-nghi-ngay-nga-tu-cao-thang-voi-dien-bien-phu.html" alt="Cho Thuê Phòng trọ cao cấp đầy đủ tiện nghi ngay ngã tư Cao Thắng với Điện Biên Phủ" title=""></a>
                                    <div class="icon_vip" style="background-color:#3763e0;">vip 3</div>
                                    <div class="vip_star"><i></i><i></i></div>
                                    <div class="image_number"><span>4 ảnh</span></div>
                                </div>
                                <div class="post-info clearfix">
                                    <div class="title"><a class="post-link" style="color:#3763e0;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-tro-cao-cap-day-du-tien-nghi-ngay-nga-tu-cao-thang-voi-dien-bien-phu.html" alt="Cho Thuê Phòng trọ cao cấp đầy đủ tiện nghi ngay ngã tư Cao Thắng với Điện Biên Phủ"> Cho Thuê Phòng trọ cao cấp đầy đủ tiện nghi ngay ngã tư Cao Thắng với Điện Biên Phủ </a></div>
                                    <div class="price"><strong>5.4 triệu/tháng</strong></div>
                                    <div class="clearfix">
                                        <div class="acreage"><span class="name">Diện tích:</span><span class="value">20m²</span></div>
                                        <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                        <time class="timeago"><span class="name">Cập nhật:</span><span class="value">Hôm nay</span></time>
                                    </div>
                                    <p class="p_content">Mình đang cho thuê phòng trọ cao cấp đầy đủ, tại 449 Điện Biên Phủ, Phường 3, Quận 3.+ Diện tích: 20 m2, tủ quần áo, tivi, máy lạnh, bàn, giường đệm,…</p>
                                </div>
                            </li>
                            <li id="post-288521" class="post clearfix post-288521 normal" style="border-color:#055699;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">185 Đường Nguyễn Phúc Nguyên, Phường 10, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="10.7809048">
                                <meta itemprop="longitude" content="106.67845740000007">
                            </span>
                                <meta itemprop="branchCode" content="288521">
                                <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/27/71198019-476686596514316-940859848008925184-n_1569558484.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/27/71198019-476686596514316-940859848008925184-n_1569558484.jpg&quot;);" data-loaded="true">
                                    <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-duong-nguyen-phuc-nguyen-quan-3.html" alt="Cho Thuê Phòng Đường Nguyễn Phúc Nguyên, Quận 3" title=""></a>
                                    <div class="image_number"><span>1 ảnh</span></div>
                                </div>
                                <div class="post-info clearfix">
                                    <div class="title"><a class="post-link" style="color:#055699;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-duong-nguyen-phuc-nguyen-quan-3.html" alt="Cho Thuê Phòng Đường Nguyễn Phúc Nguyên, Quận 3"> Cho Thuê Phòng Đường Nguyễn Phúc Nguyên, Quận 3 </a></div>
                                    <div class="price"><strong>2.35 triệu/tháng</strong></div>
                                    <div class="clearfix">
                                        <div class="acreage"><span class="name">Diện tích:</span><span class="value">12m²</span></div>
                                        <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                        <time class="timeago"><span class="name">Cập nhật:</span><span class="value">2 ngày trước</span></time>
                                    </div>
                                    <p class="p_content">- An toàn, sạch sẽ thoáng mát, có máy lạnh.- Khu vực trung tâm ngay ga SG.- Ưu tiên sinh viên, nhân viên văn phòng.- Diện tích 8-10m2.- Giá phòng 2350k/ tháng,…</p>
                                </div>
                            </li>
                            <li id="post-288459" class="post clearfix post-288459 normal" style="border-color:#055699;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">Đường Huỳnh Tịnh Của, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="10.7899227">
                                <meta itemprop="longitude" content="106.68666770000004">
                            </span>
                                <meta itemprop="branchCode" content="288459">
                                <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/26/img-1569461960121-1569462050660_1569468347.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/26/img-1569461960121-1569462050660_1569468347.jpg&quot;);" data-loaded="true">
                                    <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-cho-thue-6x530m2-xach-valli-vao-o-ngay.html" alt="Phòng cho thuê 6x5(30m2), xách valli vào ở ngay" title=""></a>
                                    <div class="image_number"><span>10 ảnh</span></div>
                                </div>
                                <div class="post-info clearfix">
                                    <div class="title"><a class="post-link" style="color:#055699;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-cho-thue-6x530m2-xach-valli-vao-o-ngay.html" alt="Phòng cho thuê 6x5(30m2), xách valli vào ở ngay"> Phòng cho thuê 6x5(30m2), xách valli vào ở ngay </a></div>
                                    <div class="price"><strong>4.3 triệu/tháng</strong></div>
                                    <div class="clearfix">
                                        <div class="acreage"><span class="name">Diện tích:</span><span class="value">30m²</span></div>
                                        <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                        <time class="timeago"><span class="name">Cập nhật:</span><span class="value">3 ngày trước</span></time>
                                    </div>
                                    <p class="p_content">Phòng cho thuê 6x5m (30m2)Nội Thất: giường gỗ + nệm, gối; tủ gỗ lớn, máy lạnh, máy nước nóng, bồn tắm, bồn tiểu nam, nước sơn mới, hình thật…</p>
                                </div>
                            </li>
                            <li id="post-288345" class="post clearfix post-288345 normal" style="border-color:#055699;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">16/6 Đường Trần Quang Diệu, Phường 13, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="10.785383">
                                <meta itemprop="longitude" content="106.67813000000001">
                            </span>
                                <meta itemprop="branchCode" content="288345">
                                <div class="post-thumb border lazy_done" data-background-image="https://phongtro123.com/img/thumb_default.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://phongtro123.com/img/thumb_default.jpg&quot;);" data-loaded="true">
                                    <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/nha-moi-xay-co-6-phong-can-cho-thue.html" alt="Nhà mới xây có 6 phòng cần cho thuê" title=""></a>
                                    <div class="image_number"><span>0 ảnh</span></div>
                                </div>
                                <div class="post-info clearfix">
                                    <div class="title"><a class="post-link" style="color:#055699;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/nha-moi-xay-co-6-phong-can-cho-thue.html" alt="Nhà mới xây có 6 phòng cần cho thuê"> Nhà mới xây có 6 phòng cần cho thuê </a></div>
                                    <div class="price"><strong>3.5 triệu/tháng</strong></div>
                                    <div class="clearfix">
                                        <div class="acreage"><span class="name">Diện tích:</span><span class="value">32m²</span></div>
                                        <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                        <time class="timeago"><span class="name">Cập nhật:</span><span class="value">24/09/2019</span></time>
                                    </div>
                                    <p class="p_content">Nha 1 trệt 3lau moi xay co 6 phong co tolel riêng cho tung phong co loi di rieng co cho de xe co wafi co truyền hình cấp co may nước nong cho moi tolel</p>
                                </div>
                            </li>
                            <li id="post-288290" class="post clearfix post-288290 normal" style="border-color:#055699;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">Đường Lê Văn Sỹ, Phường 13, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="10.7876547">
                                <meta itemprop="longitude" content="106.67819220000001">
                            </span>
                                <meta itemprop="branchCode" content="288290">
                                <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/23/nha-2_1569227635.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/23/nha-2_1569227635.jpg&quot;);" data-loaded="true">
                                    <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-dep-ngay-cho-nguyen-van-troi-quan-3-noi-that-co-ban-gia-tu-37tr-den-66tr-thang-lh-0981648018.html" alt="PHÒNG ĐẸP NGAY CHỢ NGUYỄN VĂN TRỖI- QUẬN 3 NỘI THẤT CƠ BẢN, GIÁ TỪ 3.7TR ĐẾN 6.6TR/THÁNG. LH: 0981648018" title=""></a>
                                    <div class="image_number"><span>7 ảnh</span></div>
                                </div>
                                <div class="post-info clearfix">
                                    <div class="title"><a class="post-link" style="color:#055699;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-dep-ngay-cho-nguyen-van-troi-quan-3-noi-that-co-ban-gia-tu-37tr-den-66tr-thang-lh-0981648018.html" alt="PHÒNG ĐẸP NGAY CHỢ NGUYỄN VĂN TRỖI- QUẬN 3 NỘI THẤT CƠ BẢN, GIÁ TỪ 3.7TR ĐẾN 6.6TR/THÁNG. LH: 0981648018"> PHÒNG ĐẸP NGAY CHỢ NGUYỄN VĂN TRỖI- QUẬN 3 NỘI THẤT CƠ BẢN, GIÁ TỪ 3.7TR ĐẾN 6.6TR/THÁNG. LH: 0981648018 </a></div>
                                    <div class="price"><strong>3.7 triệu/tháng</strong></div>
                                    <div class="clearfix">
                                        <div class="acreage"><span class="name">Diện tích:</span><span class="value">25m²</span></div>
                                        <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                        <time class="timeago"><span class="name">Cập nhật:</span><span class="value">5 giờ trước</span></time>
                                    </div>
                                    <p class="p_content">PHÒNG ĐẸP NGAY CHỢ NGUYỄN VĂN TRỖI- QUẬN 3 NỘI THẤT CƠ BẢN, GIÁ TỪ 3.7TR ĐẾN 6.6TR/THÁNG. LH: 0981648018 Địa chỉ: 31/3/1A Lê Văn Sỹ, P13, Q3.- Giá: 3.7…</p>
                                </div>
                            </li>
                            <li id="post-288259" class="post clearfix post-288259 normal" style="border-color:#055699;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">466/11 Đường Lê Văn Sỹ, Phường 14, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="10.79007">
                                <meta itemprop="longitude" content="106.67365500000005">
                            </span>
                                <meta itemprop="branchCode" content="288259">
                                <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/23/1_1569208602.png" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/23/1_1569208602.png&quot;);" data-loaded="true">
                                    <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/can-ho-cao-cap-35m2-q3-gan-ngay-cau-le-van-sy.html" alt="Căn hộ cao cấp 35m2 Q3, gần ngay cầu Lê Văn Sỹ" title=""></a>
                                    <div class="image_number"><span>8 ảnh</span></div>
                                </div>
                                <div class="post-info clearfix">
                                    <div class="title"><a class="post-link" style="color:#055699;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/can-ho-cao-cap-35m2-q3-gan-ngay-cau-le-van-sy.html" alt="Căn hộ cao cấp 35m2 Q3, gần ngay cầu Lê Văn Sỹ"> Căn hộ cao cấp 35m2 Q3, gần ngay cầu Lê Văn Sỹ </a></div>
                                    <div class="price"><strong>8.8 triệu/tháng</strong></div>
                                    <div class="clearfix">
                                        <div class="acreage"><span class="name">Diện tích:</span><span class="value">35m²</span></div>
                                        <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                        <time class="timeago"><span class="name">Cập nhật:</span><span class="value">23/09/2019</span></time>
                                    </div>
                                    <p class="p_content">* Địa chỉ: 466/11 Lê Văn Sỹ, P.14, Quận 3, TP.HCM- Hẻm lớn chỉ 2p đến bờ kè Hoàng Sa Trường Sa, trục đường Lê Văn Sỹ kết nối với Trường Sa và…</p>
                                </div>
                            </li>
                            <li id="post-288226" class="post clearfix post-288226 normal" style="border-color:#055699;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">235/48 Đường Nam Kỳ Khởi Nghĩa, Phường 14, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="10.789262">
                                <meta itemprop="longitude" content="106.68381099999999">
                            </span>
                                <meta itemprop="branchCode" content="288226">
                                <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/22/43403915-3517-4fcc-bc4b-870157606618_1569149515.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/22/43403915-3517-4fcc-bc4b-870157606618_1569149515.jpg&quot;);" data-loaded="true">
                                    <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/can-nhuong-phong-tro-gap-hem-235-48-nam-ki-khoi-nghia-quan-3.html" alt="Cần nhượng phòng trọ gấp hẻm 235/48 Nam Kỳ Khởi Nghĩa, Quận 3" title=""></a>
                                    <div class="image_number"><span>3 ảnh</span></div>
                                </div>
                                <div class="post-info clearfix">
                                    <div class="title"><a class="post-link" style="color:#055699;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/can-nhuong-phong-tro-gap-hem-235-48-nam-ki-khoi-nghia-quan-3.html" alt="Cần nhượng phòng trọ gấp hẻm 235/48 Nam Kỳ Khởi Nghĩa, Quận 3"> Cần nhượng phòng trọ gấp hẻm 235/48 Nam Kỳ Khởi Nghĩa, Quận 3 </a></div>
                                    <div class="price"><strong>6.5 triệu/tháng</strong></div>
                                    <div class="clearfix">
                                        <div class="acreage"><span class="name">Diện tích:</span><span class="value">25m²</span></div>
                                        <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                        <time class="timeago"><span class="name">Cập nhật:</span><span class="value">22/09/2019</span></time>
                                    </div>
                                    <p class="p_content">Vì lí do cá nhân mình cần nhượng gấp phong trọ lầu 3 thang bộ hẻm 235/48 hẻm không sâu có tap hoá quán cà phe rủa xe trong hẻm, nước 100k/người , điện…</p>
                                </div>
                            </li>
                            <li id="post-288209" class="post clearfix post-288209 normal" style="border-color:#055699;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">21 Đường Cao Thắng, Phường 2, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                <meta itemprop="latitude" content="10.7692936">
                                <meta itemprop="longitude" content="106.68301819999999">
                            </span>
                                <meta itemprop="branchCode" content="288209">
                                <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/22/1_1569127537.png" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/22/1_1569127537.png&quot;);" data-loaded="true">
                                    <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/can-ho-cao-cap-30m2-cao-thang-quan-3-gan-ngay-benh-vien-tu-du.html" alt="Căn hộ cao cấp 30m2 Cao Thắng Quận 3, gần ngay Bệnh Viện Từ Dũ" title=""></a>
                                    <div class="image_number"><span>7 ảnh</span></div>
                                </div>
                                <div class="post-info clearfix">
                                    <div class="title"><a class="post-link" style="color:#055699;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/can-ho-cao-cap-30m2-cao-thang-quan-3-gan-ngay-benh-vien-tu-du.html" alt="Căn hộ cao cấp 30m2 Cao Thắng Quận 3, gần ngay Bệnh Viện Từ Dũ"> Căn hộ cao cấp 30m2 Cao Thắng Quận 3, gần ngay Bệnh Viện Từ Dũ </a></div>
                                    <div class="price"><strong>8 triệu/tháng</strong></div>
                                    <div class="clearfix">
                                        <div class="acreage"><span class="name">Diện tích:</span><span class="value">30m²</span></div>
                                        <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                        <time class="timeago"><span class="name">Cập nhật:</span><span class="value">22/09/2019</span></time>
                                    </div>
                                    <p class="p_content">* Địa chỉ: 21B đường Cao Thắng, Phường 2, Quận 3. - Nằm ngay vị trí Trung tâm Thành Phố nhiều tiện ích xung quanh - Cạnh ngay Bệnh viện Từ Dũ, Bệnh…</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="sidebar" class="block-right">
                        <div style="width: 300px; height: 250px; margin: 0 auto 15px; background-color: #f1f1f1;">
                            <ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-1713423796088709" data-ad-slot="3276511865"></ins><script> (adsbygoogle = window.adsbygoogle || []).push({});</script>
                        </div>
                        <div class="sidebar_submenu">
                            <div class="title">Danh mục cho thuê</div>
                            <ul>
                                <li><a href="https://phongtro123.com/cho-thue-phong-tro" title="Cho thuê phòng trọ">Cho thuê phòng trọ <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh" title="Cho thuê phòng trọ Hồ Chí Minh">Cho thuê phòng trọ Hồ Chí Minh <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="https://phongtro123.com/tinh-thanh/ha-noi" title="Cho thuê phòng trọ Hà Nội">Cho thuê phòng trọ Hà Nội <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="https://phongtro123.com/nha-cho-thue" title="Cho thuê nhà nguyên căn">Cho thuê nhà nguyên căn <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="https://phongtro123.com/cho-thue-can-ho" title="Cho thuê căn hộ">Cho thuê căn hộ <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="https://phongtro123.com/cho-thue-mat-bang" title="Cho thuê mặt bằng">Cho thuê mặt bằng <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="https://phongtro123.com/tim-nguoi-o-ghep" title="Tìm người ở ghép">Tìm người ở ghép <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a title="Cho thuê phòng trọ Quận 7" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-7">Cho thuê phòng trọ Quận 7 <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div id="tinnoibat" class="total_noi_bat total_noi_bat_6">
                            <div class="clearfix">
                                <div class="header clearfix"><span>Có thể bạn quan tâm</span></div>
                                <div class="content">
                                    <div class="list-post clearfix">
                                        <li id="post-211833" class="post clearfix post-211833 tin-vip vip1" style="border-color:#E13427;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                            <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">209 trần văn đang Đường Trần Văn Đang, Phường 11, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                            <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                            <meta itemprop="latitude" content="10.7852084">
                                            <meta itemprop="longitude" content="106.6717261">
                                        </span>
                                            <meta itemprop="branchCode" content="211833">
                                            <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/21/21bf8104-9c24-4bd6-944d-ebb8547cbb2e_1569044826.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/21/21bf8104-9c24-4bd6-944d-ebb8547cbb2e_1569044826.jpg&quot;);" data-loaded="true">
                                                <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3-phong-cho-thue-tien-nghi-sach-se-ngay-trung-tam-gia-32-tr-thang.html" alt="[Quận 3] Phòng cho thuê tiện nghi sạch sẽ có thang máy ngay trung tâm giá 3,7tr/ tháng" title=""></a>
                                                <div class="icon_vip" style="background-color:#E13427;">vip 1</div>
                                                <div class="vip_star"><i></i><i></i><i></i><i></i></div>
                                                <div class="image_number"><span>4 ảnh</span></div>
                                            </div>
                                            <div class="post-info clearfix">
                                                <h3 class="title"><a class="post-link" style="color:#E13427;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3-phong-cho-thue-tien-nghi-sach-se-ngay-trung-tam-gia-32-tr-thang.html" alt="[Quận 3] Phòng cho thuê tiện nghi sạch sẽ có thang máy ngay trung tâm giá 3,7tr/ tháng"> [Quận 3] Phòng cho thuê tiện nghi sạch sẽ có thang máy ngay trung tâm giá 3,7tr/ tháng </a></h3>
                                                <div class="price"><strong>3.7 triệu/tháng</strong></div>
                                                <div class="clearfix">
                                                    <div class="acreage"><span class="name">Diện tích:</span><span class="value">20m²</span></div>
                                                    <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                                    <time class="timeago"><span class="name">Cập nhật:</span><span class="value">Hôm nay</span></time>
                                                </div>
                                                <p class="p_content">Phòng trọ quận 3, khu an ninh sạch sẽ, di chuyển bằng thang máyĐặc điểm: 20 m2, có tiện nghi, WC trong phòng, được…</p>
                                            </div>
                                        </li>
                                        <li id="post-95142" class="post clearfix post-95142 tin-vip vip2" style="border-color:#f60;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                            <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">Điện Biên Phủ, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                            <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                            <meta itemprop="latitude" content="10.7795016">
                                            <meta itemprop="longitude" content="106.68665469999996">
                                        </span>
                                            <meta itemprop="branchCode" content="95142">
                                            <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/07/17/img-1563294829517-1563328614924_1563328783.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/07/17/img-1563294829517-1563328614924_1563328783.jpg&quot;);" data-loaded="true">
                                                <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-day-du-noi-that-5945-dien-bien-phu-vs-nguyen-thien-thuat-quan-3.html" alt="Cho thuê phòng đầy đủ nội thất, 594/5 Điện Biên Phủ vs Nguyễn Thiện Thuật, Quận 3" title=""></a>
                                                <div class="icon_vip" style="background-color:#f60;">vip 2</div>
                                                <div class="vip_star"><i></i><i></i><i></i></div>
                                                <div class="image_number"><span>5 ảnh</span></div>
                                            </div>
                                            <div class="post-info clearfix">
                                                <h3 class="title"><a class="post-link" style="color:#f60;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-day-du-noi-that-5945-dien-bien-phu-vs-nguyen-thien-thuat-quan-3.html" alt="Cho thuê phòng đầy đủ nội thất, 594/5 Điện Biên Phủ vs Nguyễn Thiện Thuật, Quận 3"> Cho thuê phòng đầy đủ nội thất, 594/5 Điện Biên Phủ vs Nguyễn Thiện Thuật, Quận 3 </a></h3>
                                                <div class="price"><strong>6 triệu/tháng</strong></div>
                                                <div class="clearfix">
                                                    <div class="acreage"><span class="name">Diện tích:</span><span class="value">30m²</span></div>
                                                    <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                                    <time class="timeago"><span class="name">Cập nhật:</span><span class="value">Hôm nay</span></time>
                                                </div>
                                                <p class="p_content">Cho thuê phòng trọ cao cấp với thiết kế hiện đại, sang trọng, đẹp, sạch sẽ, nội thất cao cấp.- Sẽ là nơi lý…</p>
                                            </div>
                                        </li>
                                        <li id="post-288619" class="post clearfix post-288619 tin-vip vip3" style="border-color:#3763e0;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                            <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">297 Đường Lê Văn Sỹ, Phường 8, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                            <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                            <meta itemprop="latitude" content="10.787253">
                                            <meta itemprop="longitude" content="106.678675">
                                        </span>
                                            <meta itemprop="branchCode" content="288619">
                                            <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/28/phong_1569667891.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/28/phong_1569667891.jpg&quot;);" data-loaded="true">
                                                <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-297-le-van-sy-co-ban-cong-va-bao-2-chiec-xe.html" alt="Phòng 297 lê văn sỹ có ban công và bao 2 chiếc xe" title=""></a>
                                                <div class="icon_vip" style="background-color:#3763e0;">vip 3</div>
                                                <div class="vip_star"><i></i><i></i></div>
                                                <div class="image_number"><span>3 ảnh</span></div>
                                            </div>
                                            <div class="post-info clearfix">
                                                <h3 class="title"><a class="post-link" style="color:#3763e0;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-297-le-van-sy-co-ban-cong-va-bao-2-chiec-xe.html" alt="Phòng 297 lê văn sỹ có ban công và bao 2 chiếc xe"> Phòng 297 lê văn sỹ có ban công và bao 2 chiếc xe </a></h3>
                                                <div class="price"><strong>4 triệu/tháng</strong></div>
                                                <div class="clearfix">
                                                    <div class="acreage"><span class="name">Diện tích:</span><span class="value">25m²</span></div>
                                                    <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                                    <time class="timeago"><span class="name">Cập nhật:</span><span class="value">Hôm nay</span></time>
                                                </div>
                                                <p class="p_content">Cho thuê nguyên lầu 1 hẻm 297 lê văn sỹ quận 3. 2 phòng ngủ 1 nhà vệ sinh. .bao 4 chiếc xe. điện 4 ngàn/kg. nước 100k/…</p>
                                            </div>
                                        </li>
                                        <li id="post-283133" class="post clearfix post-283133 tin-vip vip3" style="border-color:#3763e0;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                            <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">256/18 Đường Pasteur, Phường 8, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                            <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                            <meta itemprop="latitude" content="10.786867">
                                            <meta itemprop="longitude" content="106.68975599999999">
                                        </span>
                                            <meta itemprop="branchCode" content="283133">
                                            <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/06/09/3c8dd294-f1f0-4615-9385-5d4d9e4e3957_1560024622.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/06/09/3c8dd294-f1f0-4615-9385-5d4d9e4e3957_1560024622.jpg&quot;);" data-loaded="true">
                                                <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-ban-cong-rong-30m2-full-noi-that-ngay-vien-paster-q-3-hinh-that.html" alt="PHÒNG ĐẸP, SẠCH SẼ 40m2 FULL NỘI THẤT NGAY VIỆN PASTER, Q.3 (Hình Thật)" title=""></a>
                                                <div class="icon_vip" style="background-color:#3763e0;">vip 3</div>
                                                <div class="vip_star"><i></i><i></i></div>
                                                <div class="image_number"><span>7 ảnh</span></div>
                                            </div>
                                            <div class="post-info clearfix">
                                                <h3 class="title"><a class="post-link" style="color:#3763e0;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-ban-cong-rong-30m2-full-noi-that-ngay-vien-paster-q-3-hinh-that.html" alt="PHÒNG ĐẸP, SẠCH SẼ 40m2 FULL NỘI THẤT NGAY VIỆN PASTER, Q.3 (Hình Thật)"> PHÒNG ĐẸP, SẠCH SẼ 40m2 FULL NỘI THẤT NGAY VIỆN PASTER, Q.3 (Hình Thật) </a></h3>
                                                <div class="price"><strong>5 triệu/tháng</strong></div>
                                                <div class="clearfix">
                                                    <div class="acreage"><span class="name">Diện tích:</span><span class="value">30m²</span></div>
                                                    <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                                    <time class="timeago"><span class="name">Cập nhật:</span><span class="value">Hôm nay</span></time>
                                                </div>
                                                <p class="p_content">Địa chỉ: 256/18 PASTER,P.8,Q.3 (VUI LÒNG GỌI TRƯỚC 30phút KHI ĐẾN Xem)- Phòng rộng từ 20-30m2. phòng thoáng mát, sạch…</p>
                                            </div>
                                        </li>
                                        <li id="post-288557" class="post clearfix post-288557 tin-vip vip3" style="border-color:#3763e0;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                            <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">449 Đường Điện Biên Phủ, Phường 3, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                            <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                            <meta itemprop="latitude" content="10.7721714">
                                            <meta itemprop="longitude" content="106.67864940000004">
                                        </span>
                                            <meta itemprop="branchCode" content="288557">
                                            <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/27/0a327f7691c3769d2fd2_1569592052.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2019/09/27/0a327f7691c3769d2fd2_1569592052.jpg&quot;);" data-loaded="true">
                                                <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-tro-cao-cap-day-du-tien-nghi-ngay-nga-tu-cao-thang-voi-dien-bien-phu.html" alt="Cho Thuê Phòng trọ cao cấp đầy đủ tiện nghi ngay ngã tư Cao Thắng với Điện Biên Phủ" title=""></a>
                                                <div class="icon_vip" style="background-color:#3763e0;">vip 3</div>
                                                <div class="vip_star"><i></i><i></i></div>
                                                <div class="image_number"><span>4 ảnh</span></div>
                                            </div>
                                            <div class="post-info clearfix">
                                                <h3 class="title"><a class="post-link" style="color:#3763e0;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-tro-cao-cap-day-du-tien-nghi-ngay-nga-tu-cao-thang-voi-dien-bien-phu.html" alt="Cho Thuê Phòng trọ cao cấp đầy đủ tiện nghi ngay ngã tư Cao Thắng với Điện Biên Phủ"> Cho Thuê Phòng trọ cao cấp đầy đủ tiện nghi ngay ngã tư Cao Thắng với Điện Biên Phủ </a></h3>
                                                <div class="price"><strong>5.4 triệu/tháng</strong></div>
                                                <div class="clearfix">
                                                    <div class="acreage"><span class="name">Diện tích:</span><span class="value">20m²</span></div>
                                                    <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                                    <time class="timeago"><span class="name">Cập nhật:</span><span class="value">Hôm nay</span></time>
                                                </div>
                                                <p class="p_content">Mình đang cho thuê phòng trọ cao cấp đầy đủ, tại 449 Điện Biên Phủ, Phường 3, Quận 3.+ Diện tích: 20 m2, tủ…</p>
                                            </div>
                                        </li>
                                        <li id="post-274837" class="post clearfix post-274837 tin-vip vip3" style="border-color:#3763e0;" itemscope="" itemtype="http://schema.org/SingleFamilyResidence">
                                            <span class="hidden" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">443/10, Đường Điện Biên Phủ, Phường 3, Quận 3, Hồ Chí Minh</span><span itemprop="addressLocality">Quận 3, Hồ Chí Minh</span></span>
                                            <span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
                                            <meta itemprop="latitude" content="10.7720208">
                                            <meta itemprop="longitude" content="106.67882980000002">
                                        </span>
                                            <meta itemprop="branchCode" content="274837">
                                            <div class="post-thumb lazy_done" data-background-image="https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2018/12/07/28870244-1909579422400183-1644142678096478208-o_1544190181.jpg" style="display: block; background-position: center center; background-image: url(&quot;https://static123.com/phongtro123/uploads/images/thumbs/450x300/fit/2018/12/07/28870244-1909579422400183-1644142678096478208-o_1544190181.jpg&quot;);" data-loaded="true">
                                                <a class="post-link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-nu-thue-phong-443-10-dien-bien-phu-f3-q-3-ngay-nga-tu-cao-thang.html" alt="Cho nữ thuê phòng 443/10 Điện Biên Phủ, F3, Q.3 ngay ngã tư Cao Thắng" title=""></a>
                                                <div class="icon_vip" style="background-color:#3763e0;">vip 3</div>
                                                <div class="vip_star"><i></i><i></i></div>
                                                <div class="image_number"><span>1 ảnh</span></div>
                                            </div>
                                            <div class="post-info clearfix">
                                                <h3 class="title"><a class="post-link" style="color:#3763e0;" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-nu-thue-phong-443-10-dien-bien-phu-f3-q-3-ngay-nga-tu-cao-thang.html" alt="Cho nữ thuê phòng 443/10 Điện Biên Phủ, F3, Q.3 ngay ngã tư Cao Thắng"> Cho nữ thuê phòng 443/10 Điện Biên Phủ, F3, Q.3 ngay ngã tư Cao Thắng </a></h3>
                                                <div class="price"><strong>2.1 triệu/tháng</strong></div>
                                                <div class="clearfix">
                                                    <div class="acreage"><span class="name">Diện tích:</span><span class="value">10m²</span></div>
                                                    <div class="address"><span class="name">Khu vực:</span><span class="value"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3" title="Cho thuê Phòng trọ Quận 3, Hồ Chí Minh">Quận 3, Hồ Chí Minh</a></span></div>
                                                    <time class="timeago"><span class="name">Cập nhật:</span><span class="value">Hôm nay</span></time>
                                                </div>
                                                <p class="p_content">• Giá từ 1,000,000 đến 3,100,000• Phòng mới xây 100% • WC riêng phòng có vòi nước nóng lạnh• Wifi, hoàn toàn…</p>
                                            </div>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="child_district_box khuvuc">
                            <span class="title">Xem theo quận huyện</span>
                            <ul class="clearfix">
                                <li><a title="Cho thuê Phòng trọ Quận 1" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-1">Cho thuê Phòng trọ Quận 1</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận 2" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-2">Cho thuê Phòng trọ Quận 2</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận 3" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-3">Cho thuê Phòng trọ Quận 3</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận 4" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-4">Cho thuê Phòng trọ Quận 4</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận 5" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-5">Cho thuê Phòng trọ Quận 5</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận 6" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-6">Cho thuê Phòng trọ Quận 6</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận 7" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-7">Cho thuê Phòng trọ Quận 7</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận 8" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-8">Cho thuê Phòng trọ Quận 8</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận 9" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-9">Cho thuê Phòng trọ Quận 9</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận 10" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-10">Cho thuê Phòng trọ Quận 10</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận 11" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-11">Cho thuê Phòng trọ Quận 11</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận 12" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-12">Cho thuê Phòng trọ Quận 12</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận Bình Thạnh" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-binh-thanh">Cho thuê Phòng trọ Bình Thạnh</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận Bình Tân" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-binh-tan">Cho thuê Phòng trọ Bình Tân</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận Gò Vấp" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-go-vap">Cho thuê Phòng trọ Gò Vấp</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận Phú Nhuận" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-phu-nhuan">Cho thuê Phòng trọ Phú Nhuận</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận Tân Bình" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-tan-binh">Cho thuê Phòng trọ Tân Bình</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận Tân Phú" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-tan-phu">Cho thuê Phòng trọ Tân Phú</a></li>
                                <li><a title="Cho thuê Phòng trọ Quận Thủ Đức" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/quan-thu-duc">Cho thuê Phòng trọ Thủ Đức</a></li>
                                <li><a title="Cho thuê Phòng trọ Huyện Bình Chánh" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/huyen-binh-chanh">Cho thuê Phòng trọ Bình Chánh</a></li>
                                <li><a title="Cho thuê Phòng trọ Huyện Cần Giờ" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/huyen-can-gio">Cho thuê Phòng trọ Cần Giờ</a></li>
                                <li><a title="Cho thuê Phòng trọ Huyện Củ Chi" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/huyen-cu-chi">Cho thuê Phòng trọ Củ Chi</a></li>
                                <li><a title="Cho thuê Phòng trọ Huyện Hóc Môn" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/huyen-hoc-mon">Cho thuê Phòng trọ Hóc Môn</a></li>
                                <li><a title="Cho thuê Phòng trọ Huyện Nhà Bè" href="https://phongtro123.com/tinh-thanh/ho-chi-minh/huyen-nha-be">Cho thuê Phòng trọ Nhà Bè</a></li>
                            </ul>
                        </div>
                        <div class="list_post_recent">
                            <div class="header">Tin mới đăng</div>
                            <ul>
                                <li class="normal"><a href="https://phongtro123.com/tinh-thanh/da-nang/can-ho-cao-cap-sat-bien-my-khe-gia-sinh-vien.html"><span class="title" style="color:#055699;">CĂN HỘ CAO CẤP SÁT BIỂN MỸ KHÊ GIÁ SINH VIÊN</span><span class="price">5.7 triệu/tháng</span><time class="timeago"><span>10 phút trước</span></time></a></li>
                                <li class="tin-vip vipnoibat"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-tro-day-du-tien-nghi-tai-415-tran-xuan-soan-quan-7-gia-tu-2-6t-3-3t-0903-64-79-88-c-binh.html"><span class="title" style="color:#E13427;">PHÒNG CAO CẤP MÁY LẠNH GIÁ 2.8T-3.5T, Call: 0938.677.288 - 0985.04.77.88, 415 TRẦN XUÂN SOẠN, Q7.</span><span class="price">3 triệu/tháng</span><time class="timeago"><span>Hôm nay</span></time></a></li>
                                <li class="normal"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-khach-san-day-du-tien-nghi-dai-han-gia-cuc-re-chi-tu-1800000dthang-goi-ngay-0918550190.html"><span class="title" style="color:#055699;">PHÒNG Như HOTEL GÒ XOÀI VÀ LỄ VĂN QƯỚI Giá chỉ từ 2,200,000d/tháng, gọi ngay 0918550190</span><span class="price">2.5 triệu/tháng</span><time class="timeago"><span>34 phút trước</span></time></a></li>
                                <li class="normal"><a href="https://phongtro123.com/tinh-thanh/ha-noi/nha-tro-o-ghep-homestay-sinh-vien-full-tien-nghi.html"><span class="title" style="color:#055699;">Nhà trọ ở ghép - Homestay sinh viên full tiện nghi</span><span class="price">1.5 triệu/tháng</span><time class="timeago"><span>35 phút trước</span></time></a></li>
                                <li class="normal"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-o-cong-hoa-tan-binh.html"><span class="title" style="color:#055699;">Cho thuê phòng ở Cộng Hòa - Tân Bình</span><span class="price">3 triệu/tháng</span><time class="timeago"><span>42 phút trước</span></time></a></li>
                                <li class="tin-vip vipnoibat"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-co-gac-xep-full-noi-that-25m2-duong-ba-trac.html"><span class="title" style="color:#E13427;">PHÒNG CÓ GÁC XẾP FULL NỘI THẤT 25M2 DƯƠNG BÁ TRẠC</span><span class="price">3.7 triệu/tháng</span><time class="timeago"><span>Hôm nay</span></time></a></li>
                            </ul>
                        </div>
                        <div style="margin: 10px auto;">
                            <center><a target="_blank" href="https://atrungroi.com/xstc-xo-so-tu-chon-mega-645-vietlott.html"><img alt="Xem kết quả xổ số tự chọn Mega 6/45 Vietlott mới nhất" title="Xem kết quả xổ số tự chọn Mega 6/45 Vietlott mới nhất" src="https://atrungroi.com/wp-content/themes/main/images/xem-ket-qua-xo-so-mega-moi-nhat-340.gif"></a></center>
                        </div>
                        <div class="list_post_recent">
                            <span class="header">Có thể bạn quan tâm</span>
                            <ul>
                                <li><a href="https://phongtro123.com/news/hop-dong-thue-nha-tro-phong-tro" title="Mẫu hợp đồng cho thuê phòng trọ">Mẫu hợp đồng cho thuê phòng trọ</a></li>
                                <li><a href="https://phongtro123.com/kinh-nghiem/kinh-nghiem-thue-phong-tro-tranh-bi-lua-gat.html" title="Cẩn thận các kiểu lừa đảo khi thuê phòng trọ">Cẩn thận các kiểu lừa đảo khi thuê phòng trọ</a></li>
                                <li><a href="https://phongtro123.com/kinh-nghiem/chia-se-10-kinh-nghiem-khi-thue-phong-tro-cho-sinh-vien.html" title="Kinh nghiệm thuê phòng trọ cho Sinh Viên">Kinh nghiệm thuê phòng trọ Sinh Viên</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="whyus">
            <div class="container">
                <div class="whyus_wrapper">
                    <div class="whyus_block">
                        <div class="whyus_header">
                            <h3>Tại sao lại chọn PhongTro123.com?</h3>
                        </div>
                        <div class="whyus_body">
                            <p>Chúng tôi biết bạn có rất nhiều lựa chọn, nhưng Phongtro123.com tự hào là trang web đứng top google về các từ khóa: <strong>cho thuê phòng trọ</strong>, <strong>nhà trọ</strong>, <strong>thuê nhà nguyên căn</strong>, <strong>cho thuê căn hộ</strong>, <strong>tìm người ở ghép</strong>...Vì vậy tin của bạn đăng trên website sẽ tiếp cận được với nhiều khách hàng hơn, do đó giao dịch nhanh hơn, tiết kiệm chi phí hơn</p>
                            <div class="whyus_countup clearfix">
                                <div class="whyus_countup_item">
                                    <div class="whyus_countup_item_number">70.000+</div>
                                    <div class="whyus_countup_item_text">Thành viên</div>
                                </div>
                                <div class="whyus_countup_item">
                                    <div class="whyus_countup_item_number">100.000+</div>
                                    <div class="whyus_countup_item_text">Tin đăng</div>
                                </div>
                                <div class="whyus_countup_item">
                                    <div class="whyus_countup_item_number">300.000+</div>
                                    <div class="whyus_countup_item_text">Lượt truy cập/tháng</div>
                                </div>
                                <div class="whyus_countup_item">
                                    <div class="whyus_countup_item_number">2.500.000+</div>
                                    <div class="whyus_countup_item_text">Lượt xem/tháng</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="whyus_block testimonial">
                        <div class="whyus_header">
                            <h3>Chúng tôi luôn mong muốn đem lại hiệu quả tối đa cho khách hàng</h3>
                        </div>
                        <div class="whyus_body clearfix">
                            <div class="testimonial_content">
                                <p>Trước khi biết website phongtro123, mình phải tốn nhiều công sức và chi phí cho việc đăng tin cho thuê: từ việc phát tờ rơi, dán giấy, và đăng lên các website khác nhưng hiệu quả không cao. Từ khi biết website phongtro123.com, mình đã thử đăng tin lên và đánh giá hiệu quả khá cao trong khi chi phí khá thấp, không còn tình trạng phòng trống kéo dài.</p>
                            </div>
                            <div class="testimonial_by clearfix">
                                <div class="testimonial_by_text"><strong>Anh Khánh</strong><br>(chủ hệ thống phòng trọ tại Tp.HCM) </div>
                            </div>
                        </div>
                    </div>
                    <div class="whyus_block" style="text-align: center;">
                        <div class="whyus_header">
                            <h3>Bạn đang có phòng trọ / căn hộ cho thuê?</h3>
                        </div>
                        <div class="whyus_body">
                            <p>Không phải lo tìm người cho thuê, phòng trống kéo dài</p>
                            <a class="btn" href="https://phongtro123.com/quan-ly/dang-tin-moi.html">Đăng tin ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="keyword">
            <div class="container">
                <div class="keyword_wrapper clearfix">
                    <div class="keyword_col">
                        <h2 class="keyword_col_header"><a href="https://phongtro123.com/cho-thue-can-ho" title="Cho thuê căn hộ chung cư"><strong>Cho thuê căn hộ chung cư</strong></a></h2>
                        <ul class="keyword_child_location clearfix">
                            <li class="item"><a class="link" title="Cho thuê căn hộ chung cư tại Hồ Chí Minh" href="https://phongtro123.com/cho-thue-can-ho-chung-cu-ho-chi-minh">Cho thuê căn hộ chung cư Tp.HCM</a></li>
                            <li class="item"><a class="link" title="Cho thuê căn hộ chung cư tại Hà Nội" href="https://phongtro123.com/cho-thue-can-ho-chung-cu-ha-noi">Cho thuê căn hộ chung cư Hà Nội</a></li>
                            <li class="item"><a class="link" title="Cho thuê căn hộ chung cư tại Bình Dương" href="https://phongtro123.com/cho-thue-can-ho-chung-cu-binh-duong">Cho thuê căn hộ chung cư Bình Dương</a></li>
                            <li class="item"><a class="link" title="Cho thuê căn hộ chung cư tại Đà Nẵng" href="https://phongtro123.com/cho-thue-can-ho-chung-cu-da-nang">Cho thuê căn hộ chung cư Đà Nẵng</a></li>
                            <li class="item"><a class="link" title="Cho thuê căn hộ chung cư tại Hải Phòng" href="https://phongtro123.com/cho-thue-can-ho-chung-cu-hai-phong">Cho thuê căn hộ chung cư Hải Phòng</a></li>
                            <li class="item"><a class="link" title="Cho thuê căn hộ chung cư tại Khánh Hòa" href="https://phongtro123.com/cho-thue-can-ho-chung-cu-khanh-hoa">Cho thuê căn hộ chung cư Khánh Hòa</a></li>
                        </ul>
                    </div>
                    <div class="keyword_col">
                        <h2 class="keyword_col_header"><a href="https://phongtro123.com/cho-thue-phong-tro" title="Cho thuê phòng trọ, nhà trọ"><strong>Cho thuê phòng trọ, nhà trọ</strong></a></h2>
                        <ul class="keyword_child_location clearfix">
                            <li class="item"><a class="link" href="https://phongtro123.com/tinh-thanh/ho-chi-minh" title="Cho thuê phòng trọ, nhà trọ tại Tp.HCM">Cho thuê phòng trọ, nhà trọ Tp.HCM</a></li>
                            <li class="item"><a class="link" href="https://phongtro123.com/tinh-thanh/ha-noi" title="Cho thuê phòng trọ, nhà trọ tại Hà Nội">Cho thuê phòng trọ, nhà trọ Hà Nội</a></li>
                            <li class="item"><a class="link" href="https://phongtro123.com/tinh-thanh/da-nang" title="Cho thuê phòng trọ, nhà trọ tại Đà Nẵng">Cho thuê phòng trọ, nhà trọ Đà Nẵng</a></li>
                            <li class="item"><a class="link" href="https://phongtro123.com/tinh-thanh/can-tho" title="Cho thuê phòng trọ, nhà trọ tại Cần Thơ">Cho thuê phòng trọ, nhà trọ Cần Thơ</a></li>
                            <li class="item"><a class="link" href="https://phongtro123.com/tinh-thanh/binh-duong" title="Cho thuê phòng trọ, nhà trọ tại Bình Dương">Cho thuê phòng trọ, nhà trọ Bình Dương</a></li>
                            <li class="item"><a class="link" href="https://phongtro123.com/tinh-thanh/dong-nai" title="Cho thuê phòng trọ, nhà trọ tại Đồng Nai">Cho thuê phòng trọ, nhà trọ Đồng Nai</a></li>
                            <li class="item"><a class="link" href="https://phongtro123.com/tinh-thanh/ba-ria-vung-tau" title="Cho thuê phòng trọ, nhà trọ tại Bà Rịa - Vũng Tàu">Cho thuê phòng trọ, nhà trọ Bà Rịa - Vũng Tàu</a></li>
                            <li class="item"><a class="link" href="https://phongtro123.com/tinh-thanh/khanh-hoa" title="Cho thuê phòng trọ, nhà trọ tại Khánh Hòa">Cho thuê phòng trọ, nhà trọ Khánh Hòa</a></li>
                        </ul>
                    </div>
                    <div class="keyword_col">
                        <h2 class="keyword_col_header"><a href="https://phongtro123.com/nha-cho-thue" title="Cho thuê nhà nguyên căn"><strong>Cho thuê nhà nguyên căn</strong></a></h2>
                        <ul class="keyword_child_location clearfix">
                            <li class="item"><a class="link" title="Cho thuê nhà nguyên căn tại Tp.HCM" href="https://phongtro123.com/cho-thue-nha-nguyen-can-ho-chi-minh">Cho thuê nhà nguyên căn tại Tp.HCM</a></li>
                            <li class="item"><a class="link" title="Cho thuê nhà nguyên căn tại Hà Nội" href="https://phongtro123.com/cho-thue-nha-nguyen-can-ha-noi">Cho thuê nhà nguyên căn tại Hà Nội</a></li>
                            <li class="item"><a class="link" title="Cho thuê nhà nguyên căn tại Bình Dương" href="https://phongtro123.com/cho-thue-nha-nguyen-can-binh-duong">Cho thuê nhà nguyên căn tại Bình Dương</a></li>
                            <li class="item"><a class="link" title="Cho thuê nhà nguyên căn tại Đà Nẵng" href="https://phongtro123.com/cho-thue-nha-nguyen-can-da-nang">Cho thuê nhà nguyên căn tại Đà Nẵng</a></li>
                            <li class="item"><a class="link" title="Cho thuê nhà nguyên căn tại Đồng Nai" href="https://phongtro123.com/cho-thue-nha-nguyen-can-dong-nai">Cho thuê nhà nguyên căn tại Đồng Nai</a></li>
                            <li class="item"><a class="link" title="Cho thuê nhà nguyên căn tại Cần Thơ" href="https://phongtro123.com/cho-thue-nha-nguyen-can-can-tho">Cho thuê nhà nguyên căn tại Cần Thơ</a></li>
                            <li class="item"><a class="link" title="Cho thuê nhà nguyên căn tại Khánh Hòa" href="https://phongtro123.com/cho-thue-nha-nguyen-can-khanh-hoa">Cho thuê nhà nguyên căn tại Khánh Hòa</a></li>
                        </ul>
                    </div>
                    <div class="keyword_col">
                        <h2 class="keyword_col_header"><a href="https://phongtro123.com/tim-nguoi-o-ghep" title="Tìm người ở ghép"><strong>Tìm người ở ghép</strong></a></h2>
                        <ul class="keyword_child_location clearfix">
                            <li class="item"><a class="link" title="Tìm người ở ghép tại Tp.HCM" href="https://phongtro123.com/tim-nguoi-o-ghep-ho-chi-minh">Tìm người ở ghép Tp.HCM</a></li>
                            <li class="item"><a class="link" title="Tìm người ở ghép tại Hà Nội" href="https://phongtro123.com/tim-nguoi-o-ghep-ha-noi">Tìm người ở ghép Hà Nội</a></li>
                            <li class="item"><a class="link" title="Tìm người ở ghép tại Đồng Nai" href="https://phongtro123.com/tim-nguoi-o-ghep-dong-nai">Tìm người ở ghép Đồng Nai</a></li>
                            <li class="item"><a class="link" title="Tìm người ở ghép tại Cần Thơ" href="https://phongtro123.com/tim-nguoi-o-ghep-hai-phong">Tìm người ở ghép Hải Phòng</a></li>
                            <li class="item"><a class="link" title="Tìm người ở ghép tại Khánh Hòa" href="https://phongtro123.com/tim-nguoi-o-ghep-khanh-hoa">Tìm người ở ghép Khánh Hòa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="support_box">
            <div class="container clearfix">
                <div class="header">Hỗ trợ khách hàng</div>
                <div class="content">
                    <div class="list_support clearfix">
                        <div class="item clearfix">
                            <a target="_blank" href="tel:0917686101">
                                <img src="/images/icon-credit-card.svg" width="30" height="30">
                                <div class="name">Hỗ trợ thanh toán</div>
                                <div class="value">0917686101</div>
                            </a>
                        </div>
                        <div class="item clearfix">
                            <a target="_blank" href="tel:0917686101">
                                <img src="/images/icon-phone-green.svg" width="30" height="30">
                                <div class="name">Trợ giúp đăng tin</div>
                                <div class="value">0917686101</div>
                            </a>
                        </div>
                        <div class="item clearfix">
                            <a target="_blank" href="https://zalo.me/0917686101">
                                <img src="/images/icon_zalo.svg" width="30" height="30" style="border: 1px solid #00a1dc; border-radius: 50%;">
                                <div class="name">Zalo</div>
                                <div class="value">0917686101</div>
                            </a>
                        </div>
                        <div class="item clearfix">
                            <a href="viber://chat?number=0917686101">
                                <img src="/images/icon_viber.svg" width="30" height="30">
                                <div class="name">Viber</div>
                                <div class="value">0917686101</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop