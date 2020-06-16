<?php

namespace App\Http\Requests\KJB;

use Illuminate\Foundation\Http\FormRequest;

class AgensiFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'modelKereta' => 'required_if:submit,hantar',
            'jabatan' => 'required_if:submit,hantar',
            'penerimaNama' => 'required_if:submit,hantar',
            'penerimaNokp' => 'required_if:submit,hantar',
            'penerimaTelPejabat' => 'required_if:submit,hantar',
            'penerimaTelBimbit' => 'required_if:submit,hantar',
            'penerimaAlamat1' => 'required_if:submit,hantar',
            'poskod' => 'required_if:submit,hantar',
            'pegawaiPerhubungan' => 'required_if:submit,hantar',
            // 'bahagian' => 'required_if:submit,hantar',
            'keterangan' => 'required_if:submit,hantar',
            'bilJawatan' => 'required_if:submit,hantar',
            'bilPemandu' => 'required_if:submit,hantar',
            //'dokumen' => 'required_if:submit,hantar',
            'justkenderaanlist' => 'required_if:submit,hantar',
            'ulasan' => 'required_if:jbtnlulus,0',
        ];
    }

    public function messages()
    {
        return [
            'required_if' => 'Ruangan ini diperlukan.',
            'justkenderaanlist.required_if' => 'Sila tambah kenderaan sedia ada',
        ];
    }
}
