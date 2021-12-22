<?php

namespace App\Http\Requests\Dashboard\Profile;

use Illuminate\Foundation\Http\FormRequest;

use app\Models\DetailMahasiswa;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UpdateDetailMahasiswaRequest extends FormRequest
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
        return  [
            'nomor_induk' => ['nullable', 'string', 'max:255',],
            'role' => ['nullable', 'string', 'max:100'],
        ];
    }
}
