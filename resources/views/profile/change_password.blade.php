@extends('layouts.app')
@section('content')

<main class="page-content">


<body>


    <!--authentication-->
  
    <div class="mx-3 mx-lg-0">
  
    <div class="card my-5 col-xl-9 col-xxl-8 mx-auto rounded-4 overflow-hidden border-3 p-3">
      <div class="row g-3 align-items-center">
        <div class="col-lg-6 d-flex">
          <div class="card-body p-5">
            <img src="{{asset('public/assets/images/logo-icon.png')}}" class="mb-4" width="45" alt="">
            <h5 class="fw-bold">Genrate New Password</h5>
            @include("_message")
            <div class="form-body mt-4">
              <form class="row g-3" method="post" action="">
                {{@csrf_field()}}
                <div class="col-12">
                    <label class="form-label" for="NewPassword">Old Password</label>
                    <input type="password" class="form-control" id="OldPassword" placeholder="Enter old password" name="old_password" required>
                </div>
                <div class="col-12">
                  <label class="form-label" for="NewPassword">New Password</label>
                  <input type="password" class="form-control" id="NewPassword" placeholder="Enter new password" name="new_password" required>
                </div>
                
                <div class="col-12">
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                     <a href="auth-boxed-login.html" class="btn btn-light">Back to Login</a>
                  </div>
                </div>
              </form>
            </div>
  
        </div>
        </div>
        <div class="col-lg-6 d-lg-flex d-none">
          <div class="p-3 rounded-4 w-100 d-flex align-items-center justify-content-center border-3 bg-primary">
            <img src="{{asset('public/assets/images/boxed-reset-password.png')}}" class="img-fluid" alt="">
          </div>
        </div>
  
      </div><!--end row-->
    </div>
  
  </div>
  
  
  
  
    <!--authentication-->
  
  
  
  
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
  
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

  @endsection

  </main>