<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <link rel="icon" href="{{ url('/frontend/images/fav.png') }}">
    <title>Interior Bangladesh | DashBoard</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
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
    {{-- <!-- Preloader --> --}}
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body pt-0">
                    <a href="{{ url('/') }}" class="text-nowrap logo-img text-center d-block py-4 w-100">
                        <img src="{{ url('backend/images/Logo/logo.png') }}" style="max-width: 24%" alt="">
                    </a>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" id="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                      <label for="password" class="form-label">Password</label>
                      <input type="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                      <label for="Cpassword" class="form-label">Confirm Password</label>
                      <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="Cpassword">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Register</button>
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
