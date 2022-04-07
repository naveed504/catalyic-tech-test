@extends('admin.master')
@section('content')
<div class="page-header">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="title">
				<h4>Companies</h4>
			</div>
			<nav aria-label="breadcrumb" role="navigation">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Companies</li>
				</ol>
			</nav>
		</div>
		<div class="col-md-6 col-sm-12 text-right">
			<a class="btn btn-primary " href="{{route('companies.create')}}" role="button">
				Create New Company
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
					<th>Company Name</th>
					<th>Company Logo </th>
					<th>Company Website</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@forelse($allCompanies as $company)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$company->name ?? ''}} </td>
					
					<td>
						@if(empty($company->logo))
						<img src="{{asset('storage/admin/companies/download.png')}}" style="height: 70px; width:70px;">
						@else
						<img src=" {{asset('storage/admin/companies/'.$company->logo)}}" style="height:70px;width:70px">
						@endif
					</td>
					<td>{{$company->website ?? ''}}</td>
					<td>
						<a href="{{route('companies.edit',$company->id)}}"><i class="fas fa-edit"></i></a>
						<a href="javascript:void(0);" class="text-decoration-none" onclick="deleteRecord('{{$company->id}}','/admin/companies/')"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
					</td>
				</tr>
				@empty
				<tr>
					<td></td>
					<td></td>
					<td>No Record Found</td>
					<td></td>
					<td></td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
	<div style="float:right">
		{!! $allCompanies->links() !!}
	</div>
</div>
@endsection