<!--Header-->
<header class="layout_default">
  <div class="topbar grey">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <p>We are Best in Town With 40 years of Experience.</p>
        </div>
        <div class="col-md-7 text-right">
          <ul class="breadcrumb_top text-right">
            <li><a href="favorites"><i class="icon-icons43"></i>Favorites</a></li>
      <li><a href="submit"><i class="icon-icons215"></i>Submit Property</a></li>
      <li><a href="myproperty"><i class="icon-icons215"></i>My Property</a></li>
      <li><a href="profile"><i class="icon-icons230"></i>Profile</a></li>
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Header 1 ends -->

<!-- Header-->
<!-- <div id="mainMenuBarAnchor"></div>
<header class="white_header">
  <nav class="navbar navbar-default bootsnav">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="attr-nav">
            <div class="upper-column info-box first">
              <div class="icons"><i class="icon-telephone114"></i></div>
              <ul>
                <li><strong>Phone Number</strong></li>
                <li>+1 900 234 567 - 68</li>
              </ul>
            </div>
          </div>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index6.html"><img src="images/logo.png" class="logo" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
        
            <li><a href="properties1">Properties</a></li>

            <li><a href="sale">Buy</a></li>
            <li><a href="rent">Rent</a></li>
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Features </a>
                <ul class="dropdown-menu">
                  <li class="dropdown">
                    <a href="news" >News</a>
                    
                  </li>
                  <li class="dropdown">
                  <li><a href="agents">Agents</a></li>
                   
                  <li class="dropdown">
                  <a href="testimonial" >Testimonials</a>
                 
                  </li>
                  <li class="dropdown">
                  <a href="faq" >FAQ's</a>
                  
                  </li>
                  
                  <li class="dropdown">
                  <a href="404" >404 Error</a>
                  
                  </li>
                </ul>
              </li>
              <li><a href="contact">Contact Us</a></li>
           
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header> -->
<!--Header Ends -->