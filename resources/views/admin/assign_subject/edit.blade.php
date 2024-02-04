@extends('layouts.app')
@section('title', 'Assign Subject Edit')
@section('content')

<main class="page-content">
	<h6 class="text-uppercase">Edit Assign Subject</h6>
	<hr>
	<div id="stepper1" class="bs-stepper">
		<div class="card">


			<div class="card-body">
				<div class="bs-stepper-content">

					<form action="" method="POST">
						{{@csrf_field()}}


						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Subject Name" class="form-label">Class Name</label>
								<select class="form-select mb-6" aria-label="Default select example" name="class_id" required>
									<option selected value="">Select Class</option>
									@foreach($getClass as $class)
									<option {{($getRecord->class_id == $class->id) ? 'selected' : ''}} value="{{$class->id}}">{{$class->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
<br>
						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Subject Name" class="form-label">Subject Name</label>
								@foreach ($getSubject as $subject)
								@php
									$checked = "";
								@endphp
								@foreach($getAssignSubjectID as $subjectAssign)
									@if($subjectAssign->subject_id == $subject->id)
										@php
										$checked = "checked";
										@endphp
									@endif
								@endforeach

								<div class="form-check">
									<input {{$checked}} class="form-check-input" type="checkbox" value="{{$subject->id}}" id="flexCheckDefault" name="subject_id[]">
									<label class="form-check-label" for="flexCheckDefault">
										{{$subject->name}}
									</label>
								</div>

								@endforeach
							</div>
						</div>


						<div class="row g-3">
							<div class="col-12 col-lg-6"><br>
								<label for="status" class="form-label">Status</label>
								<select class="form-select mb-6" aria-label="Default select example" name="status">
									<option {{($getRecord->status == 0) ? 'selected' : ''}} value="0">Active</option>
									<option {{($getRecord->status == 1) ? 'selected' : ''}} value="1">Inactive</option>
								</select>
							</div>
						</div>




						<div class="col-12 col-lg-6">
							<button class="btn btn-primary px-4" type="submit">Update<i class='bx bx-right-arrow-alt ms-2'></i></button>
						</div>
				</div>
			</div>
		</div>
	</div>
</main>


@endsection