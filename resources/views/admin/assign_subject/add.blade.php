@extends('layouts.app')
@section('title', 'Assign Subject Add')
@section('content')

<main class="page-content">
	<h6 class="text-uppercase">Add New Assign Subject</h6>
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
									<option selected value="">Select Type</option>
									@foreach($getClass as $class)
									<option value="{{$class->id}}">{{$class->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
<br>
						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Subject Name" class="form-label">Subject Name</label>
								@foreach($getSubject as $subject)

								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="{{$subject->id}}" id="flexCheckDefault" name="subject_id[]">
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
									<option value="0">Active</option>
									<option value="1">Inactive</option>
								</select>
							</div>
						</div>




						<div class="col-12 col-lg-6">
							<button class="btn btn-primary px-4" type="submit">Submit<i class='bx bx-right-arrow-alt ms-2'></i></button>
						</div>
				</div>
			</div>
		</div>
	</div>
</main>


@endsection