@extends('frontend.layouts.default-layout')
@section('content')
<!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>
 <!--Loader-->               
                

<!--Slider-->
<div class="rev_slider_wrapper">
  <div id="rev_overlaped" class="rev_slider"  data-version="5.0">
    <ul>
      <!-- SLIDE -->
      <li data-transition="fade">
        <img src="images/home1-banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">							
      </li>
      <li data-transition="fade">
        <img src="images/home1-banner2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">							
      </li>
      <li data-transition="fade">
        <img src="images/home1-banner3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">							
      </li>
      <div class="tp-static-layers">
        <div class="tp-caption tp-static-layer" 
          id="slide-37-layer-2" 
          data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
          data-y="['bottom','bottom','bottom','bottom']" data-voffset="['230','180','150','100']"  
          data-whitespace="nowrap"
          data-visibility="['on','on','on','on']"
          data-fontsize="['48','48','28','28']"
          data-start="500" 
          data-responsive_offset="on"
          data-basealign="slide" 
          data-startslide="0" 
          data-endslide="5" 
          style="z-index: 5;">
          <h1><span class="t_white">We Can Find just Right <br>Property for You.</span></h1>
        </div>
        <div class="tp-caption tp-static-layer" 
          id="slide-37-layer-2" 
          data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
          data-y="['bottom','bottom','bottom','bottom']" data-voffset="['150','100','120','120']" 
          data-whitespace="nowrap"
          data-visibility="['on','on','on','on']"
          data-start="500" 
          data-basealign="slide" 
          data-startslide="0" 
          data-endslide="5" 
          style="z-index: 5;">
          <p class="t_white">We Deal with Different kinds of Properties No matter you need a House, 
            an Apartment or garage. <br> You’ll find a good option on our Theme.
          </p>
        </div>
        <div class="tp-caption tp-static-layer" 
          id="slide-37-layer-2" 
          data-x="['left','left','left','left']" data-hoffset="['50','50','50','50']" 
          data-y="['bottom','bottom','bottom','bottom']" data-voffset="['60','60','60','60']" 
          data-whitespace="nowrap"
          data-visibility="['on','on','on','on']"
          data-start="500" 
          data-basealign="slide" 
          data-startslide="0" 
          data-endslide="5" 
          style="z-index: 5;"><a href="listing1.html" class="btn-white border_radius uppercase">view Properties</a>
        </div>
      </div>
    </ul>
  </div>
</div>
<!--Slider ends-->


