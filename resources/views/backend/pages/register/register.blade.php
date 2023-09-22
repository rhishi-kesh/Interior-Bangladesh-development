<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <link rel="icon" href="{{ url('/frontend/images/fav.png') }}">
    <title>Interior Bangladesh | Register</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="author" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ url('backend/images/Logo/fav.png') }}" />
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ url('backend/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">

    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{ url('backend/css/style.min.css') }}" />
    <link  id="themeColors"  rel="stylesheet" href="{{ url('backend/css/preloader.css') }}" />
  </head>
  <body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body pt-0">
                    <span class="text-nowrap logo-img text-center d-block py-4 w-100">
                        <img src="{{ url('backend/images/Logo/logo.png') }}" style="max-width: 24%" alt="">
                    </span>
                  <form method="post" action="{{ route('register_user_post') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="Enter Name" id="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Name" required id="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Role" class="form-label">Role</label>
                        <select class="form-control @error('Role') is-invalid @enderror" name="role" required id="Role">
                            <option value="">Select Role</option>
                            <option value="0">Admin</option>
                            <option value="1">User</option>
                        </select>
                          @error('Role')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="mb-4">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" name="password" required id="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                      <label for="Cpassword" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password" required id="Cpassword">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-8 mb-2 rounded-2">Register</button>
                    <a href="{{ route('home') }}" class="btn btn-dark w-100 py-8 mb-4 rounded-2">Back</a>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

     <!--  Import Js Files -->
     <script src="{{ url('backend/libs/jquery/dist/jquery.min.js') }}"></script>
     <script src="{{ url('backend/libs/simplebar/dist/simplebar.min.js') }}"></script>
     <script src="{{ url('backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
     <!--  core files -->
     <script src="{{ url('backend/js/app.min.js') }}"></script>
     <script src="{{ url('backend/js/app.init.js') }}"></script>
     <script src="{{ url('backend/js/app-style-switcher.js') }}"></script>
     <script src="{{ url('backend/js/sidebarmenu.js') }}"></script>
     <script src="{{ url('backend/js/custom.js') }}"></script>
     <!--  current page js files -->
     <script src="{{ url('backend/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
     <script src="{{ url('backend/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
     <script src="{{ url('backend/js/dashboard.js') }}"></script>
     <script>
         $(document).ready(function() {

         setTimeout(function() {
             $('#ctn-preloader').addClass('loaded');
             // Una vez haya terminado el preloader aparezca el scroll
             $('body').removeClass('no-scroll-y');

             if ($('#ctn-preloader').hasClass('loaded')) {
             // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
             $('#preloader').delay(1000).queue(function() {
                 $(this).remove();
             });
             }
         }, 3000);

         });
     </script>
  </body>
</html>
