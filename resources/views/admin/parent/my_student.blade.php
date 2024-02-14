@extends('layouts.app')
@section('title', 'parent list')
@section('content')
<main class="page-content">
<h4 class="mb-0 text-uppercase">Parent's Student List</h4> <br> <h5>Parent's Name: ({{$getParent->name}} {{$getParent->last_name}})</h5>

<hr>
<h6>Student Search</h6>
<div class="card-body">
	<div class="bs-stepper-content">
		
		<form action="" method="get" style="display: flex;">
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="text" class="form-control" placeholder="Student ID" name="id" value="{{Request::get('id') }}">
				</div>
			</div>
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="text" class="form-control" placeholder="Name" name="name" value="{{Request::get('name') }}">
				</div>
			</div>
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="text" class="form-control" placeholder="Email" name="email" value="{{ Request::get('mail') }}">
				</div>
			</div>
						
			<div class="col-12 col-lg-6">
				<button class="btn btn-success px-4" type="submit">Search<i class='bx bx-right-arrow-alt ms-2'></i></button>
				<a href="{{url('admin/parent/my_student/'.$parent_id) }}" class="btn btn-warning px-4">Reset<i class='bx bx-right-arrow-alt ms-2'></i></a>
			</div>
		</form>
	</div>
</div>


<hr>
@include("_message")

		@if(!empty($getSearchStudent))				
						<h6>Student List</h6>
						
						<div class="card-body">
							<div class="card-body">
								<table class="table table-bordered mb-0">
									<thead>
										<tr>
											<th scope="col">Serial No</th>
											<th scope="col">Profile Pic</th>
											<th scope="col">Student Name</th>
											<th scope="col">Email</th>
											<th scope="col">Parent Name</th>
											<th scope="col">Created Date</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										{{-- @php $no = 1 @endphp --}}
										@foreach($getSearchStudent as $value)
										<tr>
											{{-- <td>{{$no++}}</td> --}}
											<td>{{$value->id}}</td>
											<td>
												@if(!empty($value->getProfile()))	
												<img src="{{$value->getProfile()}}" alt="" style="width:50px; height:50px;">
												@endif
											</td>
											<td>{{$value->name}} {{$value->last_name}} </td>
											<td>{{$value->email}}</td>
											<td>{{$value->parent_name}}</td>
											<td>{{date('d-m-y H:i A', strtotime($value->created_at))}}</td>
											<td>
                                    			<a href="{{url('admin/parent/assign_student_parent/'.$value->id. '/' .$parent_id)}}" class="btn btn-success btn-sm">Add  Student to Parent</a>
                                			</td>                               			
                        
										</tr>
										@endforeach
									</tbody>
								</table>
								<div style="padding: 10px; float:right " >
								</div>

							</div>
						</div>
		@endif

<hr> <hr>


						<h6>Parent's Student List</h6>
						
						<div class="card-body">
							<div class="card-body">
							<table class="table table-bordered mb-0">
									<thead>
										<tr>
											<th scope="col">Serial No</th>
											<th scope="col">Profile Pic</th>
											<th scope="col">Student Name</th>
											<th scope="col">Email</th>
											<th scope="col">Parent Name</th>
											<th scope="col">Created Date</th>
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
											<td>{{$value->email}}</td>
											<td>{{$value->parent_name}}</td>
											<td>{{date('d-m-y H:i A', strtotime($value->created_at))}}</td>
											<td>
                                    			<a href="{{url('admin/parent/assign_student_parent_delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                			</td>                               			
                        
										</tr>
										@endforeach
									</tbody>
								</table>
								<div style="padding: 10px; float:right " >
								</div>

							</div>
						</div>

        
     </main>
     @endsection