<!--Header-->
<div id="mainMenuBarAnchor"></div>
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
              <li class="dropdown active">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Home </a>
                <ul class="dropdown-menu">
                  <li><a href="index.html">Home Style 1</a></li>
                  <li><a href="index2.html">Home Style 2</a></li>
                  <li><a href="index3.html">Home Style 3</a></li>
                  <li><a href="index4.html">Home Style 4</a></li>
                  <li> <a href="index5.html">Home Style 5</a></li>
                  <li> <a href="index6.html">Home Style 6</a></li>
                  <li> <a href="index7.html">Home Style 7</a></li>
                  <li> <a href="index8.html">Home Style 8</a></li>
                  <li> <a href="index9.html">Home Style 9</a></li>
                  <li> <a href="fullscreen.html">Home Fullscreen<span>new</span></a></li>
                </ul>
              </li>
              <li class="dropdown megamenu-fw">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Listing</a>
                <ul class="dropdown-menu megamenu-content" role="menu">
                  <li>
                    <div class="row">
                      <div class="col-menu col-md-3">
                        <h5 class="title">PROPERTIES LIST</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="listing1.html">Properties List</a></li>
                            <li><a href="index7.html">Single Property</a></li>
                            <li><a href="listing2.html">Search by City</a></li>
                            <li><a href="listing5.html">Search by Category</a></li>
                            <li><a href="listing3.html">Search by Type</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-9">
                        <h5 class="title bottom20">PROPERTIES LIST</h5>
                        <div class="row">
                          <div id="nav_slider" class="owl-carousel">
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail1.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider2.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail2.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider3.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail3.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail1.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider2.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail2.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider3.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail3.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown megamenu-fw">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
                <ul class="dropdown-menu megamenu-content bg" role="menu">
                  <li>
                    <div class="row">
                      <div class="col-menu col-md-3">
                        <h5 class="title">PROPERTY LISTINGS</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="listing1.html">List Style 1</a></li>
                            <li><a href="listing2.html">List Style 2</a></li>
                            <li><a href="listing3.html">List Style 3</a></li>
                            <li><a href="listing4.html">List Style 4</a></li>
                            <li><a href="listing5.html">List Style 5</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-3">
                        <h5 class="title">PROPERTY LISTINGS</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="listing6.html">List Style 5</a></li>
                            <li><a href="listing7.html">List Style 6</a></li>
                            <li><a href="listing1.html">Search by City</a></li>
                            <li><a href="listing2.html">Search by Category</a></li>
                            <li><a href="listing3.html">Search by Type</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-3">
                        <h5 class="title">PROPERTY DETAIL</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="property_detail1.html">Property Detail 1</a></li>
                            <li><a href="property_detail2.html">Property Detail 2</a></li>
                            <li><a href="property_detail3.html">Property Detail 3</a></li>
                            <li><a href="index7.html">Single Property</a></li>
                            <li><a href="listing4.html">Search by Type</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-3">
                        <h5 class="title">OTHER PAGES</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="favorite_properties.html">Favorite Properties</a></li>
                            <li><a href="agent_profile.html">Agent Profile</a></li>
                            <li><a href="404.html">404 Error</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="testimonial.html">Testimonials</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Features </a>
                <ul class="dropdown-menu">
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown">News</a>
                    <ul class="dropdown-menu">
                      <li><a href="news.html">news Style1</a></li>
                      <li><a href="news2.html">news Style2<span>new</span></a></li>
                      <li><a href="news3.html">news Style3<span>new</span></a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown">Property Agents</a>
                    <ul class="dropdown-menu">
                      <li><a href="agent1.html">Agent Style1</a></li>
                      <li><a href="agent2.html">Agent Style2</a></li>
                      <li><a href="agent3.html">Agent Style3<span>new</span></a></li>
                      <li><a href="agent4.html">Agent Style4<span>new</span></a></li>
                      <li><a href="agent5.html">Agent Style5<span>new</span></a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown">Agetn Profile Styles</a>
                    <ul class="dropdown-menu">
                      <li><a href="agent_profile.html">Agent Profile 1</a></li>
                      <li><a href="agent_profile2.html">Agent Profile 2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Testimonials</a>
                  <ul class="dropdown-menu">
                      <li><a href="testimonial.html">Style 1</a></li>
                      <li><a href="testimonial2.html">Style 2<span>new</span></a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">FAQ's</a>
                  <ul class="dropdown-menu">
                      <li><a href="faq.html">Style 1</a></li>
                      <li><a href="faq2.html">Style 2<span>new</span></a></li>
                    </ul>
                  </li>
                  <li><a href="favorite_properties.html">Favorite Properties</a></li>
                  <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">404 Error</a>
                  <ul class="dropdown-menu">
                      <li><a href="404.html">404 Error 1</a></li>
                      <li><a href="404-2.html">404 Error 2<span>new</span></a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="#.">Buy Now</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<!--Header Ends-->




