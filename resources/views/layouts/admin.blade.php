<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMART MIKOPO - Loans Management System</title>
 
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Smart Mikopo is Loan Management System that helps small microfinance to manage loans disbursment and payments" />
    <meta name="keywords" content="loans, smart loans, smart mikopo, mikopo"/>
    <meta name="author" content="CodedThemes"/>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/2.3.1/css/searchPanes.dataTables.min.css">

    <!-- Favicon icon -->
    <link rel="icon" href=" {{ asset('admin/images/favicon.ico') }}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('admin/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

</head>


<body>
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
      <div class="loader-track">
          <div class="loader-fill"></div>
      </div>
  </div>

  @include('layouts.nav')

  @include('layouts.header')

  @yield('content')

  <script src="{{ asset('admin/js/vendor-all.min.js') }}"></script>
	<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/pcoded.min.js') }}"></script>

     <!-- Include required JS -->
     {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> --}}
 

</body>
</html>