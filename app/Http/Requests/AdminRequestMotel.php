<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestMotel extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'mt_name'        => 'required|unique:motels,mt_name,id' . $this->id,
            'mt_address'     => 'required',
            'mt_price'       => 'required',
            'mt_acreage'     => 'required',
            'mt_description' => 'required',
            'mt_content'     => 'required',
        ];
    }

    public function messages()
    {
        return [
            'mt_name.required'        => 'Dữ liệu không được để trống',
            'unique.required'         => 'Dữ liệu đã tồn tại',
            'mt_address.required'     => 'Dữ liệu không được để trống',
            'mt_price.required'       => 'Dữ liệu không được để trống',
            'mt_acreage.required'     => 'Dữ liệu không được để trống',
            'mt_description.required' => 'Dữ liệu không được để trống',
            'mt_content.required'     => 'Dữ liệu không được để trống'
        ];
    }
}
