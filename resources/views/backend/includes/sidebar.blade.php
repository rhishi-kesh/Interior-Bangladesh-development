<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="index-2.html" class="text-nowrap logo-img text-center pt-3">
          <img src="{{ url('backend/images/Logo/logo.png') }}" class="dark-logo" width="180" alt="" />
          <img src="{{ url('backend/images/Logo/logo.png') }}" class="light-logo" width="180" alt="" />
        </a>
        <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8 text-muted"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar>
        <ul id="sidebarnav">
          <!-- ============================= -->
          <!-- Home -->
          <!-- ============================= -->
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <!-- =================== -->
          <!-- Dashboard -->
          <!-- =================== -->
          <li class="sidebar-item">
            <a class="sidebar-link" target="_blank" href="{{ url('/') }}" aria-expanded="false">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                    <path d="M3.6 9h16.8"></path>
                    <path d="M3.6 15h16.8"></path>
                    <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                    <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                 </svg>
              </span>
              <span class="hide-menu">Visit Site</span>
            </a>
          </li>
          <!-- ============================= -->
          <!-- Apps -->
          <!-- ============================= -->

          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Dashboard</span>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('about') }}" aria-expanded="false">
              <span>
                <i class="ti ti-user-circle"></i>
              </span>
              <span class="hide-menu">About Us</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
              <span class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bat" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M17 16c.74 -2.286 2.778 -3.762 5 -3c-.173 -2.595 .13 -5.314 -2 -7.5c-1.708 2.648 -3.358 2.557 -5 2.5v-4l-3 2l-3 -2v4c-1.642 .057 -3.292 .148 -5 -2.5c-2.13 2.186 -1.827 4.905 -2 7.5c2.222 -.762 4.26 .714 5 3c2.593 0 3.889 .952 5 4c1.111 -3.048 2.407 -4 5 -4z"></path>
                    <path d="M9 8a3 3 0 0 0 6 0"></path>
                 </svg>
              </span>
              <span class="hide-menu">Sliders</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="{{ url('add-slide') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Add Slide</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('sliders') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">View Slides</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
              <span class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-basket-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12.684 3.27l.084 .09l4.7 5.64h3.532a1 1 0 0 1 .991 1.131l-.02 .112l-1.984 7.918c-.258 1.578 -1.41 2.781 -2.817 2.838l-.17 .001l-10.148 -.002c-1.37 -.053 -2.484 -1.157 -2.787 -2.57l-.035 -.185l-2 -8a1 1 0 0 1 .857 -1.237l.113 -.006h3.53l4.702 -5.64a1 1 0 0 1 1.452 -.09zm-.684 8.73a3 3 0 0 0 -2.98 2.65l-.015 .174l-.005 .176l.005 .176a3 3 0 1 0 2.995 -3.176zm0 -6.438l-2.865 3.438h5.73l-2.865 -3.438z" stroke-width="0" fill="currentColor"></path>
                 </svg>
              </span>
              <span class="hide-menu">Services</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="{{ route('add-service') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Add Service</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('services') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">View Service</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-user-plus"></i>
              </span>
              <span class="hide-menu">Register</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="authentication-register.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Side Register</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="authentication-register2.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Boxed Register</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-rotate"></i>
              </span>
              <span class="hide-menu">Forgot Password</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="authentication-forgot-password.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Side Forgot Password</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="authentication-forgot-password2.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Boxed Forgot Password</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-zoom-code"></i>
              </span>
              <span class="hide-menu">Two Steps</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="authentication-two-steps.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Side Two Steps</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="authentication-two-steps2.html" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Boxed Two Steps</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
