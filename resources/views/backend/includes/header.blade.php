<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
      </ul>
      <div class="d-block d-lg-none">
        <img src="{{ url('backend/images/Logo/logo.png') }}" class="dark-logo" width="120" alt="" />
          <img src="{{ url('backend/images/Logo/logo.png') }}" class="light-logo" width="180" alt="" />
      </div>
      <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="p-2">
          <i class="ti ti-dots fs-7"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <div class="d-flex align-items-center justify-content-between">
          <ul class="navbar-nav flex-row align-items-center justify-content-between w-100">
            <li>
                @if (Auth::user()->role == 0)
                <a href="{{ route('register_user') }}" class="btn btn-info mt-2 me-3 d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                        <path d="M16 19h6"></path>
                        <path d="M19 16v6"></path>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                     </svg>
                    <span class="ms-2">Add New User</span>
                </a>
                @endif
            </li>
              {{-- profile-start --}}
              @include('backend.includes.profile')
              {{-- profile-end --}}
          </ul>
        </div>
      </div>
    </nav>
  </header>
