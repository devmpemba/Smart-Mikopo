<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;


use Illuminate\Http\Request;
use App\Http\Requests\LoansRequest;


class LoansController extends Controller
{
    //

    public function index():View
    {
        
        return view('admin.apply-loan.index');
    }

    public function create():View
    {
        return view('admin.apply-loan.create');
    }

    public function store(LoansRequest $request): RedirectResponse
    {

         // Concatenate first name, middle name, and last name to create full name
         $fullName = $request->input('f_name') . ' ' . $request->input('m_name') . ' ' . $request->input('l_name');

         // Concatenate collateral first name, middle name, and last name to create collateral name
         $collateralName = $request->input('c_fname') . ' ' . $request->input('c_mname') . ' ' . $request->input('c_lname');
 
         // Add full name and collateral name to the request data
         $requestData = $request->validated();
         $requestData['full_name'] = $fullName;
         $requestData['collateral_name'] = $collateralName;
 
         // Validate and store data in the database
         Loans::create($requestData);
 
         // Redirect or return a response
         return redirect()->route('admin.apply-loan.index')->with([
             'message' => 'Loan successfully created',
             'alert-type' => 'success',
         ]);

        
       
    
    }
}
