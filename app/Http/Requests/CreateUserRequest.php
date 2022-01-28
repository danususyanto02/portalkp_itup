<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nomor_induk' => 'required|unique:users',
        ];
    }
    public function messages()
    {
        return[
            'nomor_induk.unique'=>'User Dengan Nomor Induk ini Sudah Terdaftar. <a href="'.route('super_admin.user.create').'?nomor_induk'.$this->nomor_induk.'"></a>'
        ];
    }
}
