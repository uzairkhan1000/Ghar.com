@extends('frontend.layouts.default-layout')
@section('content')




<!-- Property Detail Start -->
<section id="property" class="padding">
    <div class="container property-details">
        @foreach ($property as $property)


        <div class="row">
            <div class="col-md-12">
                <h2 class="text-uppercase">{{$property->title}}</h2>
                <p class="bottom30">{{$property->location}}</p>
                <div id="property-d-1" class="owl-carousel single">
                    <div class="item"><img src="./uploads/properties/{{$property->images}}" alt="image" /></div>
                    <div class="item"><img src="images/property-details/property-d-1-1.jpg" alt="image" /></div>
                    <div class="item"><img src="images/property-details/property-d-1-1.jpg" alt="image" /></div>
                    <div class="item"><img src="images/property-details/property-d-1-1.jpg" alt="image" /></div>
                    <div class="item"><img src="images/property-details/property-d-1-1.jpg" alt="image" /></div>
                    <div class="item"><img src="images/property-details/property-d-1-1.jpg" alt="image" /></div>
                    <div class="item"><img src="images/property-details/property-d-1-1.jpg" alt="image" /></div>
                </div>
                <div id="property-d-1-2" class="owl-carousel single">
                    <div class="item"><img src="images/property-details/property-d-s-1-1.jpg" alt="image" /></div>
                    <div class="item"><img src="images/property-details/property-d-s-1-2.jpg" alt="image" /></div>
                    <div class="item"><img src="images/property-details/property-d-s-1-3.jpg" alt="image" /></div>
                    <div class="item"><img src="images/property-details/property-d-s-1-4.jpg" alt="image" /></div>
                    <div class="item"><img src="images/property-details/property-d-s-1-5.jpg" alt="image" /></div>
                    <div class="item"><img src="images/property-details/property-d-s-1-1.jpg" alt="image" /></div>
                    <div class="item"><img src="images/property-details/property-d-s-1-2.jpg" alt="image" /></div>
                </div>
                <div class="property_meta bg-black bottom40">
                    <span><i class="icon-select-an-objecto-tool"></i>{{$property->size}} sq ft</span>
                    <span><i class=" icon-microphone"></i>{{$property->bedrooms}} Office Rooms</span>
                    <span><i class="icon-safety-shower"></i>{{$property->bathrooms}} Bathroom</span>
                    <span><i class="icon-old-television"></i>{{$property->tv_lounges}} TV Lounge</span>
                    <span><i class="icon-garage"></i>{{$property->garages}} Garage</span>
                </div>
            </div>
            <div class="col-md-8 listing1">
                <h2 class="text-uppercase">Property Description</h2>


                <div class="text-it-p bottom40">
                    <p>{{$property->description}}</p>
                </div>
                <h2 class="text-uppercase bottom20">Quick Summary</h2>
                <div class="row property-d-table bottom40">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td><b>Property Id</b></td>
                                    <td class="text-right">{{$property->id}}</td>
                                </tr>
                                <tr>
                                    <td><b>Price</b></td>
                                    <td class="text-right">${{$property->price}} / month</td>
                                </tr>
                                <tr>
                                    <td><b>Property Size</b></td>
                                    <td class="text-right">{{$property->size}} ft2</td>
                                </tr>
                                <tr>
                                    <td><b>Bedrooms</b></td>
                                    <td class="text-right">{{$property->bedrooms}}</td>
                                </tr>
                                <tr>
                                    <td><b>Bathrooms</b></td>
                                    <td class="text-right">{{$property->bathrooms}}</td>
                                </tr>
                                <tr>
                                    <td><b>Available From</b></td>
                                    <td class="text-right">22-04-2017</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td><b>Status</b></td>
                                    <td class="text-right">{{$property->status}}</td>
                                </tr>
                                <tr>
                                    <td><b>Year Built</b></td>
                                    <td class="text-right">1991</td>
                                </tr>
                                <tr>
                                    <td><b>Garages</b></td>
                                    <td class="text-right">{{$property->garages}}</td>
                                </tr>
                                <tr>
                                    <td><b>Cross Streets</b></td>
                                    <td class="text-right">Nordoff</td>
                                </tr>
                                <tr>
                                    <td><b>Floors</b></td>
                                    <td class="text-right">Carpet - Ceramic Tile</td>
                                </tr>
                                <tr>
                                    <td><b>Plumbing</b></td>
                                    <td class="text-right">Full Copper Plumbing</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h2 class="text-uppercase bottom20">Features</h2>
                <div class="row bottom40">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="pro-list">
                            <li>
                                Air Conditioning
                            </li>
                            <li>
                                Barbeque
                            </li>
                            <li>
                                Dryer
                            </li>
                            <li>
                                Laundry
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="pro-list">
                            <li>
                                Microwave
                            </li>
                            <li>
                                Outdoor Shower
                            </li>
                            <li>
                                Refrigerator
                            </li>
                            <li>
                                Swimming Pool
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="pro-list">
                            <li>
                                Quiet Neighbourhood
                            </li>
                            <li>
                                TV Cable & WIFI
                            </li>
                            <li>
                                Window Coverings
                            </li>
                        </ul>
                    </div>
                </div>

                @endforeach







            </div>



            <aside class="col-md-4 col-xs-12">
                <h2 class="text-uppercase bottom20">Property Owner</h2>
                <div class="row">
                    <div class="col-sm-4 bottom40">
                        <div class="agent_wrap">
                            <div class="image">
                                <img src="./uploads/users/{{$user->profile_pic}}"
                                    style="height:auto; border-radius:50%;" alt="Agents">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 bottom40">
                        <div class="agent_wrap">
                            <h3>{{$user->name}}</h3>
                            <h4 style="margin-top: 1vw;">Contact Number</h4>
                            <h4>{{$user->phone}}</h4>

                        </div>
                    </div>



                </div>
            </aside>

        </div>

    </div>
</section>
<!-- Property Detail End -->

@endsection
