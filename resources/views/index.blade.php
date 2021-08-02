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
  <div id="rev_slider_third" class="rev_slider"  data-version="5.0">
    <ul>
      <!-- SLIDE  -->
      <li data-transition="fade">
        <img src="images/home3-banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class="black-caption tp-caption tp-resizeme"
         data-start="1300"
          data-x="['left','left','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on" 
          data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
		      data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <div class="price">For Rent</div>
          <h2>Family House in Hudson</h2>
          <p class="bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power 
            <br> nonummy nibh...
          </p>
          <div class="property_meta"> 
            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
            <span><i class="icon-bed"></i>3 Bedrooms</span> 
            <span><i class="icon-pool-stairs"></i>Swimming Pool</span> 
          </div>
          <div class="property_meta bottom30"> 
            <span><i class="icon-garage"></i>1 Garage</span>
            <span><i class="icon-safety-shower"></i>2 bathrooms</span>
          </div>
          <div class="bottom row">
            <div class="col-sm-6"><span> <i class="icon-icons74"></i>Bayonne, New Jersey</span></div>
            <div class="col-sm-6"><span>$8,600 Per Month -<small> Apartment</small></span></div>
          </div>
        </div>
      </li>
      <li data-transition="fade">
        <img src="images/home3-banner2.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class="black-caption tp-caption tp-resizeme"
          data-x="['left','left','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
          data-start="1300"
          data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
		  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" >
          <div class="price">For Rent</div>
          <h2>Family House in Hudson</h2>
          <p class="bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power 
            <br> nonummy nibh...
          </p>
          <div class="property_meta"> 
            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
            <span><i class="icon-bed"></i>3 Bedrooms</span> 
            <span><i class="icon-pool-stairs"></i>Swimming Pool</span> 
          </div>
          <div class="property_meta bottom30"> 
            <span><i class="icon-garage"></i>1 Garage</span>
            <span><i class="icon-safety-shower"></i>2 bathrooms</span>
          </div>
          <div class="bottom row">
            <div class="col-sm-6"><span> <i class="icon-icons74"></i>Bayonne, New Jersey</span></div>
            <div class="col-sm-6"><span>$8,600 Per Month - Apartment</span></div>
          </div>
        </div>
      </li>
      <li data-transition="fade">
        <img src="images/home3-banner3.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class="black-caption tp-caption tp-resizeme"
          data-x="['left','left','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
           data-start="1300"
          data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
		  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" >
          <div class="price">For Rent</div>
          <h2>Family House in Hudson</h2>
          <p class="bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power 
            <br> nonummy nibh...
          </p>
          <div class="property_meta"> 
            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
            <span><i class="icon-bed"></i>3 Bedrooms</span> 
            <span><i class="icon-pool-stairs"></i>Swimming Pool</span> 
          </div>
          <div class="property_meta bottom30"> 
            <span><i class="icon-garage"></i>1 Garage</span>
            <span><i class="icon-safety-shower"></i>2 bathrooms</span>
          </div>
          <div class="bottom row">
            <div class="col-sm-6"><span> <i class="icon-icons74"></i>Bayonne, New Jersey</span></div>
            <div class="col-sm-6"><span>$8,600 Per Month - Apartment</span></div>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <!-- END REVOLUTION SLIDER -->
</div>


{{-- <!--Advance Search-->
<section class="property-query-area bg_light">
  <div class="container">
    <div class="row">
      <form class="callus">
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
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
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
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
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
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
        <div class="col-md-3 col-sm-6">
          <div class="row search-2">
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
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
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
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
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="row">
            <div class="col-sm-6">
              <div class="single-query form-group">
                <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="single-query form-group">
                <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-8">
              <div class="single-query-slider">
                <label>Price Range:</label>
                <div class="price text-right">
                  <span>$</span>
                  <div class="leftLabel"></div>
                  <span>to $</span>
                  <div class="rightLabel"></div>
                </div>
                <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                  <div class="bar"></div>
                  <div class="leftGrip"></div>
                  <div class="rightGrip"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-right form-group">
              <button type="submit" class="btn-blue border_radius top15">Search</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<!--Advance Search--> --}}

<!-- Gallery -->
<section id="property" class="padding bg_gallery">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2 class="uppercase" id="1">real estate properties</h2>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    {{-- <div class="clearfix">
      <div id="filters-property" class="cbp-l-filters-button text-center">
        <div data-filter=".latest" class="cbp-filter-item-active cbp-filter-item">LATEST</div>
        <div data-filter=".sale" class="cbp-filter-item">SALE</div>        
        <div data-filter=".rent" class="cbp-filter-item">RENT</div>
      </div>
    </div> --}}
    <div id="property-gallery" class="cbp listing1">
      
  
    @foreach($properties as $property)
    
    
        <div class="cbp-item latest rent">
        
        <div class="property_item">
          <div class="image">
            <a href="{{route('property_details',$property->id)}}"><img src="./uploads/properties/{{$property->images}}" alt="latest property" class="img-responsive"></a>
            <div class="price clearfix"> 
              <span class="tag pull-right"> Per Month</span>
            </div>
            <span class="tag_t">For {{$property->status}}</span> 
            </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="captlize"><a href="property_detail3.html">{{$property->title}}</a></h3>
              <p>{{$property->address}}</p>
            </div>
            <div class="property_meta transparent"> 
              <span><i class="icon-select-an-objecto-tool"></i>{{$property->size}} sq ft</span> 
              <span><i class="icon-bed"></i>{{$property->bedrooms}} Office Rooms</span> 
              <span><i class="icon-safety-shower"></i>{{$property->bathrooms}} Bathroom</span>   
            </div>
            <div class="property_meta transparent bottom30">
              <span><i class="icon-old-television"></i>{{$property->tv_lounges}} TV Lounge</span>
              <span><i class="icon-garage"></i>{{$property->garages}} Garage</span>
              <span></span>
            </div>
            <div class="favroute clearfix">
              <p><i class="icon-calendar2"></i>&nbsp;{{$property->created_at}} </p>
              <ul class="pull-right">
                @if(!Auth::user())
                <li><a href="login"><i class=" bi-heart "></i></a></li>
                @else
                @if(empty($favproperties))
                <li><a href="{{route('addfavourite',$property->id)}}"><i  class=" bi-heart "  ></i></a></li>
                
                @else
                <li><a href="{{route('addfavourite',$property->id)}}"><i  class=" @if(in_array($property->id,$favproperties)) like bi bi-heart-fill  @else bi-heart @endif  "  ></i></a></li>
                @endif
                @endif
                
                {{-- <li><a href="#sixy" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li> --}}
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
      
      @endforeach
      </div>
      
    <div class="col-sm-12 text-center top20">
      {{-- {{ $properties->links() }} --}}

       <a href="{{$properties->fragment('1')->nextPageUrl()}}" id="btn" class="btn-dark border_radius uppercase margin40" >more listings</a>
    </div>
    
    
  </div>
</section>




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

