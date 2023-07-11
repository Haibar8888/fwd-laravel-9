<?php

namespace App\Http\Requests\Prioritas;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Operational\Doctor;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UpdatePrioritasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('doctor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
         return [
            'title' => [
                'required', 'string', 'max:255',
            ],
            // add validation for role this here
        ];
    }
}
