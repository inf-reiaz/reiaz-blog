
            <aside id="aside" class="ui-aside">
                <ul class="nav" ui-nav>
                    <li class="nav-head">
                        <h5 class="nav-title text-uppercase light-txt">Navigation</h5>
                    </li>
                    <li class="{{ Request::is(['admin/dashboard']) ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i><span>Dashboard</span></a>
                    </li>
                    <?php $u = Auth::user();?>
                    @if($u->roles->name == 'dev')
                    <li class="{{ Request::is(['admin/all-user','admin/user-create','admin/block-user','admin/roles','admin/roles/create','admin/permissions','admin/permissions/create']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-users"></i><span>Users & Roles </span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub" style="{{ Request::is(['admin/all-user','admin/user-create','admin/block-user','admin/roles','admin/roles/create','admin/permissions','admin/permissions/create']) ? 'display: block' : '' }}">
                            <li class="{{ Request::is(['admin/all-user','admin/user-create','admin/block-user']) ? 'active' : '' }}">
                                <a href=""><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="nav nav-sub" style="{{ Request::is(['admin/all-user','admin/user-create','admin/block-user']) ? 'display: block' : '' }}">
                                    <li class="{{ Request::is( 'admin/all-user') ? 'active' : '' }}"><a href="{{ action('UsersController@getAllUser') }}"><span>All Users </span></a></li>
                                    <li class="{{ Request::is( 'admin/user-create') ? 'active' : '' }}"><a href="{{ action('UsersController@getUserCreate') }}"><span>Create User </span></a></li>
                                    <li class="{{ Request::is( 'admin/block-user') ? 'active' : '' }}"><a href="{{ route('blockuser') }}"><span>Block User </span></a></li>
                                </ul>
                            </li>
                            <li  class="{{ Request::is(['admin/roles','admin/roles/create']) ? 'active' : '' }}">
                                <a href=""><span>Role</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="nav nav-sub" style="{{ Request::is(['admin/roles','admin/roles/create']) ? 'display: block' : '' }}">
                                    <li class="{{ Request::is( 'admin/roles') ? 'active' : '' }}" ><a href="{{ action('RolesController@index') }}"><span>All Roles </span></a></li>
                                    <li class="{{ Request::is( 'admin/roles/create') ? 'active' : '' }}"><a href="{{ action('RolesController@create') }}"><span>Create Role </span></a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is(['admin/permissions','admin/permissions/create']) ? 'active' : '' }}">
                                <a href=""><span>Permissions</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="nav nav-sub" style="{{ Request::is(['admin/permissions','admin/permissions/create']) ? 'display: block' : '' }}">
                                    <li class="{{ Request::is( 'admin/permissions') ? 'active' : '' }}"><a href="{{ action('PermissionController@index') }}"><span> All Permissions </span></a></li>
                                    <li class="{{ Request::is( 'admin/permissions/create') ? 'active' : '' }}"><a href="{{ action('PermissionController@create') }}"><span>Create Permission</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="{{ Request::is(['admin/all-user','admin/user-create','admin/block-user','admin/subscriber']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-users"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub"  style="{{ Request::is(['admin/all-user','admin/user-create','admin/block-user','admin/subscriber']) ? 'display: block' : '' }}">
                            <li class="{{ Request::is('admin/all-user') ? 'active' : '' }}"><a href="{{ route('alluser') }}"><span>All Users</span></a></li>
                            <li class="{{ Request::is('admin/block-user') ? 'active' : '' }}"><a href="{{ route('blockuser') }}"><span>Block User</span></a></li>
                            <li class="{{ Request::is('admin/subscriber') ? 'active' : '' }}"><a href="{{ route('subscriber') }}"><span>Subscriber</span></a></li>
                        </ul>
                    </li>
                    @endif
                    
                    
                    <li class="{{ Request::is(['admin/about-me']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-clone"></i><span>About Me</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub" style="{{ Request::is(['admin/about-me']) ? 'display: block' : '' }}">
                            <li class="nav-sub-header"><a href="#"><span>About me</span></a></li>
                            <li class="{{ Request::is('admin/about-me') ? 'active' : '' }}"><a href="{{ action('AboutController@index') }}"><span>About me</span></a></li>
                        </ul>
                    </li>
                    
                    <li class="{{ Request::is(['admin/sliders','admin/sliders/create']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-clone"></i><span>Sliders</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub" style="{{ Request::is(['admin/sliders','admin/sliders/create']) ? 'display: block' : '' }}">
                            
                            <li class="nav-sub-header"><a href="#"><span>Add New Slider</span></a></li>
                            
                            <li class="{{ Request::is('admin/sliders') ? 'active' : '' }}"><a href="{{ action('SliderController@index') }}"><span>All Sliders</span></a></li>
                            <li class="{{ Request::is('admin/sliders/create') ? 'active' : '' }}"><a href="{{ action('SliderController@create') }}"><span>Add New Sidder</span></a></li>
                            
                        </ul>
                    </li>
                    
                    <li class="{{ Request::is(['admin/posts','admin/posts/create']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-clone"></i><span>All Posts</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub" style="{{ Request::is(['admin/posts','admin/posts/create']) ? 'display: block' : '' }}">
                            <li class="nav-sub-header"><a href="#"><span>Create Post</span></a></li>
                            <li class="{{ Request::is('admin/posts') ? 'active' : '' }}"><a href="{{ action('PostsController@index') }}"><span>All Posts</span></a></li>
                            <li class="{{ Request::is('admin/posts/create') ? 'active' : '' }}"><a href="{{ action('PostsController@create') }}"><span>Create Post</span></a></li>
                        </ul>
                    </li>
                    
                    <li class="{{ Request::is(['admin/category','admin/category/create']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-clone"></i><span>All Category</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub" style="{{ Request::is(['admin/category','admin/category/create']) ? 'display: block' : '' }}">
                            <li class="nav-sub-header"><a href="#"><span>Category</span></a></li>
                            <li class="{{ Request::is('admin/category') ? 'active' : '' }}"><a href="{{ action('CategoryController@index') }}"><span>All Categories</span></a></li>
                            <li class="{{ Request::is('admin/category/create') ? 'active' : '' }}"><a href="{{ action('CategoryController@create') }}"><span>Add new Category</span></a></li>
                        </ul>
                    </li>
                    
                    <li class="{{ Request::is(['admin/tag','admin/tag/create']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-clone"></i><span>All Tags</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub" style="{{ Request::is(['admin/tag','admin/tag/create']) ? 'display: block' : '' }}">
                            <li class="nav-sub-header"><a href="#"><span>Tags</span></a></li>
                            <li class="{{ Request::is('admin/tag') ? 'active' : '' }}"><a href="{{ action('TagsController@index') }}"><span>All Tags</span></a></li>
                            <li class="{{ Request::is('admin/tag/create') ? 'active' : '' }}"><a href="{{ action('TagsController@create') }}"><span>Create Tag</span></a></li>
                        </ul>
                    </li>
                    
                    <li class="{{ Request::is(['admin/subscriber']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-clone"></i><span>Subscribe</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub" style="{{ Request::is(['admin/subscriber']) ? 'display: block' : '' }}">
                            
                            <li class="nav-sub-header"><a href="#"><span>Greeting</span></a></li>
                            
                            <li class="{{ Request::is('admin/subscriber') ? 'active' : '' }}"><a href="{{ action('SubscriberController@getSubscriber') }}"><span>Send Greeting</span></a></li>
                            
                        </ul>
                    </li>
                    
                    <li class="{{ Request::is(['admin/videos']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-clone"></i><span>Videos</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub" style="{{ Request::is(['admin/videos']) ? 'display: block' : '' }}">
                            
                            <li class="nav-sub-header"><a href="#"><span>Videos</span></a></li>
                            
                            <li class="{{ Request::is('admin/videos') ? 'active' : '' }}"><a href="{{ action('VideosController@index') }}"><span>Videos</span></a></li>
                            
                        </ul>
                    </li>
                    
                    
                </ul>
            </aside>
            
            