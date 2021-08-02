@extends('frontend.layouts.default-layout')
@section('content')




<!-- Favorite Properties  -->
<section id="property" class="padding_top listing1">
    <div class="container">
        @include('frontend.partials.navbar1')
        <div class="row">
            @foreach ($properties as $property)
            @if(in_array($property->id,$favproperties))


            <div class="col-sm-4">
                <div class="property_item heading_space">
                    <div class="image">
                        <a href="{{route('property_details',$property->id)}}"><img src="./uploads/properties/{{$property->images}}" alt="latest property" class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">${{$property->price}} Per Month</span>
                        </div>
                        <span class="tag_l">Featured</span>
                        <span class="tag_t">For {{$property->status}}</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="#.">{{$property->title}}</a></h3>
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
                            <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="{{route('addfavourite',$property->id)}}"><i
                                            class=" like bi bi-heart-fill "></i></a></li>
                                <li><a href="#ren" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="ren">
                            <ul>
                                <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                                <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                                <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <div class="row">
            <div class="padding_bottom text-center">
                <ul class="pager">
                    {{-- <li class="owl-prev"><a href="{{$properties->fragment('1')->previousPageUrl()}}">Back</a></li> --}}
                    {{-- <li class=""><a href="{{$properties->fragment('1')->nextPageUrl()}}">Next</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Favorite Properties End -->

@endsection
