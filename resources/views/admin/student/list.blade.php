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
						
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered mb-0">
									<thead>
										<tr>
											<th scope="col">Serial No</th>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
											<th scope="col">Created Date</th>
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
											<td>{{$value->name}}</td>
											<td>{{$value->email}}</td>
											<td>{{date('d-m-y H:i A', strtotime($value->created_at))}}</td>
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