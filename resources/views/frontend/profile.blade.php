@extends('frontend.layouts.default-layout')
@section('content')





<!-- Profile Start -->
<section id="agent-2-peperty" class="profile padding">
  <div class="container">
  @include('frontend.partials.navbar1')
  @if(Session::has('status'))
      <div class="row text-center" style="background-color:blue; color:white;">
            <h2>Profile Updated</h2>
        </div>
      @elseif(Session::has('error'))
      <div class="row text-center" style="background-color:red; color:white;">
            <h2>Failed to update</h2>
        </div>
      @endif
      <form method="post" action="{{Route('profile_pic')}}" enctype="multipart/form-data">
      @csrf
  <div class="container-3">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <h2 class="text-uppercase bottom30">my profile</h2>
        <div class="agent-p-img">
        
          <img src="./uploads/users/{{$user->profile_pic}}" class="img-responsive" alt="image" />
          
          <input type="file"  name="profile_pic" class="top10 bottom20 btn-blue border_radius" style="width: -webkit-fill-available;">
          <button class="btn-blue border_radius" type="submit" style="width: -webkit-fill-available;">Change</button>
          
        </div>
      </div>
     
      <div class="col-md-8">
        <div class="profile-form">
          <div class="row">
          </form>
            <form class="callus" action="{{Route('addprofile')}}" method="post">
            @csrf
           
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Your Name:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text" Value="{{$user->name}}" name="name" placeholder="{{$user->name}}" class="keyword-input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Phone:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text" name="phone" Value="{{$user->phone}}" placeholder="{{$user->phone}}" class="keyword-input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Mobile:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text" name="mobile" Value="{{$user->mobile}}" placeholder="{{$user->mobile}}" class="keyword-input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Email Adress:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text" name="email_address" Value="{{$user->email_address}}" placeholder="{{$user->email_address}}" class="keyword-input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Skype:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text" name="skype" Value="{{$user->Skype}}" placeholder="{{$user->Skype}}" class="keyword-input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-query">
                  <label>About:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <textarea  placeholder="{{$user->about}}" name="about" class="form-control">{{$user->about}}</textarea>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 text-right">
              <button type="submit" class="btn-blue border_radius" href="#.">Save Changes</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="container">
    <div class="row">
      <div class="col-md-2 hidden-xs"></div>
      <div class="col-md-5 col-sm-6 col-xs-12 profile-form margin40">
        <h3 class=" bottom30 margin40">Change Your Password</h3>
        <div class="row">
          <form class="callus">
            <div class="col-sm-4">
              <div class="single-query">
                <label>Current Password:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="password" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>New Password:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="password" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>Confirm Password:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="password" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-12 text-right">
              <a class="btn-blue border_radius" href="#.">Save Changes</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> --}}
</section>
<!-- Profile end -->

@endsection