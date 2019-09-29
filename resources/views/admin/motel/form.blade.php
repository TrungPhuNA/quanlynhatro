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
    <div class="form-group {{ $errors->has('mt_address') ? 'has-error' : '' }}">
        <label for="mt_name">Địa chỉ <span class="text-danger">(*)</span></label>
        <input type="text" class="form-control" autocomplete="off" placeholder="Quỳnh Ngọc - Quỳnh Lưu - Nghệ An ..."
               name="mt_address" value="{{ old('mt_address', $motel->mt_address ?? null) }}">
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
    <div class="form-group {{ $errors->has('mt_description') ? 'has-error' : '' }}">
        <label for="mt_name">Mô tả <span class="text-danger">(*)</span></label>
        <textarea name="mt_description" class="form-control" cols="30" rows="5" autocomplete="off"
                  placeholder="Mô tả  ...">{{ old('mt_description', $motel->mt_description ?? "") }}</textarea>
    </div>
    <div class="form-group {{ $errors->has('mt_content') ? 'has-error' : '' }}">
        <label for="mt_name">Nội dung <span class="text-danger">(*)</span></label>
        <textarea name="mt_content" class="form-control" cols="30" rows="5"
                  autocomplete="off" placeholder="Nội dung  ...">{{ old('mt_content', $motel->mt_name ?? "") }}</textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>