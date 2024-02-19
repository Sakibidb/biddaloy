@extends('layouts.app')
@section('title', 'teacher add')
@section('content')

<main class="page-content">
	<h6 class="text-uppercase">Add New Teacher</h6>
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
								<label for="Mobile" class="form-label">Mobile Number <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Mobile" name="mobile_number" value="{{old('mobile_number')}}">
								<div style="color: red">{{$errors->first('mobile_number')}}</div>
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
								<label for="Joining Date" class="form-label">Joining Date <span style="color: red;">*</span></label>
								<input type="date" class="form-control" placeholder="Joining Date" name="joining_date" value="{{old('joining_date')}}">
								<div style="color: red">{{$errors->first('joining_date')}}</div>
							</div>
                        </div>
						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="note" class="form-label">Note <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Note" name="note" value="{{old('note')}}">
								<div style="color: red">{{$errors->first('note')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="marital_status" class="form-label">Marital Status<span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Marital Status" name="marital_status" value="{{old('marital_status')}}">
								<div style="color: red">{{$errors->first('marital_status')}}</div>
							</div>
                        </div>
						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Current Address" class="form-label">Current Address <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Current Address" name="current_address" value="{{old('current_address')}}">
								<div style="color: red">{{$errors->first('current_address')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="Permanent Address" class="form-label">Permanent Address <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Permanent Address" name="permanent_address" value="{{old('permanent_address')}}">
								<div style="color: red">{{$errors->first('permanent_address')}}</div>
							</div>
                        </div>
						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="pic" class="form-label">Profile Pic <span style="color: red;">*</span></label>
								<input type="file" class="form-control" placeholder="Profile Pic" name="profile_pic" value="{{old('profile_pic')}}">
								<div style="color: red">{{$errors->first('profile_pic')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="qualification" class="form-label">Qualification <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Qualification" name="qualification" value="{{old('qualification')}}">
								<div style="color: red">{{$errors->first('qualification')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="Work Experince" class="form-label">Work Experince <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Work Experince" name="work_experince" value="{{old('work_experince')}}">
								<div style="color: red">{{$errors->first('work_experince')}}</div>
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