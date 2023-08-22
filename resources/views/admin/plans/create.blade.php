@extends('layouts.admin')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create Loan Plan</h4>

        <form class="forms-sample" method="POST" action="{{ route('admin.plans.store')}}">
            @csrf
           

            <div class="form-group">
                <label for="months">Select Number of Months</label>
                <select class="form-control" id="months" name="months">
                    <option value="1">One Month</option>
                    <option value="3">Three Months</option>
                    <option value="6">Six Months</option>
                    <option value="12">Twelve Months</option>

                    <!-- Add more options as needed -->
                </select>
            </div>
            
            <div class="form-group">
                <label for="interest_rate">Interest Rate</label>
                <input type="interest_rate" class="form-control" id="interest_rate" name="interest_rate">
                <!-- Add the "name" attribute above -->
            </div>

            <div class="form-group">
                <label for="penalty_rate">Penalty Rate</label>
                <input type="penalty_rate" class="form-control" id="penalty_rate" name="penalty_rate">
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