@extends('layouts.app')
@section('title', 'student list')
@section('content')
<main class="page-content">
<h4 class="mb-0 text-uppercase">Student List (Total: {{$getRecord -> total()}})</h4>

<hr>


<hr>
@include("_message")
<div style="text-align: right;">
<a href="{{url('admin/student/add')}}" class="btn btn-success btn-sm">Add new Student</a>
</div>
						
						<h6>Student List</h6>
						
						<div class="">
							<div class="card-body">
								<table class="table table-bordered mb-0">
									<thead>
										<tr>
											<th scope="col">Serial</th>
											<th scope="col">Pic</th>
											<th scope="col">Name</th>
											<th scope="col">Admission No</th>
											<th scope="col">Roll No</th>
											<th scope="col">Class</th>
											<th scope="col">Gender</th>
											<th scope="col">DOB</th>
											<th scope="col">Caste</th>
											<th scope="col">Religion</th>
											<th scope="col">Phone</th>
											<th scope="col">Blood</th>
											<th scope="col">Height</th>
											<th scope="col">Weight</th>
											<th scope="col">Status</th>
											<th scope="col">Admission Date</th>
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
												<img src="{{$value->getProfile()}}" alt="" style="width:100px;">
												@endif
											</td>
											<td>{{$value->name}} {{$value->last_name}} </td>
											<td>{{$value->admission_number}}</td>
											<td>{{$value->roll_number}}</td>
											<td>{{$value->class_id}}</td>
											<td>{{$value->gender}}</td>
											<td>{{$value->date_of_birth}}</td>
											<td>{{$value->caste}}</td>
											<td>{{$value->religion}}</td>
											<td>{{$value->mobile_number}}</td>
											<td>{{$value->blood_group}}</td>
											<td>{{$value->height}}</td>
											<td>{{$value->weight}}</td>
											<td>{{$value->status}}</td>
											<td>{{$value->admission_date}}</td>
											<td>{{date('d-m-y H:i A', strtotime($value->created_at))}}</td>
											<td>{{$value->email}}</td>
											<td>
                                    			<a href="{{url('admin/student/edit/'.$value->id)}}" class="btn btn-success btn-sm">Edit</a>
                                			</td>
                                			<td>
                                    			<a href="{{url('admin/admin/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
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