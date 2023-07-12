<?php

namespace App\Http\Requests\Pasien;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasienRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'nama' => [
                'required', 'string', 'max:255',
            ],

            'usia' => [
                'required','integer',
            ],
            
            'jk' => [
                'required','string', 'max:255',
            ],
        ];
    }
}
