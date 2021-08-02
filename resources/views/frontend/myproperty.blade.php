@extends('frontend.layouts.default-layout')
@section('content')




<!-- My - Property Start -->
<section id="agent-2-peperty" class="my-pro padding">
  <div class="container">
  @include('frontend.partials.navbar1')
    <div class="row bottom30">
      <div class="col-md-12 text-center">
        <h2 class="text-uppercase" id="1"  >My Properties</h2>
      </div>
    </div>
  </div>
  @foreach($properties as $property)
  <div class="container  list-t-border">
    <div class="row bg-hover">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="./uploads/properties/{{$property->images}}" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4>{{$property->title}}</h4>
            <p>{{$property->address}}</p>
            <span><b>Status:</b>  {{$property->status}}</span><br>
            <div class="button-my-pro-list">
              <a href="#.">Rs.{{$property->price}}</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="edit_property.{{$property->id}}"><i class="icon-pen2"></i></a>
            <a href="property_delete.{{$property->id}}"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div> 
  </div>
  
  @endforeach
 
  <div class="container">
    <div class="row padding_top">
      <div class="col-md-12">
        <ul class="pager">
          
          <li ><a href="{{$properties->fragment('1')->previousPageUrl()}}">Back</a></li>
          <li class=""><a href="{{$properties->fragment('1')->nextPageUrl()}}">Next</a></li>
          
        </ul>
      </div>
    </div>
  </div>
  
</section>
<!-- My - Property end -->

@endsection