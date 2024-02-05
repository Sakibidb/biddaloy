@extends('layouts.app')
@section('title', 'Subject Assign')
@section('content')
<main class="page-content">
<h4 class="mb-0 text-uppercase">Subject Assign List(Total: {{$getRecord -> total()}})</h4>

<hr>
<h6>Search Assign Subject</h6>
<div class="card-body">
	<div class="bs-stepper-content">
		
		<form action="" method="get" style="display: flex;">
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="text" class="form-control" placeholder="Class Name" name="class_name" value="{{Request::get('class_name') }}">
				</div>
			</div>
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="text" class="form-control" placeholder="Subject Name" name="subject_name" value="{{Request::get('subject_name') }}">
				</div>
			</div>
			
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="date" class="form-control" placeholder="Date" name="date" value="{{ Request::get('date') }}">
				</div>
			</div>
			
			<div class="col-12 col-lg-6">
				<button class="btn btn-success px-4" type="submit">Search<i class='bx bx-right-arrow-alt ms-2'></i></button>
				<a href="{{url('admin/assign_subject/list') }}" class="btn btn-warning px-4">Reset<i class='bx bx-right-arrow-alt ms-2'></i></a>
			</div>
		</form>
	</div>
</div>


<hr>
@include("_message")
<div style="text-align: right;">
<a href="{{url('admin/assign_subject/add')}}" class="btn btn-success btn-sm">To Do New Subject Assign</a>
</div>
						
						<h6>Subject Assign List</h6>
						
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered mb-0">
									<thead>
										<tr>
											<th scope="col">Serial No</th>
											<th scope="col">Class Name</th>
											<th scope="col">Subject Name</th>
											<th scope="col">Status</th>
											<th scope="col">Created By</th>
											<th scope="col">Created Date</th>
											<th scope="col">Action</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($getRecord as $value)
										<tr>
										<td>{{$value->id}}</td>
										<td>{{$value->class_name}}</td>
										<td>{{$value->subject_name}}</td>
										<td>
											@if ($value->status ==0)
											Active
											@else
											Inactive
											@endif
										</td>
										<td>{{$value->created_by_name}}</td>
										<td>{{$value->created_at}}</td>
										<td>
											<a href="{{url('admin/assign_subject/edit/'.$value->id)}}" class="btn btn-success btn-sm">Edit</a>
										</td>
										<td>
											<a href="{{url('admin/assign_subject/edit_single/'.$value->id)}}" class="btn btn-success btn-sm">Single Edit</a>
										</td>
										<td>
											<a href="{{url('admin/assign_subject/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
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