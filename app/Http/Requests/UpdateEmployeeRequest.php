<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:100'],
            'last_name'  => ['required', 'string', 'max:100'],
            'email' => [
                'required',
                'email',
                Rule::unique('employees')->ignore($this->employee),
            ],
            'position'   => ['required', 'string', 'max:100'],
            'salary'     => ['required', 'numeric', 'min:0'],
        ];
    }
}
