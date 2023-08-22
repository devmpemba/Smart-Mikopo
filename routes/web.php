<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');

//loan groups
Route::get('/home/loan-groups', [App\Http\Controllers\Admin\LoanGroupsController::class, 'index'])->name('admin.loan-group.index');
Route::get('/admin/loan-groups/create', [App\Http\Controllers\Admin\LoanGroupsController::class, 'create'])->name('admin.loan-groups.create');
Route::post('/admin/loan-groups/store', [App\Http\Controllers\Admin\LoanGroupsController::class, 'store'])->name('admin.loan-groups.store');
Route::get('/admin/loan-groups/show/{group}', [App\Http\Controllers\Admin\LoanGroupsController::class, 'show'])->name('admin.loan-group.show');

//loan plans
Route::get('/home/plans', [App\Http\Controllers\PlansController::class, 'index'])->name('admin.plans.index');
Route::get('/admin/plans/create', [App\Http\Controllers\PlansController::class, 'create'])->name('admin.plans.create');
Route::post('/admin/plans/store', [App\Http\Controllers\PlansController::class, 'store'])->name('admin.plans.store');
Route::get('/admin/plans/show/{plans}', [App\Http\Controllers\PlansController::class, 'show'])->name('admin.plans.show');



//members 
Route::get('/home/members', [App\Http\Controllers\Admin\MembersController::class, 'index'])->name('admin.members.index');
Route::get('/admin/members/create', [App\Http\Controllers\Admin\MembersController::class, 'create'])->name('admin.members.create');
Route::post('/admin/members/store', [App\Http\Controllers\Admin\MembersController::class, 'store'])->name('admin.members.store');
Route::get('/admin/members/show/{member}', [App\Http\Controllers\Admin\MembersController::class, 'show'])->name('admin.members.show');


//loan types
Route::get('/home/loan-types', [App\Http\Controllers\LoanTypesController::class, 'index'])->name('admin.loan-types.index');
Route::get('/admin/loan-types/create', [App\Http\Controllers\LoanTypesController::class, 'create'])->name('admin.loan-types.create');
Route::post('/admin/loan-types/store', [App\Http\Controllers\LoanTypesController::class, 'store'])->name('admin.loan-types.store');


//apply loan
Route::get('/home/apply-loan', [App\Http\Controllers\LoansController::class, 'index'])->name('admin.apply-loan.index');
//Route::get('/admin/loans/create', [App\Http\Controllers\LoansController::class, 'create'])->name('admin.loans.create');
//Route::post('/admin/loans/store', [App\Http\Controllers\LoansController::class, 'store'])->name('admin.loans.store');



}); 


