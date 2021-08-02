@extends('frontend.layouts.default-layout')
@section('content')




<!-- My Properties  -->
<section id="property" class="padding listing1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="f-p-links margin_bottom">
                    <li><a href="profile.html"><i class="icon-icons230"></i>Profile</a></li>
                    <li><a href="my_properties.html"><i class="icon-icons215"></i> My Properties</a></li>
                    <li><a href="submit_property.html" class="active"><i class="icon-icons215"></i> Submit Property</a>
                    </li>
                    <li><a href="favorite_properties.html"><i class="icon-icons43"></i> Favorite Properties</a></li>
                    <li><a href="login.html"><i class="icon-lock-open3"></i>Logout</a></li>
                </ul>
            </div>
        </div>

        @if(Session::has('status'))
        <div class="row text-center" style="background-color:blue; color:white;">
            <h2>Property Added</h2>
        </div>
        @elseif(Session::has('error'))
        <div class="row text-center" style="background-color:red; color:white;">
            <h2>Property Not Added</h2>
        </div>
        @endif
        <div class="row">

            <div class="col-sm-1 col-md-2"></div>
            <div class="col-sm-10 col-md-8">
                <h2 class="text-uppercase bottom40">Update Your Property</h2>
                <form action="edit_property.{{$property->id}}" method="POST"
                    class="callus clearfix border_radius submit_property" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="single-query form-group bottom20">
                                <label>Title</label>
                                <input type="text" name="title" class="keyword-input" value="{{$property->title}}"
                                    placeholder="{{$property->title}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>Location</label>
                                <input type="text" name="location" class="keyword-input" value="{{$property->location}}"
                                    placeholder="{{$property->location}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-query bottom20">
                                <label>Status </label>
                                <div class="intro">

                                    <select name="status" id="">
                                        <option value="{{$property->status}}">Currently : {{$property->status}}</option>
                                        <option value="Sale" selected>Sale</option>
                                        <option value="Rent">Rent</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-query form-group bottom20">
                                <label>Price</label>
                                <input type="text" name="price" class="keyword-input" value="{{$property->price}}"
                                    placeholder="{{$property->price}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="margin40 bottom15">Propertie Photos <i class="fa fa-info-circle help"
                                    data-toggle="tooltip" title="add images to upload for property!"></i></h3>

                            <input type="file" name="image" class="custom-file-input" value="{{$property->images}}">


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="bottom15 margin40">Propertie Detail</h3>
                        </div>
                    </div>
                    <form class="callus clearfix border_radius submit_property">
                        <div class="row">

                            <div class="col-sm-4">

                                <div class="single-query form-group bottom20">
                                    <label>Size Prefix</label>
                                    <div class="intro">
                                        <select name="size" id="">
                                            <option value="{{$property->size}}">Currently : {{$property->size}}</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-4">

                                <div class="single-query form-group bottom20">
                                    <label>Bedrooms</label>
                                    <div class="intro">
                                        <select name="bedrooms" id="">
                                            <option value="{{$property->bedrooms}}">Currently : {{$property->bedrooms}}
                                            </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-4">

                                <div class="single-query  form-group bottom20">
                                    <label>Bathrooms</label>
                                    <div class="intro">
                                        <select name="bathrooms" id="">
                                            <option value="{{$property->bathrooms}}">Currently :
                                                {{$property->bathrooms}}</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                            </div>


                            <div class="col-sm-4">

                                <div class="single-query form-group bottom20">
                                    <label>TV Lounge</label>
                                    <div class="intro">
                                        <select name="tv_lounges" id="">
                                            <option value="{{$property->tv_lounges}}">Currently :
                                                {{$property->tv_lounges}}</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-4">

                                <div class="single-query form-group  bottom20">
                                    <label>Garages</label>
                                    <div class="intro">
                                        <select name="garages" id="">
                                            <option value="{{$property->garages}}">Currently : {{$property->garages}}
                                            </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-4">

                                <div class="single-query form-group bottom20">
                                    <label>Swimming Pool</label>
                                    <div class="intro">
                                        <select name="swimming_pools" id="">
                                            <option value="{{$property->swimming_pools}}">Currently :
                                                {{$property->tv_lounges}}</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-12">
                                <h3 class="bottom15 margin40">Propertie Description </h3>
                                <textarea name="description" id="txtEditor"
                                    value="{{$property->description}}">{{$property->description}}</textarea>
                            </div>
                            <!-- <div class="col-sm-12">
                            <h3 class="bottom15 margin40">Quick Summary</h3>
                            <div class="table-responsive summery_table">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <i class="fa fa-bars titles"></i>
                                        </td>
                                        <td>
                                            <div class="single-query form-group">
                                                <label>Title</label>
                                                <input type="text" class="keyword-input">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="single-query form-group">
                                                <label>Value</label>
                                                <input type="text" class="keyword-input">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#." class="close-t"><i class="fa fa-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-bars titles"></i>
                                        </td>
                                        <td>
                                            <div class="single-query form-group">
                                                <label>Title</label>
                                                <input type="text" class="keyword-input">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="single-query form-group">
                                                <label>Value</label>
                                                <input type="text" class="keyword-input">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#." class="close-t"><i class="fa fa-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-bars titles"></i>
                                        </td>
                                        <td>
                                            <div class="single-query form-group">
                                                <label>Title</label>
                                                <input type="text" class="keyword-input">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="single-query form-group">
                                                <label>Value</label>
                                                <input type="text" class="keyword-input">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#." class="close-t"><i class="fa fa-close"></i></a>
                                        </td>
                                    </tr>

                                </table>
                                <a href="#." class="add-new"><i class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div> -->
                            <!-- <div class="col-sm-12">
                            <h3 class="bottom15 margin40">Property Features</h3>
                            <div class="search-propertie-filters">
                                <div class="container-2">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Air Conditioning</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Balcony</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Gas Heat</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Fire Place</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Washer and Dryer</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Swimming Pool</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Laundry Room</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Home Theater</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Smoking allowed</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Cable TV</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="search-form-group white">
                                                <input type="checkbox" name="check-box" />
                                                <span>Window Coverings</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> -->

                            <!-- <div class="col-sm-12">
                            <h3 class="bottom15 margin40">Video Presentation</h3>
                            <div class="single-query form-group bottom15">
                                <label>Vimeo or Youtube URL</label>
                                <input type="text" class="keyword-input" placeholder="https://vimeo.com/">
                            </div>
                        </div> -->
                            <!-- <div class="col-sm-12">
                            <h3 class="bottom15 margin40">Place on Map</h3>
                            <div class="single-query form-group bottom15">
                                <label>Property Address</label>
                                <input type="text" class="keyword-input" placeholder="Enter a Location">
                            </div>
                            <div id="single_map"></div>
                        </div> -->
                            <div class="col-md-4">
                                <button type="submit" class="btn-blue border_radius margin40">Update Property</button>
                            </div>

                        </div>
                    </form>


            </div>
            <div class="col-sm-1 col-md-2"></div>



            <div class="col-sm-4">





            </div>

        </div>

    </div>
</section>
<!-- My Properties End -->
<!-- Favorite Properties End -->

@endsection
