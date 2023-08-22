<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;


use Illuminate\Http\Request;

class LoansController extends Controller
{
    //

    public function index():View
    {
        
        return view('admin.apply-loan.index');
    }
}
