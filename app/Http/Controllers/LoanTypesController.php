<?php

namespace App\Http\Controllers;
use App\Models\LoanTypes;
use Illuminate\Contracts\View\View;

use Yajra\DataTables\DataTables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use App\Http\Requests\LoanTypesRequest;

class LoanTypesController extends Controller
{
    //
    public function index(): View
    {
        $loans = LoanTypes::all();

        // return response()->json([
        //     'status' => 200,
        //     'loans' =>  $loans
        // ]);

       // return 'Loan Types API';

       return view('admin.loan-types.index',compact('loans'));
    }

    public function create(): View
    {
        return view('admin.loan-types.create');
    }

    public function store(LoanTypesRequest $request): RedirectResponse
    {
        LoanTypes::create($request->validated());

        // Redirect or return a response
        return redirect()->route('admin.loan-types.index')->with([
            'message' => 'Successfully created',
            'alert-type' => 'success'
        ]);    }
}
