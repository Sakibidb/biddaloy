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
								<label for="Name" class="form-label">Name</label>
								<input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">
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