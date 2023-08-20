@extends('layouts.admin')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create Loan Type</h4>

        <form class="forms-sample" method="POST" action="{{ route('admin.loan-types.store')}}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                <!-- Add the "name" attribute above -->
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description">
                <!-- Add the "name" attribute above -->
            </div>
            
            <button type="submit" class="btn btn-primary me-2">{{ __('Submit') }}</button>
            <button class="btn btn-light">{{ __('Cancel') }}</button>
        </form>
        
      </div>
    </div>
  </div>

    </div>
    
@endsection