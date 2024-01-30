<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!--plugins-->
    <link href="{{asset('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
    <!--Styles-->
    <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('public/assets/css/icons.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="{{asset('public/assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/css/dark-theme.css')}}" rel="stylesheet">
     
  </head>
  <body>


    <!--authentication-->

     <div class="container-fluid my-5">
        <div class="row">
           <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
            <div class="card border-3">
              <div class="card-body p-5">
                  
                  <h4 class="fw-bold">Admin Login</h4>
                  <p class="mb-0">Enter your credentials to login your account</p>

                  

                  <div class="form-body mt-4">
                    @include('_message')
										<form class="row g-3" action="{{'login'}}" method="post">
                                            {{@csrf_field()}}
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" required name="email" class="form-control" id="inputEmailAddress" placeholder="jhon@example.com">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" value="" placeholder="Enter Password" name="password"> 
                          <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="remember" name="remember">
													<label class="form-check-label" for="remember">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="{{url('forgot-password')}}">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Login</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-start">
													<p class="mb-0">Don't have an account yet? <a href="auth-basic-register.html">Sign up here</a>
													</p>
												</div>
											</div>
										</form>
									</div>

              </div>
            </div>
           </div>
        </div><!--end row-->
     </div>
      
    <!--authentication-->




    <!--plugins-->
    <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>

    <script>
      $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
          event.preventDefault();
          if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("bi-eye-slash-fill");
            $('#show_hide_password i').removeClass("bi-eye-fill");
          } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("bi-eye-slash-fill");
            $('#show_hide_password i').addClass("bi-eye-fill");
          }
        });
      });
    </script>
  
  </body>
</html>