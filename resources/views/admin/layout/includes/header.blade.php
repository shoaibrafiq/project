<div class="header">

        <div class="row">

<!--this page is the header for the admin index page when logged in -->

                <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <a class="navbar-brand"  href="{{route('home')}}">ICB Admin</a>

                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu animated fadeInUp">
                                    <li><a href="{{url('/')}}">Main Site</a></li>
                                    <li><a href="{{url('/logout')}}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

        </div>
    </div>
