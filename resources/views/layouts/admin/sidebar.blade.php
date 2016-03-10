<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </li>
            <li class="active">
                <a href="{{ route('admin.dashboard') }}"><i class="fa fa-home fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ route('admin.categories.index') }}"><i class="fa fa-archive fa-fw"></i> Categories</a>
            </li>
            <li>
                <a href="{{ route('admin.products.index') }}"><i class="fa fa-shopping-cart fa-fw"></i> Products</a>
            </li>
            <li>
                <a href=""><i class="fa fa-user fa-fw"></i> Clients</a>
            </li>
            <li>
                <a href=""><i class="fa fa-credit-card fa-fw"></i> Orders</a>
            </li>
            <li>
                <a href=""><i class="fa fa-clock-o fa-fw"></i> Schedules</a>
            </li>
        </ul>
    </div>
</div>
