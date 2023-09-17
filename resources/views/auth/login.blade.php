<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Aug 2023 09:50:40 GMT -->
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
    {{-- preloader --}}
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body pt-0">
                  <a href="{{ url('/') }}" class="text-nowrap logo-img text-center d-block py-4 w-100">
                    <img src="{{ url('backend/images/Logo/logo.png') }}"  style="max-width: 24%" alt="">
                  </a>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email.." id="email" aria-describedby="emailHelp">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="mb-4">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password.." id="password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="form-check">
                        <input class="form-check-input primary" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label text-dark" for="remember">
                          Remeber this Device
                        </label>
                      </div>

                    {{-- @if (Route::has('password.request'))

                        <a class="text-primary fw-medium" href="{{ route('password.request') }}">Forgot Password ?</a>

                    @endif --}}
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Login</button>
                    {{-- <div class="d-flex align-items-center justify-content-center">
                      <p class="fs-4 mb-0 fw-medium">Don't have an account?</p>
                      <a class="text-primary fw-medium ms-2" href="{{ route('register') }}">Create an account</a>
                    </div> --}}
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
