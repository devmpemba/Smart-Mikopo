<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_name', 'm_name', 'l_name',
        'email', 'address', 'phone', 'id_type', 'id_number',
        'employer', 'occupation', 'employer_address', 'monthly_salary',
        'c_fname', 'c_mname', 'c_lname',
        'collateral_phone', 'collateral_email', 'collateral_address', 'collateral_id_type', 'collateral_id_number',
        'loan_type', 'loan_amount', 'interest', 'status', 'loan_emi',
        // Add more fields as needed
    ];
}
