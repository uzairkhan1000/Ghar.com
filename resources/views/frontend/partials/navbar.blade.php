<!--Header-->
<header class="layout_default">
    <div class="topbar grey">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p>We are Best in Town With 40 years of Experience.</p>
                </div>
                <div class="col-md-9 text-right">
                    <ul class="breadcrumb_top text-right">
                        <li><a href="./"><i class="icon-home"></i>Home</a></li>

                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>

                        @endif

                        @else
                        

                        <li><a href="favorites"><i class="icon-icons43"></i>Favorites</a></li>
                        <li><a href="submit"><i class="icon-icons215"></i>Add Property</a></li>
                        <li><a href="myproperty"><i class="icon-icons215"></i>My Property</a></li>
                        <li><a href="profile"><i class="icon-icons230"></i>Profile</a></li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle ml-2" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}<img src="./uploads/users/{{Auth::user()->profile_pic}}"
                                    class="img-responsive user_img" alt="image" />
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @if(Auth::user()->role_id==1)
                        <li><a href="admin" class=" btn-blue border_radius btn " style="color:White;">Admin Panel</a></li>
                        @endif
                        
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    
