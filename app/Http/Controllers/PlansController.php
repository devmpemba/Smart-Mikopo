<?php

namespace App\Http\Controllers;
use App\Models\Plans;
use Illuminate\Contracts\View\View;

use Yajra\DataTables\DataTables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use App\Http\Requests\PlansRequest;

class PlansController extends Controller
{
    //

    public function index(): View
    {
        $plans = Plans::all();

        return view('admin.plans.index',compact('plans'));
    }

    public function create(): View
    {
        return view('admin.plans.create');
    }

    public function store(PlansRequest $request): RedirectResponse
    {
        Plans::create($request->validated());

        // Redirect or return a response
        return redirect()->route('admin.plans.index')->with([

            'message' => 'Successfully created',
            'alert-type' => 'success'
        ]);    
    }
}
