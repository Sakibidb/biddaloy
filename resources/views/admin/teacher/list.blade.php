@extends('layouts.app')
@section('title', 'student list')
@section('content')
<main class="page-content">
<h4 class="mb-0 text-uppercase">Student List (Total: {{$getRecord -> total()}})</h4>

<hr>
<h6>Teacher Search</h6>
<div class="container-fluid">
<div class="card-body">
	<div class="bs-stepper-content">
		
		<form action="" method="get" style="display: flex">
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="text" class="form-control" placeholder="Name" name="name" value="{{Request::get('name') }}">
				</div>
			</div>
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="text" class="form-control" placeholder="Email" name="email" value="{{Request::get('email') }}">
				</div>
			</div>
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="text" class="form-control" placeholder="Phone Number" name="mobile_number" value="{{Request::get('mobile_number') }}">
				</div>
			</div>
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="text" class="form-control" placeholder="Marital Status" name="marital_status" value="{{Request::get('marital_status') }}">
				</div>
			</div>
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="text" class="form-control" placeholder="Religion" name="religion" value="{{Request::get('religion') }}">
				</div>
			</div>
			
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="date" class="form-control" placeholder="Created Date" name="created_at" value="{{ Request::get('created_at') }}">
				</div>
			</div>
			
			<div class="col-12 col-lg-6">
				<button class="btn btn-success px-4" type="submit">Search<i class='bx bx-right-arrow-alt ms-2'></i></button>
				<a href="{{url('admin/teacher/list') }}" class="btn btn-warning px-4">Reset<i class='bx bx-right-arrow-alt ms-2'></i></a>
			</div>
		</form>
	</div>
</div>
</div>


<hr>
@include("_message")
<div style="text-align: right;">
<a href="{{url('admin/teacher/add')}}" class="btn btn-success btn-sm">Add new Student</a>
</div>
						
						<h6>Teacher List</h6>
						
						<div class="card-body">
							<div class="card-body">
								<table class="table table-bordered mb-0">
									<thead>
										<tr style="text-align: center"; >
											<th scope="col">Serial</th>
											<th scope="col">Pic</th>
											<th scope="col">Teacher Name</th>
											<th scope="col">Gender</th>
											<th scope="col">Phone</th>
											<th scope="col">Present Address</th>
											<th scope="col">Permanent Address</th>
											<th scope="col">Work Experience</th>
											<th scope="col">Status</th>
											<th scope="col">Marital Status</th>
											<th scope="col">Qualification</th>
											<th scope="col">Work Experience</th>
											<th scope="col">Joining Date</th>
											<th scope="col">Created Date</th>
											<th scope="col">Email</th>
											<th scope="col">Action</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										{{-- @php $no = 1 @endphp --}}
										@foreach($getRecord as $value)
										<tr>
											{{-- <td>{{$no++}}</td> --}}
											<td>{{$value->id}}</td>
											<td>
												@if(!empty($value->getProfile()))	
												<img src="{{$value->getProfile()}}" alt="" style="width:50px; height:50px;">
												@endif
											</td>
											<td>{{$value->name}} {{$value->last_name}} </td>
											<td>{{$value->gender}}</td>
											<td>{{$value->mobile_number}}</td>
											<td>{{$value->current_address}}</td>
											<td>{{$value->permanent_address}}</td>
											<td>{{$value->work_experince}}</td>
											<td>{{($value->status == 0) ? 'Active' : 'Inactive' }}</td>
											<td>{{$value->marital_status}}</td>
											<td>{{$value->qualification}}</td>
											<td>{{$value->joining_date}}</td>
											<td>{{$value->note}}</td>
											<td>{{date('d-m-y H:i A', strtotime($value->created_at))}}</td>
											<td>{{$value->email}}</td>
											<td>
                                    			<a href="{{url('admin/teacher/edit/'.$value->id)}}" class="btn btn-success btn-sm">Edit</a>
                                			</td>
                                			<td>
                                    			<a href="{{url('admin/teacher/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
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