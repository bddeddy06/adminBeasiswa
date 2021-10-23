<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorFormRequest extends FormRequest
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
            'nim' => 'required|size:10|unique:dtrains_ppa,nim',
            'nama' => 'required',
            'jml_tanggungan' => 'required',
            'penghasilan_ortu' => 'required',
            'pekerjaan_ortu' => 'required',
            'jml_sks' => 'required|numeric|max:24',
            'ipk' => 'required|numeric|max:4|min:0',
            'sertifikat' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nim.required' => 'Field Nim harus diisi',
            'nim.size' => 'Panjang nim harus tepat 10 angka',
            'nim.unique' => 'Nim sudah ada',
            'nama.required' => 'Field Nama harus diisi',
            'jml_tanggungan.required' => 'Field Jumlah Tanggungan harus diisi',
            'penghasilan_ortu.required' => 'Field Penghasilan Orang Tua harus diisi',
            'pekerjaan_ortu.required' => 'Field Pekerjaan Orang Tua harus diisi',
            'jml_sks.required' => 'Field Jumlah SKS Orang Tua harus diisi',
            'jml_sks.numeric' => 'Field Jumlah SKS hanya diisi dengan angka',
            'jml_sks.max' => 'Field Jumlah SKS nilai maksimalnya 24',
            'ipk.required' => 'Field IPK harus diisi',
            'ipk.numeric' => 'Field IPK hanya diisi dengan angka',
            'ipk.max' => 'Field IPK nilai maksimalnya 4',
            'ipk.min' => 'Field IPK nilai minimalnya 0',
            'sertifikat.required' => 'Field Sertifikat harus diisi',
        ];
    }
}
