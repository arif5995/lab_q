@extends('layouts.main')

@section('title', 'register')

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
  <div class="media align-items-stretch justify-content-center ht-100p">
    <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60 form-row">
      <div class="pd-t-20 wd-100p">
        <h4 class="tx-color-01 mg-b-5">Create New Account</h4>
        <p class="tx-color-03 tx-16 mg-b-40">It's free to signup and only takes a minute.</p>
        <form method="POST" action="/register">
          @csrf
        <div class="form-group">
          <label for="company">Name Company</label>
            <input type="text" class="form-control @error('company') is-invalid @enderror" name="company" id="company" aria-describedby="FeedName" placeholder="Enter Name Company" value="{{old('company')}}">
            @error('company')
            <div class="invalid-feedback">
              Please enter name Company.
            </div> 
            @enderror
        </div>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email address" value="{{old('email')}}">
          @error('email')
          <div class="invalid-feedback">
            Please enter name email.
          </div> 
          @enderror
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="Password" class="form-control @error('Password') is-invalid @enderror" id="Password" name="Password" placeholder="Enter your Password address" value="{{old('Password')}}">
          @error('Password')
          <div class="invalid-feedback">
            Please enter name Password.
          </div> 
          @enderror
        </div>

        <div class="form-group">
          <label for="password_confirmation">Confirm Password</label>
          <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Enter your password confirmation address" value="{{old('password_confirmation')}}">
          @error('password_confirmation')
          <div class="invalid-feedback">
            Please enter right password.
          </div> 
          @enderror
        </div>

        <div class="form-group">
          <label for="no_telp">No. HP</label>
            <input type="number" class="form-control @error('noTelp') is-invalid @enderror" name="noTelp" id="no_telp" aria-describedby="FeedName" placeholder="Masukkan Nomor Telp." value="{{old('noTelp')}}">
              @error('noTelp')
              <div class="invalid-feedback">
                Please enter name No. Telp.
              </div> 
            @enderror
        </div>
        
        <div class="form-group">
          <label for="firstName">Firstname</label>
          <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" id="firstName" placeholder="Enter your firstname" value="{{old('firstname')}}">
          @error('firstname')
          <div class="invalid-feedback">
            Please enter firstname
          </div> 
          @enderror
        </div>

        <div class="form-group">
          <label for="lastname">Lastname</label>
          <input type="text" class="form-control  @error('lastname') is-invalid @enderror" name="lastname" id="lastname" placeholder="Enter your lastname" value="{{old('lastname')}}" >
          @error('lastname')
          <div class="invalid-feedback">
            Please enter name lastname
          </div> 
          @enderror
        </div>

        <div class="form-group tx-12">
          By clicking <strong>Create an account</strong> below, you agree to our terms of service and privacy statement.
        </div><!-- form-group -->

        <button class="btn btn-brand-02 btn-block" type="submit">Create Account</button>
      </form>
        <div class="divider-text">or</div>
        {{-- <button class="btn btn-outline-facebook btn-block">Sign Up With Facebook</button>
        <button class="btn btn-outline-twitter btn-block">Sign Up With Twitter</button> --}}
        <div class="tx-13 mg-t-20 tx-center">Already have an account? <a href="page-signin.html">Sign In</a></div>
      </div>
    </div><!-- sign-wrapper -->
    <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
      <div class="mx-lg-wd-500 mx-xl-wd-550">
        <img src="{{asset('style/img/hospital_register.jpg')}}" class="img-fluid" alt="">
      </div>
      <div class="pos-absolute b-0 r-0 tx-12">
        Social media marketing vector is created by <a href="https://www.freepik.com/pikisuperstar" target="_blank">pikisuperstar (freepik.com)</a>
      </div>
    </div><!-- media-body -->
  </div><!-- media -->
</div><!-- container -->
@endsection