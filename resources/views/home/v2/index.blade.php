@extends('layouts.master_v2')
@section('form_search')
    @include('components.search')
@stop
@section('content')
    <main id="main">
        <div class="container">
            <h1 class="page-title">Cho thuê phòng trọ, cho thuê nhà trọ, tìm phòng trọ</h1>
            <div class="page-summary">
                <p>Cho thuê phòng trọ, nhà trọ số 1 Việt Nam - Website đăng tin cho thuê phòng trọ, tìm phòng trọ nhanh, hiệu quả với hơn 70.000+ tin đăng và 2.000.000 lượt xem mõi tháng.</p>
            </div>
        </div>
        <ul class="khuvucnoibat" style="display: flex">
            <li class="hcm"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh" title="Cho thuê phòng trọ Hồ Chí Minh">Phòng trọ <span>Hồ Chí Minh</span></a></li>
            <li class="hn"><a href="https://phongtro123.com/tinh-thanh/ha-noi" title="Cho thuê phòng trọ Hà Nội">Phòng trọ <span>Hà Nội</span></a></li>
            <li class="dn"><a href="https://phongtro123.com/tinh-thanh/da-nang" title="Cho thuê phòng trọ Đà Nẵng">Phòng trọ <span>Đà Nẵng</span></a></li>
        </ul>
{{--        @include('home.v2.include.room_hot')--}}
        <div class="container">
            <div class="page_view_wrapper clearfix">
                <div class="block-left">
                    @if (isset($motels))
                        @include('components.motels',['motels' => $motels])
                    @endif
                </div>
                <div id="sidebar" class="block-right">
                    <div style="width: 300px; margin: 0 auto 15px; background-color: #f1f1f1;">
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
                    <div class="list_post_recent">
                        <div class="header">Tin mới đăng</div>
                        <ul>
                            <li class="normal"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-khach-san-day-du-tien-nghi-dai-han-gia-cuc-re-chi-tu-1800000dthang-goi-ngay-0918550190.html"><span class="title" style="color:#055699;">PHÒNG Như HOTEL GÒ XOÀI VÀ LỄ VĂN QƯỚI Giá chỉ từ 2,200,000d/tháng, gọi ngay 0918550190</span><span class="price">2.5 triệu/tháng</span><time class="timeago"><span>3 phút trước</span></time></a></li>
                            <li class="normal"><a href="https://phongtro123.com/tinh-thanh/ha-noi/nha-tro-o-ghep-homestay-sinh-vien-full-tien-nghi.html"><span class="title" style="color:#055699;">Nhà trọ ở ghép - Homestay sinh viên full tiện nghi</span><span class="price">1.5 triệu/tháng</span><time class="timeago"><span>4 phút trước</span></time></a></li>
                            <li class="normal"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/cho-thue-phong-o-cong-hoa-tan-binh.html"><span class="title" style="color:#055699;">Cho thuê phòng ở Cộng Hòa - Tân Bình</span><span class="price">3 triệu/tháng</span><time class="timeago"><span>11 phút trước</span></time></a></li>
                            <li class="tin-vip vipnoibat"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/phong-co-gac-xep-full-noi-that-25m2-duong-ba-trac.html"><span class="title" style="color:#E13427;">PHÒNG CÓ GÁC XẾP FULL NỘI THẤT 25M2 DƯƠNG BÁ TRẠC</span><span class="price">3.7 triệu/tháng</span><time class="timeago"><span>Hôm nay</span></time></a></li>
                            <li class="tin-vip vip1"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/can-ho-co-gac-xep-full-noi-that-25m2-nguyen-van-cu-quan-1.html"><span class="title" style="color:#E13427;">CĂN HỘ CÓ GÁC XẾP FULL NỘI THẤT 25M2 NGUYỄN VĂN CỪ QUẬN 1</span><span class="price">4 triệu/tháng</span><time class="timeago"><span>Hôm nay</span></time></a></li>
                            <li class="tin-vip vip3"><a href="https://phongtro123.com/tinh-thanh/ho-chi-minh/can-3-nam-o-ghep-phong-rong-mat-tien-cong-hoa.html"><span class="title" style="color:#3763e0;">Cần nam ở ghép phòng rộng mặt tiền Cộng Hoà</span><span class="price">1.5 triệu/tháng</span><time class="timeago"><span>Hôm nay</span></time></a></li>
                        </ul>
                    </div>
                    <div style="margin: 10px auto;">
                        <center><a target="_blank" href="https://atrungroi.com/xstc-xo-so-tu-chon-mega-645-vietlott.html"><img alt="Xem kết quả xổ số tự chọn Mega 6/45 Vietlott mới nhất" title="Xem kết quả xổ số tự chọn Mega 6/45 Vietlott mới nhất" src="https://atrungroi.com/wp-content/themes/main/images/xem-ket-qua-xo-so-mega-moi-nhat-340.gif"></a></center>
                    </div>
                    <div class="list_news_recent">
                        <div class="header">Tin tức mới</div>
                        <ul>
                            <li class="news_item news-272905 clearfix">
                                <a href="https://phongtro123.com/kinh-nghiem/kinh-nghiem-chon-dat-dau-tu-xay-phong-tro-khong-bao-gio-lo.html">
                                    <div class="news_thumb"><img class="lazy" src="https://phongtro123.com/images/default.jpg" data-src="https://static123.com/phongtro123/uploads/images/thumbs/250x150/fit/2019/09/07/dau-tu-dat-xay-phong-tro_1567824476.jpg"></div>
                                    <div class="news_info">
                                        <div class="news_item_category">Kinh nghiệm</div>
                                        <div class="news_item_title">Kinh nghiệm chọn đất đầu tư xây phòng trọ không bao giờ lỗ </div>
                                    </div>
                                </a>
                            </li>
                            <li class="news_item news-270257 clearfix">
                                <a href="https://phongtro123.com/kinh-nghiem/dang-tin-cho-thue-van-phong-o-dau-hieu-qua-nhat.html">
                                    <div class="news_thumb"><img class="lazy" src="https://phongtro123.com/images/default.jpg" data-src="https://static123.com/phongtro123/uploads/images/thumbs/250x150/fit/2019/09/07/bds123-giao-dien_1567824794.png"></div>
                                    <div class="news_info">
                                        <div class="news_item_category">Kinh nghiệm</div>
                                        <div class="news_item_title">Đăng tin cho thuê văn phòng ở đâu hiệu quả nhất? </div>
                                    </div>
                                </a>
                            </li>
                            <li class="news_item news-270237 clearfix">
                                <a href="https://phongtro123.com/kinh-nghiem/dang-tin-cho-thue-mat-bang-o-dau-nhanh-chong-va-hieu-qua-nhat.html">
                                    <div class="news_thumb"><img class="lazy" src="https://phongtro123.com/images/default.jpg" data-src="https://static123.com/phongtro123/uploads/images/thumbs/250x150/fit/2019/09/07/bds123-giao-dien_1567824838.png"></div>
                                    <div class="news_info">
                                        <div class="news_item_category">Kinh nghiệm</div>
                                        <div class="news_item_title">Đăng tin cho thuê mặt bằng ở đâu nhanh chóng và hiệu quả nhất? </div>
                                    </div>
                                </a>
                            </li>
                            <li class="news_item news-227477 clearfix">
                                <a href="https://phongtro123.com/kinh-nghiem/top-3-website-dang-tin-tim-nguoi-o-ghep-hieu-qua-nhat.html">
                                    <div class="news_thumb"><img class="lazy" src="https://phongtro123.com/images/default.jpg" data-src="https://static123.com/phongtro123/uploads/images/thumbs/250x150/fit/2019/09/07/cach-dang-tin-tim-nguoi-o-ghep_1567824883.png"></div>
                                    <div class="news_info">
                                        <div class="news_item_category">Kinh nghiệm</div>
                                        <div class="news_item_title">Top 3 website đăng tin tìm người ở ghép hiệu quả nhất </div>
                                    </div>
                                </a>
                            </li>
                            <li class="news_item news-183394 clearfix">
                                <a href="https://phongtro123.com/kinh-nghiem/chia-se-10-kinh-nghiem-khi-thue-phong-tro-cho-sinh-vien.html">
                                    <div class="news_thumb"><img class="lazy" src="https://phongtro123.com/images/default.jpg" data-src="https://static123.com/phongtro123/uploads/images/thumbs/250x150/fit/2019/09/07/kinh-nghiem-cho-sinh-vien-khi-di-thue-phong-tro_1567825006.jpg"></div>
                                    <div class="news_info">
                                        <div class="news_item_category">Kinh nghiệm</div>
                                        <div class="news_item_title">Chia sẻ 10 kinh nghiệm khi thuê phòng trọ cho Sinh Viên </div>
                                    </div>
                                </a>
                            </li>
                            <li class="news_item news-181169 clearfix">
                                <a href="https://phongtro123.com/kinh-nghiem/kinh-nghiem-thue-phong-tro-tranh-bi-lua-gat.html">
                                    <div class="news_thumb"><img class="lazy" src="https://phongtro123.com/images/default.jpg" data-src="https://static123.com/phongtro123/uploads/images/thumbs/250x150/fit/2019/09/07/canh-bao-lua-dao-khi-thue-phong_1567825188.jpg"></div>
                                    <div class="news_info">
                                        <div class="news_item_category">Kinh nghiệm</div>
                                        <div class="news_item_title">Cẩn thận các kiểu lừa đảo khi thuê phòng trọ </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
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
                                <img src="https://phongtro123.com/images/icon-credit-card.svg" width="30" height="30">
                                <div class="name">Hỗ trợ thanh toán</div>
                                <div class="value">0917686101</div>
                            </a>
                        </div>
                        <div class="item clearfix">
                            <a target="_blank" href="tel:0917686101">
                                <img src="https://phongtro123.com/images/icon-phone-green.svg" width="30" height="30">
                                <div class="name">Trợ giúp đăng tin</div>
                                <div class="value">0917686101</div>
                            </a>
                        </div>
                        <div class="item clearfix">
                            <a target="_blank" href="https://zalo.me/0917686101">
                                <img src="https://phongtro123.com/images/icon_zalo.svg" width="30" height="30" style="border: 1px solid #00a1dc; border-radius: 50%;">
                                <div class="name">Zalo</div>
                                <div class="value">0917686101</div>
                            </a>
                        </div>
                        <div class="item clearfix">
                            <a href="viber://chat?number=0917686101">
                                <img src="https://phongtro123.com/images/icon_viber.svg" width="30" height="30">
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