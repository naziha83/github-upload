<?php

namespace App\Http\Requests\KJB;

use Illuminate\Foundation\Http\FormRequest;

class MofFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ulasan' => 'required_if:semak,0',
            'ulasanPeraku' => 'required_if:peraku,0',
            'noKP' => 'required_if:lulus,1',
            'katalaluan' => 'required_if:lulus,1',
            'ulasanPelulus' => 'required_if:lulus,0',
        ];
    }

    public function messages()
    {
        return [
            'required_if' => 'Ruangan ini diperlukan.',
			'required' => 'Sila pilih pelulus.',
        ];
    }
}
