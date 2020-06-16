<?php

namespace App\Http\Requests\KJB;

use Illuminate\Foundation\Http\FormRequest;

class KonsesiFormRequest extends FormRequest
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
            'akuan_hantar' => 'required_if:submit,hantar',
        ];
    }
	
	public function messages()
    {
        return [
            'required_if' => 'Ruangan ini diperlukan.',
        ];
    }
}
