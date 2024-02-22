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
					<label for="">Class</label>
					<select class="form-select mb-6" aria-label="Default select example" name="class_id" required>
						<option value="">Select One</option>
						@foreach($getClass as $class)
						<option {{ (Request::get('class_id') == $class->id) ? 'selected' : '' }} value="{{$class->id}}">{{$class->name}}</option>
						@endforeach
						
					</select>
				</div>
			</div>

			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<label for="">Attendance Date</label>

					<input type="date" class="form-control" placeholder="Date" value="{{ Request::get('attendance_date') }}" name="attendance_date">
				</div>
			</div>

            <div class="row g-3">
				<div class="col-12 col-lg-12">
					<label for="">Attendance Type</label>

					<select class="form-select mb-6" aria-label="Default select example" name="attendance_type">
                        <option >Select One</option>
                        <option {{ (Request::get('attendance_type') == 1) ? 'selected' : '' }} value="1">Present</option>
                        <option {{ (Request::get('attendance_type') == 2) ? 'selected' : '' }} value="2">Late</option>
                        <option {{ (Request::get('attendance_type') == 3) ? 'selected' : '' }} value="3">Absent</option>
                        <option {{ (Request::get('attendance_type') == 3) ? 'selected' : '' }} value="4">Half Day</option>
						
					</select>
				</div>
			</div>
			
			<div class="col-12 col-lg-6" style="margin-top: 20px">
				<button class="btn btn-success px-4" type="submit">Search<i class='bx bx-right-arrow-alt ms-2'></i></button>
				<a href="{{url('admin/attendance/student') }}" class="btn btn-warning px-4">Reset<i class='bx bx-right-arrow-alt ms-2'></i></a>
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
					<th scope="col">Class Name</th>
					<th scope="col">Attendance</th>
					<th scope="col">Created By</th>
					<th scope="col">Attendance Date</th>
					<th scope="col">Created Date</th>
				</tr>
			</thead>
			@endif
			<tbody>
				@forelse($getRecord as $value)
					<tr>
						<td>{{ $value->student_id}}</td>
						<td>{{ $value->student_name}} {{ $value->student_last_name}}</td>
						<td>{{ $value->class_name}}</td>
						<td>
							@if($value->attendance_type == 1)
							Present
							@elseif($value->attendance_type == 2)
							Late
							@elseif($value->attendance_type == 3)
							Absent
							@elseif($value->attendance_type == 4)
							Half Day
							@endif
						</td>
						<td {{ $value->created_by}}>{{ $value->created_by}}</td>
						<td>{{date('d-m-y', strtotime($value->attendance_date))}}</td>
						<td>{{date('d-m-y', strtotime($value->created_at))}}</td>
					</tr>
					@empty
					<tr>
						<td colspan="100%">Record Not Found</td>
					</tr>
				@endforelse
			</tbody>
		</table>
		{{-- <div style="padding: 10px; float:right " >
			{!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

		</div> --}}
		

	</div>
</div>
						
						

        
</main>
@endsection
	
	