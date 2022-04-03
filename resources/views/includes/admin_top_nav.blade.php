<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a class="active-menu waves-effect waves-dark" href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="#" class="waves-effect waves-dark"><i class="fa fa-users"></i> Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('users.index') }}">All Users</a>
                    </li>
                    <li>
                        <a href="{{ route('users.create') }}">Create User</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect waves-dark"><i class="fa fa-edit"></i> Posts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('posts.index') }}">All Posts</a>
                    </li>
                    <li>
                        <a href="{{ route('posts.create') }}">Create Post</a>
                    </li>
                </ul>
            </li>
            </li>
            <li>
                <a href="{{ route('admin.messages.index') }}" class="waves-effect waves-dark"><i class="fa fa-comments"></i> Messages</a>
            </li>

            <li>
                <a href="{{ route('admin.friendships.index') }}" class="waves-effect waves-dark"><i class="fa fa-user-plus"></i> Friendships</a>
            </li>
        </ul>
    </div>
</nav>