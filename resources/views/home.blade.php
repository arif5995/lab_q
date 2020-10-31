@extends('layouts.main')

@section('title', 'home')

@section('navbar')
<div class="navbar-brand">
    <a href="/register" class="df-logo">Lab<span>Q</span></a>
  </div><!-- navbar-brand -->
  <div id="navbarMenu" class="navbar-menu-wrapper">
    <div class="navbar-menu-header">
      <a href="/register" class="df-logo">Lab<span>Q</span></a>
      <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
    </div><!-- navbar-menu-header -->
    <ul class="nav navbar-menu">
      <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
      <li class="nav-item with-sub">
        <a href="" class="nav-link"><i data-feather="pie-chart"></i> Dashboard</a>
        <ul class="navbar-menu-sub">
          <li class="nav-sub-item"><a href="/register" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Sales Monitoring</a></li>
          <li class="nav-sub-item"><a href="/register" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Website Analytics</a></li>
          <li class="nav-sub-item"><a href="/register" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Cryptocurrency</a></li>
          <li class="nav-sub-item"><a href="/register" class="nav-sub-link"><i data-feather="bar-chart-2"></i>Helpdesk Management</a></li>
        </ul>
      </li>
      <li class="nav-item with-sub">
        <a href="" class="nav-link"><i data-feather="package"></i> Apps</a>
        <ul class="navbar-menu-sub">
          <li class="nav-sub-item"><a href="app-calendar.html" class="nav-sub-link"><i data-feather="calendar"></i>Calendar</a></li>
          <li class="nav-sub-item"><a href="app-chat.html" class="nav-sub-link"><i data-feather="message-square"></i>Chat</a></li>
          <li class="nav-sub-item"><a href="app-contacts.html" class="nav-sub-link"><i data-feather="users"></i>Contacts</a></li>
          <li class="nav-sub-item"><a href="app-file-manager.html" class="nav-sub-link"><i data-feather="file-text"></i>File Manager</a></li>
          <li class="nav-sub-item"><a href="app-mail.html" class="nav-sub-link"><i data-feather="mail"></i>Mail</a></li>
        </ul>
      </li>
      <li class="nav-item with-sub">
        <a href="" class="nav-link"><i data-feather="layers"></i> Pages</a>
        <div class="navbar-menu-sub">
          <div class="d-lg-flex">
            <ul>
              <li class="nav-label">Authentication</li>
              <li class="nav-sub-item"><a href="page-signin.html" class="nav-sub-link"><i data-feather="log-in"></i> Sign In</a></li>
              <li class="nav-sub-item"><a href="page-signup.html" class="nav-sub-link"><i data-feather="user-plus"></i> Sign Up</a></li>
              <li class="nav-sub-item"><a href="page-verify.html" class="nav-sub-link"><i data-feather="user-check"></i> Verify Account</a></li>
              <li class="nav-sub-item"><a href="page-forgot.html" class="nav-sub-link"><i data-feather="shield-off"></i> Forgot Password</a></li>
              <li class="nav-label mg-t-20">User Pages</li>
              <li class="nav-sub-item"><a href="page-profile-view.html" class="nav-sub-link"><i data-feather="user"></i> View Profile</a></li>
              <li class="nav-sub-item"><a href="page-connections.html" class="nav-sub-link"><i data-feather="users"></i> Connections</a></li>
              <li class="nav-sub-item"><a href="page-groups.html" class="nav-sub-link"><i data-feather="users"></i> Groups</a></li>
              <li class="nav-sub-item"><a href="page-events.html" class="nav-sub-link"><i data-feather="calendar"></i> Events</a></li>
            </ul>
            <ul>
              <li class="nav-label">Error Pages</li>
              <li class="nav-sub-item"><a href="page-404.html" class="nav-sub-link"><i data-feather="file"></i> 404 Page Not Found</a></li>
              <li class="nav-sub-item"><a href="page-500.html" class="nav-sub-link"><i data-feather="file"></i> 500 Internal Server</a></li>
              <li class="nav-sub-item"><a href="page-503.html" class="nav-sub-link"><i data-feather="file"></i> 503 Service Unavailable</a></li>
              <li class="nav-sub-item"><a href="page-505.html" class="nav-sub-link"><i data-feather="file"></i> 505 Forbidden</a></li>
              <li class="nav-label mg-t-20">Other Pages</li>
              <li class="nav-sub-item"><a href="page-timeline.html" class="nav-sub-link"><i data-feather="file-text"></i> Timeline</a></li>
              <li class="nav-sub-item"><a href="page-pricing.html" class="nav-sub-link"><i data-feather="file-text"></i> Pricing</a></li>
              <li class="nav-sub-item"><a href="page-help-center.html" class="nav-sub-link"><i data-feather="file-text"></i> Help Center</a></li>
              <li class="nav-sub-item"><a href="page-invoice.html" class="nav-sub-link"><i data-feather="file-text"></i> Invoice</a></li>
            </ul>
          </div>
        </div><!-- nav-sub -->
      </li>
      <li class="nav-item"><a href="../../components/" class="nav-link"><i data-feather="box"></i> Components</a></li>
      <li class="nav-item"><a href="../../collections/" class="nav-link"><i data-feather="archive"></i> Collections</a></li>
    </ul>
  </div><!-- navbar-menu-wrapper -->
  <div class="navbar-right">
    <a href="http://dribbble.com/themepixels" class="btn btn-social"><i class="fab fa-dribbble"></i></a>
    <a href="https://github.com/themepixels" class="btn btn-social"><i class="fab fa-github"></i></a>
    <a href="https://twitter.com/themepixels" class="btn btn-social"><i class="fab fa-twitter"></i></a>
    {{-- <a href="https://themeforest.net/item/azia-responsive-bootstrap-4-dashboard-template/22983790" class="btn btn-buy"><i data-feather="shopping-bag"></i> <span>Buy Now</span></a> --}}
  </div><!-- navbar-right -->
