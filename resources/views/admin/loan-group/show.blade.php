@extends('layouts.admin')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Group Informations </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <button class="btn btn-primary" onclick="redirectToCreatePage()">
                Go Back
                </button>
          </ol>
        </nav>
      </div>

   
<div class="main-panel">
    <div class="content-wrapper">

        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">BASIC INFORMATIONS</h4>
              <div class="row">
                <div class="row">
                    <div class="col-md-10">
                        <address>
                            @if ($group)
                                <p class="font-weight-bold">Full Name</p>
                                <p class="mb-2">{{ $group->name }}</p>
                                
                                <p class="font-weight-bold">Capacity (Number of People)</p>
                                <p class="mb-2">{{ $group->capacity }}</p>
                            @endif
                        </address>


                        <h4 class="card-title">GROUP MEMBERS</h4>


                    </div>


                    <div class="col-md-6">
                        <address>
                                <p class="font-weight-bold">

                                    <?php

                                    $group_id = $group->id;

                                    // Retrieve the customer based on the customer_id from the transaction
                                    $members = \App\Models\Members::where('groups_id', $group_id)->get();
                                    
                                    // Check if the customer exists
                                    if ($members->count() > 0) {
                                    foreach ($members as $member) {
                                        echo  $member->name . '<br>';
                                    }
                                } else {

                                    echo 'No Members Found!';
                                }
                                    ?>

                                </p>
                                <p class="mb-2"></p>
                                
                        </address>
                    </div>
                </div>
               
                </div>
              </div>
            </div>
            <div class="card-body">
                <p>
                {{-- <h4 class="card-title">MEMBERS INFORMATIONS</h4> --}}
            </p>
            
            
            </div>

          </div>
        </div>

     
      </div>
    </div>
    <!-- content-wrapper ends -->
  
 
    
@endsection

<script>
      
    
    function redirectToCreatePage() {
        window.location.href = "{{ route('admin.loan-group.index') }}";
    }

</script>