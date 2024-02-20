@extends('layouts.app')
@section('title', 'Attendance')
@section('content')
<main class="page-content">
<h4 class="mb-0 text-uppercase">Attendance List </h4>

<hr>
<h6>Attendance Search</h6>
<div class="card-body">
	<div class="bs-stepper-content">
		
		<form action="" method="get" style="display: flex;">
			
			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<select class="form-select mb-6" aria-label="Default select example" id="getClass" name="class_id" required required>
						<option value="">Select One</option>
						@foreach($getClass as $class)
						<option {{ (Request::get('class_id') == $class->id) ? 'selected' : '' }} value="{{$class->id}}">{{$class->name}}</option>
						@endforeach
						
					</select>
				</div>
			</div>

			<div class="row g-3">
				<div class="col-12 col-lg-12">
					<input type="date" class="form-control" placeholder="Date" id="getAttendancedate" value="{{ Request::get('attendance_date') }}" required name="attendance_date">
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
				</tr>
			</thead>
			@endif
			<tbody>
			@if(!empty($getStudent) && !empty($getStudent->count()))
			@foreach($getStudent as $value)
			@php
				$attendance_type = '';
				$getAttendance = $value->getAttendance($value->id, Request::get('class_id'), Request::get('attendance_date'));
				
				if(!empty($getAttendance->attendance_type))
				{
					$attendance_type = $getAttendance->attendance_type;
				}
			@endphp
				<tr>
					<td>{{$value->id}}</td>
					<td>{{$value->name}} {{$value->last_name}}</td>
					<td style="text-align: center">
						<label for="" style="margin-right: 10px; color:green">
							<input value="1" id="{{$value->id}}" {{($attendance_type == '1') ? 'checked': ''}} class="SaveAttendance" type="radio" name="attendance{{$value->id}}">Present
						</label>
						<label for="" style="margin-right: 10px; color:yellow">
							<input value="2" id="{{$value->id}}" {{($attendance_type == '2') ? 'checked': ''}} class="SaveAttendance" type="radio" name="attendance{{$value->id}}">Late
						</label>
						<label for="" style="margin-right: 10px; color:red">
							<input value="3" id="{{$value->id}}" {{($attendance_type == '3') ? 'checked': ''}} class="SaveAttendance" type="radio" name="attendance{{$value->id}}">Absent
						</label>
						<label for="" style="margin-right: 10px; color:skyblue">
							<input value="4" id="{{$value->id}}" {{($attendance_type == '4') ? 'checked': ''}} class="SaveAttendance" type="radio" name="attendance{{$value->id}}">Half Day
						</label>
					</td>
				</tr>	
			@endforeach
			@endif
			</tbody>
		</table>
		

	</div>
</div>
						
						

        
</main>
@endsection

@section('script').

<script type="text/javascript">
	$('.SaveAttendance').change(function(e){

		var student_id = $(this).attr('id');
		var attendance_type = $(this).val(); 
		var class_id = $('#getClass').val();
		var attendance_date = $('#getAttendancedate').val();
	
		$.ajax({
			type: "POST",
			url: "{{url('admin/attendance/student/save')}}",
			data:{
				"_token": "{{csrf_token()}}",
				student_id : student_id,
				attendance_type : attendance_type,
				class_id : class_id,
				attendance_date : attendance_date,
			},
			dataType : "json",
			success: function(data){
				alert(data.message)
			}
		});
	});
	</script>
	@endsection
	
	