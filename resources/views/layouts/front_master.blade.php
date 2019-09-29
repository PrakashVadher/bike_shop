<!DOCTYPE html>
<html lang="en">

  
<!-- Mirrored from themes.hody.co/html/comet/page-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jun 2019 05:50:47 GMT -->
<head>
    <title>Bikes | Information About Bikes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('/public/front/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/front/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Halant:300,400" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{asset('/public/front/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('/public/front/js/bundle.js')}}"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','{{asset("/public/front/js/analytics.js")}}','ga');
      ga('create', 'UA-46276885-13', 'auto');
      ga('send', 'pageview');
    </script>
    @yield('stylesheets')
  </head>

  <body>
    <!-- Preloader-->
    <div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Preloader-->
    <!-- Navigation Bar-->
    @include('layouts.front_header')
    <!-- End Navigation Bar-->

    @yield('content')
    
    <!-- Footer-->
    @include('layouts.front_footer')


    @yield('scripts')
  </body>

</html>