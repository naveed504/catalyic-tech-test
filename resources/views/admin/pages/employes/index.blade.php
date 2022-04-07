@extends('admin.master')
@section('content')
<div class="page-header">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="title">
				<h4>Employees</h4>
			</div>
			<nav aria-label="breadcrumb" role="navigation">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Employees</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-6 col-sm-12 text-right">
			<a class="btn btn-primary " href="{{route('employees.create')}}" role="button">
				Create New Employee
			</a>
		</div>
	</div>
</div>
<div class="card-box mb-30">
	<div class="pd-20">
		<h4 class="text-blue h4"></h4>
	</div>
	<div class="pb-20">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th class="table-plus datatable-nosort"># No</th>
					<th>Email</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Phone</th>
					<th>Company</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@forelse($allEmployees as $employee)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$employee->email ?? ''}}</td>
					<td>{{$employee->first_name ?? ''}}</td>
					<td>{{$employee->first_name ?? ''}}</td>
					<td>{{$employee->phone ?? ''}}</td>
					<td>{{$employee->companies->name ?? ''}}</td>
					<td>
						<a href="{{route('employees.edit',$employee->id)}}"><i class="fas fa-edit"></i></a>
						@if($employee->usertype !=1)
						<a href="javascript:void(0);" class="text-decoration-none" onclick="deleteRecord('{{$employee->id}}','/admin/employees/')"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
						@endif
					</td>
				</tr>
				@empty
				<tr>
					<td></td>
					<td></td>
					<td>No Record Found</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
	<div style="float:right">
		{!! $allEmployees->links() !!}
	</div>
</div>

@endsection