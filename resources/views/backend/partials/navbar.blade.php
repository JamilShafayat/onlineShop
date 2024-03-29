        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src mb-4">
                    <a href="{{ asset('home')}}">
                        <img src="{{ asset('public/assets/img/logo.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <!-- <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="{{ route('userType.index')}}" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                User Types
                            </a>
                        </li>
                    </ul>         -->
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <div class="widget-heading">
                                                {{ auth()->user()->user_name}}
                                            </div>
                                            <div class="widget-subheading">
                                                {{ auth()->user()->userType->name}}
                                            </div>
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                <h6 type="button" tabindex="-1" class="dropdown-header">
                                                    <a href="{{ asset('logout')}}">
                                                        Log Out
                                                    </a>
                                                </h6>
                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                <button type="button" tabindex="0" class="dropdown-item">User Profile</button>
                                                <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{ auth()->user()->user_name}}
                                    </div>
                                    <div class="widget-subheading">
                                        {{ auth()->user()->userType->name}}
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div> 