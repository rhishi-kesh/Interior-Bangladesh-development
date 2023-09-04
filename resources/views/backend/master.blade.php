<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <title>Mordenize</title>
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
    <link rel="shortcut icon" type="image/png" href="" />
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ url('backend/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">

    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{ url('backend/css/style.min.css') }}" />
    <link  id="themeColors"  rel="stylesheet" href="{{ url('backend/css/preloader.css') }}" />
    <style>
        #container {
            width: 1000px;
            margin: 20px auto;
        }
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }
        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
  </head>
  <body>
    <!-- preloader start -->
    @include('backend.includes.loader')
    <!-- preloader end -->


    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
      @include('backend.includes.sidebar')
      <!--  Sidebar End -->
      <!--  Main wrapper -->
      <div class="body-wrapper">
        <!--  Header Start -->
        @include('backend.includes.header')
        <!--  Header End -->
        <div class="container-fluid">
            {{-- yield--------------------------------------- is here --}}
          @yield('content')
        </div>
      </div>
      <div class="dark-transparent sidebartoggler"></div>
    <div class="dark-transparent sidebartoggler"></div>
    </div>


    <!--  Search Bar Start-->
    @include('backend.includes.search_bar')
    <!--  Search Bar end-->
    <!--  Customizer start -->
    @include('backend.includes.customizer')
    <!--  Customizer end-->
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
    <script src="{{ url('ckeditor/ckeditor.js') }}"></script>
    @yield('jss')
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

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Aug 2023 09:47:52 GMT -->
</html>