@endsection

@section('content')
<div class="container">
    <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
      <div class="media-body align-items-center d-none d-lg-flex">
        <div class="mx-wd-600">
          <img src="{{asset('style/img/hospital_main.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="pos-absolute b-0 l-0 tx-12 tx-center">
          Workspace design vector is created by <a href="https://www.freepik.com/pikisuperstar" target="_blank">pikisuperstar (freepik.com)</a>
        </div>
      </div><!-- media-body -->
      <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
        <div class="wd-100p">
          <h3 class="tx-color-01 mg-b-5">Sign In</h3>
          <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please signin to continue.</p>
          @if(\Session::has('alert'))
          <div class="alert alert-danger">
              <div>{{Session::get('alert')}}</div>
          </div>
          @endif
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
          @if(\Session::has('alert-success'))
              <div class="alert alert-success">
                  <div>{{Session::get('alert-success')}}</div>
              </div>
          @endif
          <form action="/" method="POST">
            @csrf
          <div class="form-group">
            <label>Email address</label>
            <input type="email" name="email" class="form-control" placeholder="yourname@yourmail.com" value="{{old('email')}}">
            @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
          </div>
          <div class="form-group">
            <div class="d-flex justify-content-between mg-b-5">
              <label class="mg-b-0-f">Password</label>
              <a href="" class="tx-13">Forgot password?</a>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Enter your password" value="{{old('password')}}">
            @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
          <button class="btn btn-brand-02 btn-block" >Sign In</button>
        </form>
          <div class="divider-text">or</div>
          {{-- <button class="btn btn-outline-facebook btn-block">Sign In With Facebook</button>
          <button class="btn btn-outline-twitter btn-block">Sign In With Twitter</button> --}}
          <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="/register">Create an Account</a></div>
        </div>
      </div><!-- sign-wrapper -->
    </div><!-- media -->
  </div><!-- container -->
@endsection