<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="{{url('dashboard')}}">
        <img src="{!! asset('img/logo.png') !!}" alt="logo" />
        <span>Orajen Marketing Inc.</span>
      </a>
      <a class="navbar-brand brand-logo-mini" href="index.html">
        <img src="{!! asset('images/logo-mini.svg') !!}" alt="logo" />
      </a>  
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">

    @yield('headerButton')
    
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown d-none d-xl-inline-block">
          <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <span class="profile-text">Hello, {{ Auth::user()->name }}!</span>
            <img class="img-xs rounded-circle" src="{!! asset('images/faces/face1.jpg') !!}" alt="Profile image">
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <a class="dropdown-item p-0">
              <div class="d-flex border-bottom">
                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                  <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                </div>
                <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                  <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                </div>
                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                  <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                </div>
              </div>
            </a>
            <a class="dropdown-item mt-2">
              Manage Accounts
            </a>
            <a class="dropdown-item">
              Change Password
            </a>
            <a class="dropdown-item">
              Check Inbox
            </a>
            <a class="dropdown-item" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              Sign Out
            </a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
  </nav>  