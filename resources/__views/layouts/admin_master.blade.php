<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Admin - Bike Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <link rel="icon" href="assets/images/favicon.ico">

    <meta name="msapplication-tap-highlight" content="no">

<link href="{{asset('/back_end_admin/assets/style.css')}}" rel="stylesheet">
 @yield('stylesheets')
</head>
    <body>
        <div class="app-container app-theme-gray app-sidebar-full">
                <div class="app-main">
                    @include('layouts.admin_sidebar')
                    <div class="app-main__outer">
                        <div class="app-main__inner">
                            @include('layouts.admin_header')     
                            @if(session('success'))
                                <div class="alert alert-success">
                                  {{ session('success') }}
                                </div> 
                            @endif               
                            <div class="app-inner-layout app-inner-layout-page">
                                <div class="app-inner-layout__wrapper">
                                    <div class="app-inner-layout__content">
                                        <div class="tab-content">
                                            <div class="container-fluid">
                                                @yield('content')
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                        @include('layouts.admin_footer')
                    </div>
                </div>
                <!-- @include('layouts.admin_ui_theme_settings') -->
        </div>
        <!-- @include('layouts.admin_server_status') -->
        <script type="text/javascript" src="{{URL::to('/')}}/back_end_admin/assets/scripts/main.js"></script>
        @yield('scripts')
    </body>
</html>
