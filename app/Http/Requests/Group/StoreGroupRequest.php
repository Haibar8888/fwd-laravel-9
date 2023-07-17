<?php

namespace App\Http\Requests\Pasien;

use Illuminate\Foundation\Http\FormRequest;

class StorePasienRequest extends FormRequest
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
            'groupname' => [
                'required', 'string', 'max:255',
            ],
            'attributes' => ['required', 'string', 'max:255'],
            'op' => ['required', 'string', 'max:255'],
        ];
    }
}
