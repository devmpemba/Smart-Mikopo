@extends('layouts.admin')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Members Informations </h3>
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
                    <div class="col-md-6">
                        <address>
                            @if ($member)
                                <p class="font-weight-bold">Full Name</p>
                                <p class="mb-2">{{ $member->name }}</p>
                                
                                <p class="font-weight-bold">Physical Address</p>
                                <p class="mb-2">{{ $member->address }}</p>
                            @endif
                        </address>
                    </div>
                    <div class="col-md-6">
                        <address>
                            @if ($member)
                                <p class="font-weight-bold">Identity Type</p>
                                <p class="mb-2">{{ $member->id_type }}</p>
                                
                                <p class="font-weight-bold">Identity Number</p>
                                <p class="mb-2">{{ $member->id_number }}</p>
                            @endif
                        </address>
                    </div>
                </div>
                
                @if('member')
                <div class="col-md-12">
                  <address>
                    <p class="font-weight-bold">Mobile Number </p>
                    <p class="mb-2"> +255{{ $member->phone}}</p>
                    
                  </address>
                  @endif
                </div>
              </div>
            </div>
            <div class="card-body">
              <h4 class="card-title">LOAN INFORMATIONS</h4>
              </p>
              @if ($member)
              <p class="font-weight-bold">Loan Group</p>

              <p class="mb-2"> {{ $member->group->name}}</p>

              <p class="font-weight-bold">Group Capacity: </p>

              <p class="mb-2"> {{ $member->group->capacity}} Members Only</p>


              @endif
            </div>

            <div class="card-body">
                <h4 class="card-title">ATTACHMENTS</h4>
                </p>
                @if ($member)
                <a class="font-weight-bold" href="#">Download Attachment</a>
  
                {{-- <p class="mb-2"> {{ $member->group->name}}</p> --}}
  
                {{-- <p class="font-weight-bold">Group Capacity: </p>
  
                <p class="mb-2"> {{ $member->group->capacity}} Members Only</p> --}}
  
  
                @endif
              </div>
          </div>
        </div>

     
      </div>
    </div>
    <!-- content-wrapper ends -->
  
 
    
@endsection

<script>
      
    
    function redirectToCreatePage() {
        window.location.href = "{{ route('admin.members.index') }}";
    }

</script>