<button type="button" class="form_opener"><i class="fa fa-bars"></i></button>
<div class="tp_overlay">
  <div class="topbar clearfix">
    <ul class="breadcrumb_top">
      <li><a href="favorite_properties.html"><i class="icon-icons43"></i>Favorites</a></li>
      <li><a href="submit_property.html"><i class="icon-icons215"></i>Submit Property</a></li>
      <li><a href="my_properties.html"><i class="icon-icons215"></i>My Property</a></li>
      <li><a href="profile.html"><i class="icon-icons230"></i>Profile</a></li>
      <li><a href="login.html"><i class="icon-icons179"></i>Login / Register</a></li>
      <li class="last-icon"><i class="icon-icons215"></i></li>
    </ul>
  </div>
  
  <form class="callus top30 clearfix centered">
  <h2 class="text-uppercase t_white bottom20 text-center">advanced search</h2>
    <div class="row">
      <div class="col-sm-6">
        <div class="single-query bottom15">
          <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="single-query bottom15">
          <div class="intro">
            <select>
              <option selected="" value="any">Location</option>
              <option>All areas</option>
              <option>Bayonne </option>
              <option>Greenville</option>
              <option>Manhattan</option>
              <option>Queens</option>
              <option>The Heights</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="single-query bottom15">
          <div class="intro">
            <select>
              <option class="active">Property Type</option>
              <option>All areas</option>
              <option>Bayonne </option>
              <option>Greenville</option>
              <option>Manhattan</option>
              <option>Queens</option>
              <option>The Heights</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="single-query bottom15">
          <div class="intro">
            <select>
              <option class="active">Property Status</option>
              <option>All areas</option>
              <option>Bayonne </option>
              <option>Greenville</option>
              <option>Manhattan</option>
              <option>Queens</option>
              <option>The Heights</option>
            </select>
          </div>
        </div>
      </div>
      <div class="search-2">
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="single-query bottom15">
            <div class="intro">
              <select>
                <option class="active">Min Beds</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="single-query bottom15">
            <div class="intro">
              <select>
                <option class="active">Min Baths</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="single-query bottom15">
          <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="single-query bottom15">
          <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8 bottom15">
        <div class="single-query-slider">
          <div class="clearfix top20">
            <label class="pull-left">Price Range:</label>
            <div class="price text-right">
              <span>$</span>
              <div class="leftLabel"></div>
              <span>to $</span>
              <div class="rightLabel"></div>
            </div>
          </div>
          <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
            <div class="bar"></div>
            <div class="leftGrip"></div>
            <div class="rightGrip"></div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-4 text-right form-group top30">
        <button type="submit" class="border_radius btn-yellow text-uppercase">Search</button>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="group-button-search">
          <a data-toggle="collapse" href=".html" class="more-filter">
            <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
            <div class="text-1">Show more search options</div>
            <div class="text-2 hide">less more search options</div>
          </a>
        </div>
        <div class="search-propertie-filters collapse">
          <div class="container-2">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>Features</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>Balcony</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>Gas Heat</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>Washer, Dryer</span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>TV Cable</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>Swimming Pool</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="search-form-group white bottom10">
                  <input type="checkbox" name="check-box" />
                  <span>Home Theater</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>




