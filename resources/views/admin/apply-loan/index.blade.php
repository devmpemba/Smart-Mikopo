@extends('layouts.admin')

@section('content')

<div class="pcoded-main-container">
	<div class="pcoded-wrapper">
		<div class="pcoded-content">
			<div class="pcoded-inner-content">

<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<large class="card-title">
					<b>All Loan Applications</b>
					<button class="btn btn-primary btn-sm btn-block col-md-2 float-right" type="button" onclick="redirectToCreatePage()" onclick="redirectToCreatePage()"><i class="fa fa-plus"></i>Apply Loan</button>
				</large>
				
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="loan-list">
					<colgroup>
						<col width="10%">
						<col width="25%">
						<col width="25%">
						<col width="20%">
						<col width="10%">
						<col width="10%">
					</colgroup>
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center">Borrower</th>
							<th class="text-center">Loan Details</th>

							<th class="text-center">Next Payment Details</th>
							<th class="text-center">Status</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>

                        
					</tbody>
				</table>
			</div>
		</div>
	</div>
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
        window.location.href = "{{ route('admin.apply-loan.create') }}";
    }

</script>