
            <aside id="aside" class="ui-aside">
                <ul class="nav" ui-nav>
                    <li class="nav-head">
                        <h5 class="nav-title text-uppercase light-txt">Navigation</h5>
                    </li>
                    <li class="active">
                        <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i><span>Dashboard</span></a>
                    </li>
                    <?php $u = Auth::user();?>
                    @if($u->roles->name == 'dev')
                    <li>
                        <a href="#"><i class="fa fa-users"></i><span>Users & Roles </span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li>
                                <a href=""><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="nav nav-sub">
                                    <li><a href="{{ action('UsersController@getAllUser') }}"><span>All Users </span></a></li>
                                    <li><a href="{{ action('UsersController@getUserCreate') }}"><span>Create User </span></a></li>
                                    <li><a href="{{ route('blockuser') }}"><span>Block User </span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=""><span>Role</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="nav nav-sub">
                                    <li><a href="{{ action('RolesController@index') }}"><span>All Roles </span></a></li>
                                    <li><a href="{{ action('RolesController@create') }}"><span>Create Role </span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=""><span>Permissions</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="nav nav-sub">
                                    <li><a href="{{ action('PermissionController@index') }}"><span> All Permissions </span></a></li>
                                    <li><a href="{{ action('PermissionController@create') }}"><span>Create Permission</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li>
                        <a href="#"><i class="fa fa-users"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li><a href="{{ route('alluser') }}"><span>All Users</span></a></li>
                            <li><a href="{{ route('blockuser') }}"><span>Block User</span></a></li>
                            <li><a href="{{ route('subscriber') }}"><span>Subscriber</span></a></li>
                        </ul>
                    </li>
                    @endif
                    


                    <li>
                        <a href="#"><i class="fa fa-server"></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href="#"><span>Settings</span></a></li>
                            <li><a href="{{ action('SettingsController@index') }}"><span>App Settings</span></a></li>
                            <li><a href="{{ action('MetaSettingsController@index') }}"><span>Meta Settings</span></a></li>
                        </ul>
                    </li>

                </ul>
            </aside>