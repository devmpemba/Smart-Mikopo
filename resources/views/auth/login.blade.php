@extends('layouts.app')

@section('content')

<style>
    .custom-form {
        background-color: #f7f7f7;
        padding: 20px;
        border-radius: 16px;
    }
</style>

<br>
  <br>
   <br> 
     <br>

<h1 class="text-center text-white">Smart Loans - LMS</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="custom-form">
                <h2 class="text-center">Login</h2>

                <br>

                <form action="{{ route('login') }}" method="POST">

                  @csrf
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control" placeholder="Email Address">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                    </div>

                    <br>
                    <div class="form-group">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="form-control" placeholder="Password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <br>

                    <div class="form-group d-flex justify-content-between align-items-center">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Login') }}
                      </button>
                      <p class="text-end m-0">Not yet Registered? <a href="{{ route('register') }}">Create Account</a></p>
                  </div>
                  

                   
                </form>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-6 text-center">
            <ul class="header-social wthree">
                <li>
                </li>
            </ul>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-6 text-center">
            <span style="color: white;">&copy; 2023 Smart Loans | LMS</span>
            <p><a target="_blank" href="#">Developed by Mpemba Technologies</a></p>
        </div>
    </div>
</div>

@endsection
