<?php

namespace App\Http\Controllers\Admin;
use App\Models\Groups;
use Illuminate\Contracts\View\View;

use Yajra\DataTables\DataTables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use App\Http\Requests\LoanGroupsRequest;

class LoanGroupsController extends Controller
{
    //

    public function index(): View
    {
        $groups = Groups::all();

        return view('admin.loan-group.index',compact('groups'));
    }

    public function create(): View
    {
        return view('admin.loan-group.create');
    }

    public function show(Groups $group): View
    {
        
        return view('admin.loan-group.show', compact('group'));
    }

    public function store(LoanGroupsRequest $request): RedirectResponse
    {
        Groups::create($request->validated());

        // Redirect or return a response
        return redirect()->route('admin.loan-group.index')->with([
            'message' => 'Successfully created',
            'alert-type' => 'success'
        ]);    }
}
