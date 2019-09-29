<div id="searchbar">
    <div class="container">
        <form role="search" method="POST" id="searchformTop" class="searchform js-form-submit-data" data-action-url="https://phongtro123.com/api/search">
            <div class="search_field">
                <div class="clearfix">
                    <div class="search_field_item search_field_item_loaitin">
                        <label class="search_field_item_label">Loại tin</label>
                        <select id="search_room_type" class="form-control js_select2_room_type" name="type">
                            <option value="1" >Phòng trọ, nhà trọ</option>
                            <option value="2" >Nhà thuê nguyên căn</option>
                            <option value="3" >Cho thuê căn hộ</option>
                            <option value="4" >Tìm người ở ghép</option>
                            <option value="5" >Cho thuê mặt bằng</option>
                        </select>
                    </div>
                    <div class="search_field_item search_field_item_tinhthanh">
                        <label class="search_field_item_label">Tỉnh thành</label>
                        <select id="search_city" class="form-control tinh-tp js_select2_tinhthanh js-select-tinhthanhpho" name="tinh">
                            <option value="0">Tất cả</option>
                            <option value="90" >Hồ Chí Minh</option>
                        </select>
                    </div>
                    <div class="search_field_item search_field_item_quanhuyen">
                        <label class="search_field_item_label">Quận huyện</label>
                        <select class="form-control js_select2_quanhuyen js-select-quanhuyen" name="quan" data-current="">
                            <option value="0">Tất cả</option>
                        </select>
                    </div>
                    <div class="search_field_item search_field_item_duongpho">
                        <label class="search_field_item_label">Đường phố</label>
                        <select name="duong" class="form-control js_select2_duongpho js-select-duong" data-current="">
                            <option value="0">Tất cả</option>
                        </select>
                    </div>
                    <div class="search_field_item search_field_item_mucgia">
                        <label class="search_field_item_label">Khoảng giá</label>
                        <select class="form-control price js_select2_price" name="gia">
                            <option value="0" selected>Chọn mức giá</option>
                            <option value="1" >Dưới 1 triệu</option>
                        </select>
                    </div>
                    <div class="search_field_item search_field_item_dientich">
                        <label class="search_field_item_label">Diện tích</label>
                        <select id="search_dientich" name="dt" class="form-control js_select2_acreage">
                            <option value="0" selected>Chọn diện tích</option>
                            <option value="1" >Dưới 20 m2</option>
                        </select>
                    </div>
                    <div class="search_field_item search_field_item_submit"><label class="search_field_item_label">&nbsp;</label><button type="submit" class="btn btn-default btn_search_box"> Lọc tin </button></div>
                </div>
            </div>
        </form>
    </div>
</div>