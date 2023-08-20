<?php

namespace App\Http\Controllers\Admin;

use App\Models\Members;
use App\Models\Groups;


use Illuminate\Contracts\View\View;

//use Yajra\DataTables\DataTables;
use DataTables;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use App\Http\Requests\MembersRequest;



class MembersController extends Controller
{
    //

    public function index(): View
    {
        $members = Members::all();

        return view('admin.members.index',compact('members'));
    }

    public function create(): View
    {
        $groups = Groups::all();

        return view('admin.members.create', compact('groups'));
    }

    public function show(Members $member): View
    {
        return view('admin.members.show', compact('member'));
    }

    public function store(MembersRequest $request): RedirectResponse
    {
        Members::create($request->validated());

        // Redirect or return a response
        return redirect()->route('admin.members.index')->with([
            'message' => 'Successfully created',
            'alert-type' => 'success'
        ]);    }


}
