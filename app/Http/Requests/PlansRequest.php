<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlansRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'months' => 'required|integer',
            'interest_rate' => 'required|valid_interest_rate',
            'penalty_rate' => 'required|valid_penalty_rate',
        ];
    }
}
