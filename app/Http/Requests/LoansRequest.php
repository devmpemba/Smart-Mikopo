<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoansRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Adjust according to your authorization logic
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'f_name' => 'required',
            'm_name' => 'required',
            'l_name' => 'required',

            'email' => 'required|unique:users,email',
            'address' => 'required',
            'phone' => 'required|numeric',
            'id_type' => 'required',
            'id_number' => 'required',
            'employer' => 'nullable',
            'occupation' => 'nullable',
            'employer_address' => 'nullable',
            'monthly_salary' => 'nullable|numeric',

            'c_fname' => 'required',
            'c_mname' => 'required',
            'c_lname' => 'required',

            'collateral_phone' => 'required|numeric',
            'collateral_email' => 'required|email',
            'collateral_address' => 'required',
            'collateral_id_type' => 'required',
            'collateral_id_number' => 'required',
            'loan_amount' => 'required|numeric',
            'loan_type' => 'required',
            'interest' => 'numeric', // You might want to adjust this according to your business logic
            'status' => 'required|in:pending,approved,rejected',
            'loan_emi' => 'numeric', // Adjust according to your business logic
        ];
    }
}
