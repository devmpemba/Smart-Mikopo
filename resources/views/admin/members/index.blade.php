@extends('layouts.admin')

@section('content')

   <!-- partial -->
   <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">All  Members </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <button class="btn btn-primary" onclick="redirectToCreatePage()">
            Create New
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
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Group</th>
                        {{-- <th>Identity Type</th>
                        <th>Identity Number</th>
                        <th>Registered On</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
                            <td>+255{{ $member->phone }}</td>
                            <td>{{ $member->address }}</td>
                            <td>{{ $member->group->name }}</td>
                            {{-- <td>{{ $member->id_type }}</td>
                            <td>{{ $member->id_number }}</td>
                            <td>{{ $member->created_at }}</td> --}}
                            <td>
                              <a href="{{ route('admin.members.show', ['member' => encrypt($member->id)]) }}" class="btn btn-sm btn-info">
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

            {{-- <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> --}}
            <script>
                $(document).ready(function() {
                    $('#data-table').DataTable();
                });
            </script>
            
            </div>
          </div>
        </div>

      </div>
    </div>

   
   
    
@endsection

<script>
      
    
    function redirectToCreatePage() {
        window.location.href = "{{ route('admin.members.create') }}";
    }

</script>



