<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhanVienThemMoiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'ho_va_ten' =>  'required',
            'email' =>  'required',
            'password' =>  'required|min:6|max:12',
            'ngay_sinh' =>  'required',
            'so_dien_thoai' => 'required',
            'dia_chi' =>  'required',
            'luong_co_ban' =>  'required',
            'chuc_vu' =>  'required',
            'phong_ban' =>  'required',
            'tinh_trang' =>  'required',
        ];
    }
    public function messages()
    {
        return [
            'email.required'    => 'Email không được để trống.',
            'ho_va_ten.required'    => 'Họ Tên không được để trống.',
            'luong_co_ban.required'    => 'lương không được để trống.',
            'chuc_vu.required'    => 'chức vụ không được để trống.',
            'phong_ban.required'    => 'phòng ban không được để trống.',
            'so_dien_thoai.required' => 'so dien thoai không được để trống',
            'dia_chi.required' => 'địa chỉ không được để trống',
            'email.email'       => 'Email không đúng định dạng.',
            'password.required' => 'Mật khẩu không được để trống.',
            'password.min'      => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.max'      => 'Mật khẩu không được quá 12 ký tự.',
        ];
    }
}
