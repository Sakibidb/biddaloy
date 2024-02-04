@extends('layouts.app')
@section('title', 'Class List')
@section('content')
<main class="page-content">
<h4 class="mb-0 text-uppercase">Subject List (Total: {{$getRecord -> total()}})</h4>

<hr>
<h6>Subject Search</h6>
<div class="card-body">
	<div class="bs-stepper-content">
		
		<form action="" method="get" style="display: flex;">
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="text" class="form-control" placeholder="Name" name="name" value="{{Request::get('name') }}">
				</div>
			</div>
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<select class="form-select mb-6" aria-label="Default select example" name="status">
						<option value="">Select One</option>
						<option {{ (Request::get('type')== 'Theory') ? 'selected' : ''}} value="Theory">Theory</option>
						<option {{ (Request::get('type')== 'Practical') ? 'selected' : ''}} value="Practical">Practical</option>
					</select>
				</div>
			</div>

			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="date" class="form-control" placeholder="Date" name="date" value="{{ Request::get('date') }}">
				</div>
			</div>
			
			<div class="col-12 col-lg-6">
				<button class="btn btn-success px-4" type="submit">Search<i class='bx bx-right-arrow-alt ms-2'></i></button>
				<a href="{{url('admin/subject/list') }}" class="btn btn-warning px-4">Reset<i class='bx bx-right-arrow-alt ms-2'></i></a>
			</div>
		</form>
	</div>
</div>


<hr>
@include("_message")
<div style="text-align: right;">
<a href="{{url('admin/subject/add')}}" class="btn btn-success btn-sm">Add new Subject</a>
</div>
						
						<h6>Subject List</h6>
						
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered mb-0">
									<thead>
										<tr>
											<th scope="col">Serial No</th>
											<th scope="col">Subject Name</th>
											<th scope="col">Subject Type</th>
											<th scope="col">Created By</th>
											<th scope="col">Status</th>
											<th scope="col">Created Date</th>
											<th scope="col">Action</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($getRecord as $value)
										<tr>
										<td>{{$value->id}}</td>
										<td>{{$value->name}}</td>
										
										<td>{{$value->type}}</td>
										<td>{{$value->created_by_name}}</td>
										<td>
											@if ($value->status ==0)
											Active
											@else
											Inactive
											@endif
										</td>
										<td>{{$value->created_at}}</td>
										<td>
											<a href="{{url('admin/subject/edit/'.$value->id)}}" class="btn btn-success btn-sm">Edit</a>
										</td>
										<td>
											<a href="{{url('admin/subject/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
										</td>
									</tr>
										@endforeach
									</tbody>
								</table>
								<div style="padding: 10px; float:right " >
									{!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

								</div>

							</div>
						</div>

        
     </main>
     @endsection