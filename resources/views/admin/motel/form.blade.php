<form action="" method="POST">
    @csrf
    <div class="form-group {{ $errors->has('mt_name') ? 'has-error' : '' }}">
        <label for="mt_name">Tiêu đề bài đăng <span class="text-danger">(*)</span></label>
        <input type="text" class="form-control" autocomplete="off" placeholder="Cho thuê nhà trọ ..."
               name="mt_name" value="{{ old('mt_name', $motel->mt_name ?? null) }}">
        @if ($errors->has('mt_name'))
            <span class="help-block text-error">{{ $errors->first('mt_name') }}</span>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group {{ $errors->has('mt_menu_id') ? 'has-error' : '' }}">
                <label for="mt_menu_id">Phân loại <span class="text-danger">(*)</span></label>
                <select name="mt_menu_id" class="form-control" id="">
                    <option value="">__Click chọn__</option>
                    @if (isset($menus))
                        @foreach($menus as $menu)
                            <option value="{{ $menu->id }}" {{ old('mt_menu_id',$motel->mt_menu_id ?? 0 ) == $menu->id ? "selected='selected'" : "" }}>
                                {{ $menu->mn_name }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group {{ $errors->has('mt_price') ? 'has-error' : '' }}">
                <label for="mt_price">Giá <span class="text-danger">(*)</span></label>
                <input type="number" class="form-control" autocomplete="off" placeholder="2500000"
                       name="mt_price" value="{{ old('mt_price', $motel->mt_price ?? 0) }}">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group {{ $errors->has('mt_acreage') ? 'has-error' : '' }}">
                <label for="mt_acreage">Diện tích (m <sup>2</sup>) <span class="text-danger">(*)</span></label>
                <input type="number" class="form-control" autocomplete="off" placeholder="20"
                       name="mt_acreage" value="{{ old('mt_acreage', $motel->mt_acreage ?? 0) }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group {{ $errors->has('mt_menu_id') ? 'has-error' : '' }}">
                <label for="mt_menu_id">Tỉnh / TP <span class="text-danger">(*)</span></label>
                <select name="mt_city_id" class="form-control js-select2 js-location" data-type="1">
                    <option value="">__Click chọn__</option>
                    @if (isset($cities))
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}" {{ old('mt_city_id') == $city->id ? "selected='selected'" : "" }}>
                                {{ $city->loc_name }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group {{ $errors->has('mt_price') ? 'has-error' : '' }}">
                <label for="mt_price">Quận / Huyện <span class="text-danger">(*)</span></label>
                <select name="mt_district_id" class="form-control js-select2 js-location" id="" data-type="2">
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group {{ $errors->has('mt_acreage') ? 'has-error' : '' }}">
                <label for="mt_acreage">Phường / Xã  <span class="text-danger">(*)</span></label>
                <select name="mt_street_id" class="form-control js-select2 js-location" id="" data-type="3">

                </select>
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('mt_address') ? 'has-error' : '' }}">
        <label for="mt_name">Địa chỉ <span class="text-danger">(*)</span></label>
        <input type="text" class="form-control" autocomplete="off" placeholder="Quỳnh Ngọc - Quỳnh Lưu - Nghệ An ..."
               name="mt_address" value="{{ old('mt_address', $motel->mt_address ?? null) }}">
    </div>
    <div class="form-group {{ $errors->has('mt_description') ? 'has-error' : '' }}">
        <label for="mt_name">Mô tả <span class="text-danger">(*)</span></label>
        <textarea name="mt_description" class="form-control" cols="30" rows="5" autocomplete="off"
                  placeholder="Mô tả  ...">{{ old('mt_description', $motel->mt_description ?? "") }}</textarea>
    </div>
    <div class="form-group">
        <label for="mt_name">Hình ảnh <span class="text-danger">(*)</span></label>
        <div class="file-loading">
            <input id="album" type="file" class="file" name="album[]" multiple
                   data-preview-file-type="any" data-upload-url="#">
        </div>
    </div>
    <div class="form-group {{ $errors->has('mt_content') ? 'has-error' : '' }}">
        <label for="mt_name">Nội dung <span class="text-danger">(*)</span></label>
        <textarea name="mt_content" class="form-control" cols="30" rows="5"
                  autocomplete="off" placeholder="Nội dung  ...">{{ old('mt_content', $motel->mt_name ?? "") }}</textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
@section('script')
    <link rel="stylesheet" href="{{ asset('adminassets/assets/js/fileinput/fileinput.css') }}">
    <script src="{{ asset('adminassets/assets/js/fileinput/fileinput.js') }}"></script>
    <script src="{{ asset('adminassets/assets/js/fileinput/vi.js') }}"></script>
    <script>
        $(function () {
            $(".js-select2").select2({
				placeholder: "Click chọn location",
                cache : true
            });

			$('#album').fileinput({
				theme: 'fa',
				language: 'vi',
				showUpload: false,
				allowedFileExtensions: ['jpg', 'png', 'gif']
			});

            $(".js-location").change(function () {
                let $this = $(this);
                let id = $this.val();
                let level = $this.attr('data-type');

				$.ajax({
					type: "GET",
					url: '{{ route("ajax_admin.get.location.by_parent") }}',
                    data : { id : id},
                    dataType : 'json',
					success: function( result ) {
						level = parseInt(level) + 1;
						console.log(level);
						let $location = $(".js-location[data-type='"+level+"']");
						if ($location)
                        {
							$location.html('');
							let html = '';
                        	$.each(result.data, function (index, value) {
                               html += "<option value='"+value.id+"'>"+value.loc_name+"</option>"
							})
                           $location.append(html);
                        }
					}
				});
			})
		})
    </script>
@stop