<!-- Gallery -->
<section id="property" class="padding bg_gallery">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="uppercase">real estate properties</h2>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="clearfix">
      <div id="filters-property" class="cbp-l-filters-button text-center">
        <div data-filter=".latest" class="cbp-filter-item-active cbp-filter-item">LATEST</div>
        <div data-filter=".sale" class="cbp-filter-item">SALE</div>        
        <div data-filter=".rent" class="cbp-filter-item">RENT</div>
      </div>
    </div>
    <div id="property-gallery" class="cbp listing1">
      <div class="cbp-item latest sale">
        <div class="property_item">
          <div class="image">
            <a href="property_detail1.html"><img src="images/listing1.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Sale</span> 
            <span class="tag_l">Featured</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail1.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#seventy" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="seventy">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest rent">
        <div class="property_item">
          <div class="image">
            <a href="property_detail2.html"><img src="images/listing2.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Rent</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail2.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#six" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="six">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest sale">
        <div class="property_item">
          <div class="image">
            <a href="property_detail3.html"><img src="images/listing3.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Sale</span>
            <span class="tag_l">Featured</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail3.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="three">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest rent">
        <div class="property_item">
          <div class="image">
            <a href="property_detail1.html"><img src="images/listing4.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Rent</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail1.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#twe" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="twe">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest sale">
        <div class="property_item">
          <div class="image">
            <a href="property_detail2.html"><img src="images/listing8.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="solid">Solid Out</span>
            </div>
            <span class="tag_t">For Sale</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail2.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#twomore" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="twomore">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest sale">
        <div class="property_item">
          <div class="image">
            <a href="property_detail3.html"><img src="images/listing6.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Sale</span>
            <span class="tag_l">Featured</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail3.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="one">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest rent">
        <div class="property_item">
          <div class="image">
            <a href="property_detail1.html"><img src="images/listing7.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Rent</span> 
            <span class="tag_l">Featured</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail1.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#seven" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="seven">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest sale">
        <div class="property_item">
          <div class="image">
            <a href="property_detail2.html"><img src="images/listing5.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Sale</span> 
            <span class="tag_l">Featured</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail2.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#onemore" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="onemore">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="cbp-item latest sale">
        <div class="property_item">
          <div class="image">
            <a href="property_detail3.html"><img src="images/listing9.jpg" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right">$8,600 Per Month</span>
            </div>
            <span class="tag_t">For Sale</span> 
            </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail3.html">Park avenue apartment</a></h3>
              <p>45 Regent Street, London, UK</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
              <span><i class="icon-bed"></i>2 Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>1 Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>TV Lounge</span>
              <span><i class="icon-garage"></i>1 Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
              <ul class="pull-right">
                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                <li><a href="#sixy" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
              </ul>
            </div>
            <div class="toggle_share collapse" id="sixy">
              <ul>
                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 text-center top20">
       <a href="listing1.html" class="btn-dark border_radius uppercase margin40">more listings</a>
    </div>
  </div>
</section>
<!-- Gallery End -->


<!--Deals-->
<section id="deal" class="padding_bottom_half padding_top">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h2 class="uppercase">Best Deal Properties</h2>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      <div id="two-col-slider" class="owl-carousel">
        <div class="item">
          <div class="listing_full">
            <div class="image">
              <img alt="image" src="images/b-d-property.jpg">
              <span class="tag_t">For Sale</span>
            </div>
            <div class="listing_full_bg">
              <div class="listing_inner_full">
                <span><a href="#"><i class="icon-like"></i></a></span>
                <a href="property_detail1.html">
                  <h3>Park Avenue Apartment</h3>
                  <p>Towson London, MR 21501</p>
                </a>
                <div class="favroute clearfix">
                  <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="listing_full">
            <div class="image">
              <img alt="image" src="images/b-d-property2.jpg">
              <span class="tag_t">For Sale</span>
            </div>
            <div class="listing_full_bg">
              <div class="listing_inner_full">
                <span><a href="#"><i class="icon-like"></i></a></span>
                <a href="property_detail2.html">
                  <h3>Park Avenue Apartment</h3>
                  <p>Towson London, MR 21501</p>
                </a>
                <div class="favroute clearfix">
                  <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="listing_full">
            <div class="image">
              <img alt="image" src="images/b-d-property3.jpg">
              <span class="tag_t">For Sale</span>
            </div>
            <div class="listing_full_bg">
              <div class="listing_inner_full">
                <span><a href="#"><i class="icon-like"></i></a></span>
                <a href="property_detail3.html">
                  <h3>Park Avenue Apartment</h3>
                  <p>Towson London, MR 21501</p>
                </a>
                <div class="favroute clearfix">
                  <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="listing_full">
            <div class="image">
              <img alt="image" src="images/b-d-property4.jpg">
              <span class="tag_t">For Sale</span>
            </div>
            <div class="listing_full_bg">
              <div class="listing_inner_full">
                <span><a href="#"><i class="icon-like"></i></a></span>
                <a href="property_detail1.html">
                  <h3>Park Avenue Apartment</h3>
                  <p>Towson London, MR 21501</p>
                </a>
                <div class="favroute clearfix">
                  <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i class="icon-safety-shower"></i>2 Bedrooms</span><span class="border-l">$38,600 / pm</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Deals ends-->


