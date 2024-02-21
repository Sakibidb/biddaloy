@extends('layouts.app')
@section('title', 'Attendance')
@section('content')
<main class="page-content">
<h4 class="mb-0 text-uppercase">Attendance Report </h4>

<hr>
<h6>Attendance Report Search</h6>
<div class="card-body">
	<div class="bs-stepper-content">
		
		<form action="" method="get" style="display: flex;">
			
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<select class="form-select mb-6" aria-label="Default select example" name="class_id" required>
						<option value="">Select</option>
						@foreach($getClass as $class)
						<option {{ (Request::get('class_id') == $class->id) ? 'selected' : '' }} value="{{$class->id}}">{{$class->name}}</option>
						@endforeach
						
					</select>
				</div>
			</div>

			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="date" class="form-control" placeholder="Date" value="{{ Request::get('attendance_date') }}" name="attendance_date">
				</div>
			</div>

            <div class="row g-3">
				<div class="col-12 col-lg-12">
                    <label for="">Attendance Type</label>
					<select class="form-select mb-6" aria-label="Default select example" name="attendance_type">
                        <option value="">selecet</option>
                        <option value="">Present</option>
                        <option value="">selecet</option>
                        <option value="">selecet</option>
						
					</select>
				</div>
			</div>
			
			<div class="col-12 col-lg-6">
				<button class="btn btn-success px-4" type="submit">Search<i class='bx bx-right-arrow-alt ms-2'></i></button>
				<a href="{{url('admin/student/list') }}" class="btn btn-warning px-4">Reset<i class='bx bx-right-arrow-alt ms-2'></i></a>
			</div>
		</form>
	</div>
</div>


<hr>
<h3>Student List</h3>
@if(!empty(Request::get('class_id')) && !empty(Request::get('attendance_date')))
<div class="card-body">
	<div class="card-body">
		<table class="table table-bordered mb-0">
			<thead>
				<tr style="text-align: center"; >
					<th scope="col">Student ID</th>
					<th scope="col">Student Name</th>
					<th scope="col">Attendance</th>
					<th scope="col">Attendance Date</th>
					<th scope="col">Created Date</th>
				</tr>
			</thead>
			@endif
			<tbody>
			
			</tbody>
		</table>
		

	</div>
</div>
						
						

        
</main>
@endsection
	
	