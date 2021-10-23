<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class infoBeasiswaValidation extends FormRequest
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
            'nama_beasiswa'=>'required',
            'tgl_mulai'=>'required',
            'tgl_akhir'=>'required',
            'status'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'nama_beasiswa.required' => 'Field nama harus di isi',
            'tgl_mulai.required' => 'Field Tanggal Mulai harus di isi',
            'tgl_akhir.required' => 'Field Tanggal Akhir harus di isi',
            'status.required' => 'Field Status harus di isi',
        ];
    }
}
