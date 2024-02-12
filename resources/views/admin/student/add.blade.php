@extends('layouts.app')
@section('title', 'student add')
@section('content')

<main class="page-content">
	<h6 class="text-uppercase">Add New Student</h6>
	<hr>
	<div id="stepper1" class="bs-stepper">
		<div class="card">


			<div class="card-body">
				<div class="bs-stepper-content">

					<form action="" enctype="multipart/form-data" method="POST">
                    {{@csrf_field()}}


						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Name" class="form-label">First Name <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="First Name" name="name" value="{{old('name')}}">
								<div style="color: red">{{$errors->first('name')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="Name" class="form-label">Last Name <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{old('last_name')}}">
								<div style="color: red">{{$errors->first('last_name')}}</div>
							</div>
                        </div>
						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Name" class="form-label">Admission Number <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Admission Number" name="admission_number" value="{{old('admission_number')}}">
								<div style="color: red">{{$errors->first('admission_number')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="status" class="form-label">Status<span style="color: red;">*</span></label>
								<select class="form-select mb-6" aria-label="Default select example" name="status">
									<option value="">Select One</option>
									<option {{ (old('status') == '0') ? 'selected' : ''}} value="0">Active</option>
									<option {{ (old('status') == '1') ? 'selected' : ''}} value="1">Inactive</option>									
								</select>
								<div style="color: red">{{$errors->first('status')}}</div>
							</div>
                        </div>
						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Roll Number" class="form-label">Roll Number <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Roll Number" name="roll_number" value="{{old('roll_number')}}">
								<div style="color: red">{{$errors->first('roll_number')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="class" class="form-label">Class<span style="color: red;">*</span></label>
								<select class="form-select mb-6" aria-label="Default select example" name="class" required>
									<option value="">Select Class</option>
									@foreach($getClass as $value)
									<option {{ (old('class') == '$value->id') ? 'selected' : ''}} value="{{$value->id}}">{{$value->name}}</option>
									@endforeach
									
								</select>
								<div style="color: red">{{$errors->first('class')}}</div>
							</div>
                        </div>
						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="gender" class="form-label">Gender<span style="color: red;">*</span></label>
								<select class="form-select mb-6" aria-label="Default select example" name="gender">
									<option value="">Select One</option>
									<option {{ (old('gender') == 'Male') ? 'selected' : ''}} value="Male">Male</option>
									<option {{ (old('gender') == 'Female') ? 'selected' : ''}} value="Female">Female</option>
									<option {{ (old('gender') == 'Other') ? 'selected' : ''}} value="Other">Others</option>
									
								</select>
								<div style="color: red">{{$errors->first('gender')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="Date of Birth" class="form-label">Date Of Birth <span style="color: red;">*</span></label>
								<input type="date" class="form-control" placeholder="Name" name="date_of_birth" value="{{old('date_of_birth')}}">
								<div style="color: red">{{$errors->first('date_of_birth')}}</div>
							</div>
                        </div>
						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="cast" class="form-label">Cast <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="cast" name="cast" value="{{old('cast')}}">
								<div style="color: red">{{$errors->first('cast')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="Religion" class="form-label">Religion <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Religion" name="religion" value="{{old('religion')}}">
								<div style="color: red">{{$errors->first('religion')}}</div>
							</div>
                        </div>
						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Mobile" class="form-label">Mobile Number <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Mobile" name="mobile_number" value="{{old('mobile_number')}}">
								<div style="color: red">{{$errors->first('mobile_number')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="Name" class="form-label">Admission Date <span style="color: red;">*</span></label>
								<input type="date" class="form-control" placeholder="Admission Date" name="admission_date" value="{{old('admission_date')}}">
								<div style="color: red">{{$errors->first('admission_date')}}</div>
							</div>
                        </div>
						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Name" class="form-label">Profile Pic <span style="color: red;">*</span></label>
								<input type="file" class="form-control" placeholder="Profile Pic" name="profile_pic" value="{{old('profile_pic')}}">
								<div style="color: red">{{$errors->first('profile_pic')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="Blood" class="form-label">Blood Group <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Blood Group" name="blood_group" value="{{old('blood_group')}}">
								<div style="color: red">{{$errors->first('blood_group')}}</div>
							</div>
                        </div>
						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Height" class="form-label">Height <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Height" name="height" value="{{old('height')}}">
								<div style="color: red">{{$errors->first('height')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="Weight" class="form-label">Weight <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Weight" name="weight" value="{{old('weight')}}">
								<div style="color: red">{{$errors->first('weight')}}</div>
							</div>
                        </div>

							
							<hr>
							<div class="col-12 col-lg-6">
								<label for="email" class="form-label">Email <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Name" name="email" value="{{old('email')}}">
								<div style="color: red">{{$errors->first('email')}}</div>
							</div>

							<div class="row g-3">
                            <div class="col-12 col-lg-6">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control" placeholder="password" name="password" value="{{old('password')}}">
								<div style="color: red">{{$errors->first('password')}}</div>
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