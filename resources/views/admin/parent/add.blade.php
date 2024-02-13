@extends('layouts.app')
@section('title', 'admin add')
@section('content')

<main class="page-content">
	<h6 class="text-uppercase">Add New Admin</h6>
	<hr>
	<div id="stepper1" class="bs-stepper">
		<div class="card">


			<div class="card-body">
				<div class="bs-stepper-content">

					<form action="" method="POST">
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
								<label for="status" class="form-label">Status<span style="color: red;">*</span></label>
								<select class="form-select mb-6" aria-label="Default select example" name="status">
									<option value="">Select One</option>
									<option {{ (old('status') == '0') ? 'selected' : ''}} value="0">Active</option>
									<option {{ (old('status') == '1') ? 'selected' : ''}} value="1">Inactive</option>									
								</select>
								<div style="color: red">{{$errors->first('status')}}</div>
							</div>
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
                        </div>

						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Mobile" class="form-label">Mobile Number <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Mobile" name="mobile_number" value="{{old('mobile_number')}}">
								<div style="color: red">{{$errors->first('mobile_number')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="Name" class="form-label">Profile Pic <span style="color: red;">*</span></label>
								<input type="file" class="form-control" placeholder="Profile Pic" name="profile_pic" value="{{old('profile_pic')}}">
								<div style="color: red">{{$errors->first('profile_pic')}}</div>
							</div>
                        </div>

						<div class="row g-3">
							<div class="col-12 col-lg-6">
								<label for="Occupation" class="form-label">Occupation<span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Mobile" name="occupation" value="{{old('occupation')}}">
								<div style="color: red">{{$errors->first('occupation')}}</div>
							</div>
							<div class="col-12 col-lg-6">
								<label for="Name" class="form-label">Address <span style="color: red;">*</span></label>
								<input type="text" class="form-control" placeholder="Address" name="address" value="{{old('address')}}">
								<div style="color: red">{{$errors->first('address')}}</div>
							</div>
                        </div>


                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
								<div class="text-danger">{{$errors->first('email')}}</div>
							</div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
								<label for="password" class="form-label">Password</label>
								<input type="password" class="form-control" placeholder="password" name="password" value="{{old('password')}}">
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