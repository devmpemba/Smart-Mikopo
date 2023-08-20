@extends('layouts.admin')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Register Member</h4>

        <form class="forms-sample" method="POST" action="{{ route('admin.members.store')}}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                <!-- Add the "name" attribute above -->
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone">
                <!-- Add the "name" attribute above -->
            </div>

            <div class="form-group">
                <label for="address">Physical Address</label>
                <input type="text" class="form-control" id="address" name="address">
                <!-- Add the "name" attribute above -->
            </div>

            <div class="form-group">
                <label for="id_type">Select ID Type</label>
                <select class="form-control" id="id_type" name="id_type">
                    <option value="National Identity Card (NIDA)">National Identity Card (NIDA)</option>
                    <option value="Driving License">Driving License</option>
                    <option value="Voters ID">Voters ID</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            
            <div class="form-group">
                <label for="id_number">Identity Number</label>
                <input type="id_number" class="form-control" id="id_number" name="id_number">
                <!-- Add the "name" attribute above -->
            </div>

            <div class="form-group">
                <label for="groups_id">Select Group</label>
                <select class="form-control" id="groups_id" name="groups_id">
                    @foreach ($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary me-2">{{ __('Submit') }}</button>
            <button class="btn btn-light">{{ __('Cancel') }}</button>
        </form>
        
      </div>
    </div>
  </div>

    </div>
    
@endsection