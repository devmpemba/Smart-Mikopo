@extends('layouts.admin')

@section('content')

   <!-- partial -->
   <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Available Loan Types </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <button class="btn btn-primary" onclick="redirectToCreatePage()">
                New Type
            </button>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              {{-- <h4 class="card-title">Basic Table</h4> --}}
              </p>
              <table id="data-table" class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($loans as $loan)
                        <tr>
                            <td>{{ $loan->id }}</td>
                            <td>{{ $loan->name }}</td>
                            <td>{{ $loan->description }}</td>
                            <td>{{ $loan->created_at }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">
                                    <i class="mdi mdi-eye"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <form action="#" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this group?')">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            </div>
          </div>
        </div>

      </div>
    </div>
   
    
@endsection


<script>
    $(document).ready(function () {
        $('#data-table').DataTable();
    });

    function redirectToCreatePage() {
        window.location.href = "{{ route('admin.loan-types.create') }}";
    }

</script>
