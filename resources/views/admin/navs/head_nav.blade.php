
            <header id="header" class="ui-header">

                <div class="navbar-header">
                    
                    <a href="{{ route('dashboard') }}" class="navbar-brand">
                        <span class="logo">
                            <img src="/public/admin/imgs/logo-dark.png" alt="" style="width: 60%;">
                        </span>
                        <span class="logo-compact"><img src="/public/adminimgs/logo-icon-dark.png" alt=""/></span>
                    </a>
                    
                </div>

                <div class="search-dropdown dropdown pull-right visible-xs">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-search"></i></button>
                    <div class="dropdown-menu">
                        <form >
                            <input class="form-control" placeholder="Search here..." type="text">
                        </form>
                    </div>
                </div>

                <div class="navbar-collapse nav-responsive-disabled">

                    
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="toggle-btn" data-toggle="ui-nav" href="#">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                    
                    <form class="search-content hidden-xs" >
                        <button type="submit" name="search" class="btn srch-btn">
                            <i class="fa fa-search"></i>
                        </button>
                        <input type="text" class="form-control" name="keyword" placeholder="Search here...">
                    </form>
                    
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge">1</span>
                            </a>
                            
                            <ul class="dropdown-menu dropdown-menu--responsive">
                                <div class="dropdown-header">Messages (1)</div>
                                <ul class="Message-list niceScroll list-group">
                                    <li class="Message list-group-item">
                                        <button class="Message__status Message__status--read" type="button" name="button"></button>
                                        <a href="#">
                                            <div class="Message__avatar Message__avatar--danger pull-left" href="#">
                                                <img src="/public/admin/imgs/a2.jpg" alt="...">
                                            </div>
                                            <div class="Message__highlight">
                                                <span class="Message__highlight-name">Lubida Teresa</span>
                                                <p class="Message__highlight-excerpt">Hello there! Can you send me a photo please?</p>
                                                <p class="Message__highlight-time">1 hour ago</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-footer"><a href="#">View all</a></div>
                            </ul>
                            
                        </li>

                        <?php $u = Auth::user();?>
                        <li class="dropdown dropdown-usermenu">
                            <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="user-avatar"><img height="30px" width="30px" src="{{ $u->user_photo }}" alt="{{ $u->username }}"></div>
                                <span class="hidden-sm hidden-xs">{{ $u->username }}</span>
                                <span class="caret hidden-sm hidden-xs"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                <li><a href="{{ route('myprofile',$u->id) }}"><i class="fa fa-user"></i>  Profile</a></li>
                                <li><a href="{{ route('changepassword') }}"><i class="fa fa-user"></i>  Change Password</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li>
                            <a data-toggle="ui-aside-right" href="#"><i class="glyphicon glyphicon-option-vertical"></i></a>
                        </li>
                        
                    </ul>
                    

                </div>

            </header>