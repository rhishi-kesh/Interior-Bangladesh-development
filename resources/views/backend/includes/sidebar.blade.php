<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="{{ url('/home') }}" class="text-nowrap logo-img text-center pt-3">
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
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-asana" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    <path d="M17 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    <path d="M7 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                 </svg>
              </span>
              <span class="hide-menu">Team</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="{{ route('add-team') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Add Member</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('team') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">View Team</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
              <span class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chess-king-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 2a1 1 0 0 1 .993 .883l.007 .117v2h2a1 1 0 0 1 .117 1.993l-.117 .007h-2v1.758a4.49 4.49 0 0 1 2.033 -.734l.24 -.018l.227 -.006a4.5 4.5 0 0 1 4.5 4.5a4.504 4.504 0 0 1 -4.064 4.478l-.217 .016l-.219 .006h-7a4.5 4.5 0 1 1 2.501 -8.241l-.001 -1.759h-2a1 1 0 0 1 -.117 -1.993l.117 -.007h2v-2a1 1 0 0 1 1 -1z" stroke-width="0" fill="currentColor"></path>
                    <path d="M18 18h-12a1 1 0 0 0 -1 1a2 2 0 0 0 2 2h10a2 2 0 0 0 1.987 -1.768l.011 -.174a1 1 0 0 0 -.998 -1.058z" stroke-width="0" fill="currentColor"></path>
                 </svg>
              </span>
              <span class="hide-menu">Client Review</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="{{ route('addreview') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Add Review</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('review') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">View Reviews</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
              <span class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chess-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 2a4 4 0 0 1 4 4a5.03 5.03 0 0 1 -.438 2.001l.438 -.001a1 1 0 0 1 .117 1.993l-.117 .007h-1.263l1.24 5.79a1 1 0 0 1 -.747 1.184l-.113 .02l-.117 .006h-6a1 1 0 0 1 -.996 -1.093l.018 -.117l1.24 -5.79h-1.262a1 1 0 0 1 -.117 -1.993l.117 -.007h.438a5.154 5.154 0 0 1 -.412 -1.525l-.02 -.259l-.006 -.216a4 4 0 0 1 4 -4z" stroke-width="0" fill="currentColor"></path>
                    <path d="M18 18h-12a1 1 0 0 0 -1 1a2 2 0 0 0 2 2h10a2 2 0 0 0 1.987 -1.768l.011 -.174a1 1 0 0 0 -.998 -1.058z" stroke-width="0" fill="currentColor"></path>
                 </svg>
              </span>
              <span class="hide-menu">Clients</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="{{ route('addclient') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Add Client Logo</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('client') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">View Clients Logo</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
              <span class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-album" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                    <path d="M12 4v7l2 -2l2 2v-7"></path>
                 </svg>
              </span>
              <span class="hide-menu">Gallery</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="{{ route('gallery_category') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Add Category</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('client') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Add Image</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ route('client') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">View Image</span>
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
