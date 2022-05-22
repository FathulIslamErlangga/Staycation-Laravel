<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ ($title === 'Dashboard Admin -Staycation') ? 'active' : '' }}">
                    <a href="/dashboard-admin"><i class
                        ="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Place Stay</li><!-- /.menu-title -->
                <li class="{{ ($title === 'list lodging') ? 'active' : '' }}">
                    <a href="{{ route('list-item.index') }}"> <i class="menu-icon fa fa-list"></i>List Lodging</a>
                </li>
                <li class="{{ ($title === 'add lodging') ? 'active' : '' }}">
                    <a href="{{ route('list-item.create') }}"> <i class="menu-icon fa fa-plus"></i>Add Lodging</a>
                </li>

                <li class="menu-title">Gallery</li><!-- /.menu-title -->
                <li class="{{ ($title === 'list gallery') ? 'active' : '' }}">
                    <a href="{{ route('list-gallery.index') }}"> <i class="menu-icon fa fa-list"></i>List Galleries</a>
                </li>
                <li class="{{ ($title === 'add gallery') ? 'active' : '' }}">
                    <a href="{{ route('list-gallery.create') }}"> <i class="menu-icon fa fa-plus"></i>Add galleries</a>
                </li>

                <li class="menu-title">activity</li><!-- /.menu-title -->
                <li class="{{ ($title === 'list activity') ? 'active' : '' }}">
                    <a href="{{ route('list-activity.index') }}"> <i class="menu-icon fa fa-list"></i>List activities</a>
                </li>
                <li class="{{ ($title === 'add activity') ? 'active' : '' }}">
                    <a href="{{ route('list-activity.create') }}"> <i class="menu-icon fa fa-plus"></i>Add Activity</a>
                </li>

                <li class="menu-title">Transaksi</li><!-- /.menu-title -->
                <li class="">
                    <a href="#"> <i class="menu-icon fa fa-list"></i>List Transaksi</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>