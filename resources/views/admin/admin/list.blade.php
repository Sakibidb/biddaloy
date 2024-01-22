@extends('layouts.app')
@section('title', 'admin list')
@section('content')
<main class="page-content">
<h6 class="mb-0 text-uppercase">Admin List</h6>
@include("_message")
<div style="text-align: right;">
<a href="{{url('admin/admin/add')}}" class="btn btn primary">Add new admin</a>
</div>

						<hr>
						
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
										@foreach($getRecord as $value)
										<tr>
											<td>{{$value->id}}</td>
											<td>{{$value->name}}</td>
											<td>{{$value->email}}</td>
											<td>{{$value->created_at}}</td>
											<td>
                                    			<a href="{{url('admin/admin/edit')}}" class="btn btn-success btn-sm">Edit</a>
                                			</td>
                                			<td>
                                    			<a href="{{url('admin/admin/delete')}}" class="btn btn-danger btn-sm">Delete</a>
                                			</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>

        
     </main>
     @endsection