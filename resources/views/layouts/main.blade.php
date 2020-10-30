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
    
        <title>@yield('title') - LabQ</title>
    
        <!-- vendor css -->
        <link href="{{asset('style/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('style/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    
        <!-- DashForge CSS -->
        <link rel="stylesheet" href="{{asset('style/css/dashforge.css')}}">
        <link rel="stylesheet" href="{{asset('style/css/dashforge.auth.css')}}">
      </head>
  <body>

    <header class="navbar navbar-header navbar-header-fixed">
      <a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>

      @yield('navbar')

      
    </header><!-- navbar -->

    <div class="content content-fixed content-auth">
      
    @yield('content')

      
    </div><!-- content -->

    {{-- <footer class="footer">
      <div>
        <span>&copy; 2019 DashForge v1.0.0. </span>
        <span>Created by <a href="http://themepixels.me">ThemePixels</a></span>
      </div>
      <div>
        <nav class="nav">
          <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
          <a href="../../change-log.html" class="nav-link">Change Log</a>
          <a href="https://discordapp.com/invite/RYqkVuw" class="nav-link">Get Help</a>
        </nav>
      </div>
    </footer> --}}

    <script src="{{asset('style/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('style/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('style/lib/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('style/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

    <script src="{{asset('style/js/dashforge.js')}}"></script>

    <!-- append theme customizer -->
    <script src="{{asset('style/lib/js-cookie/js.cookie.js')}}"></script>
    {{-- <script src="{{asset('style/js/dashforge.settings.js')}}"></script> --}}
    <script>
      $(function(){
        'use script'

        window.darkMode = function(){
          $('.btn-white').addClass('btn-dark').removeClass('btn-white');
        }

        window.lightMode = function() {
          $('.btn-dark').addClass('btn-white').removeClass('btn-dark');
        }

        var hasMode = Cookies.get('df-mode');
        if(hasMode === 'dark') {
          darkMode();
        } else {
          lightMode();
        }
      })
    </script>
  </body>
</html>
