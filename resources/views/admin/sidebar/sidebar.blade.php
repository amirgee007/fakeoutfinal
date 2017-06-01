
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRDLYFFVbiuptyAUVHszkKCcwT12whhXDHUIIRhDHltRTk8fr5c8WzX4DY" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin Panel</p>
                <a href="#" ><i class="fa fa-circle text-success"></i> Online</a>

            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <br/>
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>


            <li class="treeview {{ (Request::is('admin/dashboard') ? 'active' : '')}}">
                <a href="{{route('get.dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>


            <li class="treeview {{ (Request::is('admin/user') ? 'active' : '') }}">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Users</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('user.index')}}"><i class="fa fa-circle-o text-red"></i> Add New </a></li>
                    <li><a href="{{route('user.index')}}"><i class="fa fa-circle-o text-yellow"></i> View All</a></li>
                </ul>
            </li>

            <li class="treeview {{ (Request::is('admin/event') ? 'active' : '') }}">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Events</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('event.index')}}"><i class="fa fa-circle-o text-red"></i> Add New </a></li>
                    <li><a href="{{route('event.index')}}"><i class="fa fa-circle-o text-yellow"></i> View All</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
