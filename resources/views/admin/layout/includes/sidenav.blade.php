{{-- Side Navigation --}}
<br />
<br />
<br />
<br />
<div class="col-md-3">
    <div class="sidebar content-box" style="margin-left:20px; moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
    -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5); display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Products
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('admin.index')}}">Add Product</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->
