<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','ICB Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body>
@include('admin.layout.includes.header')
<!--this page is the admin index page when logged in, the sidenav and header are included here -->
    <div class="row">
        @include('admin.layout.includes.sidenav')
        <div class="col-md-10 display-area">
            <div class="row text-center">
                <div class="col-md-10 col-md-offset-1">
                    <div class="content-box-large">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div><!--/Display area after sidenav-->

</div><!--/Page Content-->

<script src="{{asset('dist/js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>

</body>
</html>