<!--Parallax-->
<section id="parallax_four" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 bottom30">
        <h2 class="uppercase">Over then <strong>7000</strong> Happy Customer</h2>
      </div>
      <div class="col-sm-8 col-md-10">
        <div class="row">
          <div class="col-sm-6 margin40">
             <i class="icon-presentation"></i>
             <h4 class="bottom10">Good Sale & Marketing</h4>
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend.</p>
          </div>
          <div class="col-sm-6 margin40">
             <i class="icon-icons215"></i>
             <h4 class="bottom10">Good Sale & Marketing</h4>
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--About Owner ends-->


<!--Testinomials-->
<section id="testinomialBg" class="padding bg_light">
  <div id="agent-2" class="padding_bottom">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="uppercase">AGENTS YOU CAN TRUST</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat Aenean elit tellus.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 margin40">
        <div class="agent_wrap">
          <div class="image">
            <img src="images/agent-one.jpg" alt="Agents">
            <div class="img-info">
              <h3>Bohdan Kononets</h3>
              <span>sales executive</span>
              <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">(+01) 34 56 7890</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="agent_profile.html">
              <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 margin40">
        <div class="agent_wrap">
          <div class="image">
            <img src="images/agent-five.jpg" alt="Agents">
            <div class="img-info">
              <h3>Bohdan Kononets</h3>
              <span>sales executive</span>
              <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">(+01) 34 56 7890</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="agent_profile.html">
              <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 margin40">
        <div class="agent_wrap">
          <div class="image">
            <img src="images/agent-six.jpg" alt="Agents">
            <div class="img-info">
              <h3>Bohdan Kononets</h3>
              <span>sales executive</span>
              <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">(+01) 34 56 7890</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="agent_profile.html">
              <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="container bg_white padding">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="uppercase">Happy Customers</h2>
        <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat Aenean elit tellus.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
         <div id="testinomial-slider" class="owl-carousel display navigate">
          <div class="item">
            <div class="testinomial_content text-center">
              <img src="images/author2.png" alt="happy client" class="bottom15">
             <h4 class="uppercase"> SAM NICHOLSON</h4>
             <span class="smmery bottom15">( NorthMarq Capital  )</span>
             <img src="images/stars.png" alt="rating" class="bottom30">
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
          <div class="item">
            <div class="testinomial_content text-center">
              <img src="images/author.png" alt="happy client" class="bottom15">
             <h4 class="uppercase"> SAM NICHOLSON</h4>
             <span class="smmery bottom15">( NorthMarq Capital  )</span>
             <img src="images/stars.png" alt="rating" class="bottom30">
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
          <div class="item">
            <div class="testinomial_content text-center">
              <img src="images/author2.png" alt="happy client" class="bottom15">
             <h4 class="uppercase"> SAM NICHOLSON</h4>
             <span class="smmery bottom15">( NorthMarq Capital  )</span>
             <img src="images/stars.png" alt="rating" class="bottom30">
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Testinomials ends-->


<!--Partners-->
<section id="logos">
  <div class="container partner2 padding">
    <div class="row">
      <div class="col-sm-12 text-center">
      	<h2 class="uppercase">Our Partners</h2>
        <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p>
      </div>
    </div>
    <div class="row">
    <div id="partners" class="owl-carousel">
        <div class="item">
          <img src="images/logo1.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo2.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo3.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo4.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo5.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo1.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo2.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo3.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo4.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo5.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo1.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo2.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo3.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo4.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo5.png" alt="Featured Partner">
        </div>
      </div>
    </div>
  </div>
</section>
<!--Partners Ends-->

@endsection

