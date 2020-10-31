
<!DOCTYPE html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Twitter -->
        <meta name="twitter:site" content="@themepixels">
        <meta name="twitter:creator" content="@themepixels">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="DashForge">
        <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
        <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
    
        <!-- Facebook -->
        <meta property="og:url" content="http://themepixels.me/dashforge">
        <meta property="og:title" content="DashForge">
        <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">
    
        <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
        <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
        <meta property="og:image:type" content="{{asset('style/image/png')}}">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="600">
    
        <!-- Meta -->
        <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
        <meta name="author" content="ThemePixels">
    
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('style/img/favicon.png')}}">

    <title>@yield('title')</title>

       <!-- vendor css -->
       <link href="{{asset('style/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
       <link href="{{asset('style/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
       <link href="{{asset('style/lib/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{asset('style/css/dashforge.css')}}">
    <link rel="stylesheet" href="{{asset('style/css/dashforge.dashboard.css')}}">
  </head>
  <body>

    <aside class="aside aside-fixed">
     @yield('sidebar')
    </aside>

    <div class="content ht-100v pd-0">
      <div class="content-header">
        <div class="content-search">
          <i data-feather="search"></i>
          <input type="search" class="form-control" placeholder="Search...">
        </div>
        <nav class="nav">
          <a href="" class="nav-link"><i data-feather="help-circle"></i></a>
          <a href="" class="nav-link"><i data-feather="grid"></i></a>
          <a href="" class="nav-link"><i data-feather="align-left"></i></a>
        </nav>
      </div><!-- content-header -->

      <div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sales Monitoring</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
            </div>
            <div class="d-none d-md-block">
              <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="mail" class="wd-10 mg-r-5"></i> Email</button>
              <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="printer" class="wd-10 mg-r-5"></i> Print</button>
              <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="file" class="wd-10 mg-r-5"></i> Generate Report</button>
            </div>
          </div>
            @yield('content')
      </div>
     </div>
    </div>

    <script src="{{asset('style/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('style/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('style/lib/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('style/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('style/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('style/lib/jquery.flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('style/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('style/lib/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('style/lib/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('style/lib/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

    <script src="{{asset('style/js/dashforge.js')}}"></script>
    <script src="{{asset('style/js/dashforge.aside.js')}}"></script>
    <script src="{{asset('style/js/dashforge.sampledata.js')}}"></script>
    <script src="{{asset('style/js/dashboard-one.js')}}"></script>

    <!-- append theme customizer -->
    <script src="{{asset('style/lib/js-cookie/js.cookie.js')}}"></script>
    {{-- <script src="{{asset('style/js/dashforge.settings.js')}}"></script> --}}
  </body>
</html>
