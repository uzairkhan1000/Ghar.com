@extends('frontend.layouts.access-layout')
@section('content')
<div class="container-fluid signup">
  <div class="row">
    <div class="col-5 signup-img">
      <img class="back-btn" src="Images/stipple4.png" alt="">
    </div>
    <div class="col-7 signup-form">
      <div class="row">
      <div class="col-1">
      <a href="./"><img class="back-btn" src="Images/left.png" alt=""></a>
      </div>
      </div>
      
      
    <div class="row form-row">
  <div class="row form">
    <div class="row heading mb-3">
      <div class="col">
        <h1>SIGN UP</h1>
        <h2>Already a member ? <a href="{{route('login')}}">SIGN IN</a></h2>
      </div>
    </div>

    <form action="{{route('register')}}" method="POST">
      @csrf
      <div class="row mb-4 fullname">
        <div class="col-md-6">
          <input id="first_name" placeholder="First Name" type="text"  class="un @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" autocomplete="first_name">
          @error('first_name')
              <span class="input-error">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="col-md-6 text-end">
          <input id="last_name" placeholder="Last Name" type="text"  class="un @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" autocomplete="last_name">
          @error('last_name')
              <span class="input-error">
                  <strong style="float:left; margin-left:0.5vw;">{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>

      <div class="row mb-4 email">
        <input id="email" placeholder="Email" type="text"  class="un email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
        @error('email')
            <span class="input-error">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="row mb-4 password ">
        <div class="col-md-6">
          <input id="password" placeholder="Password" type="password"  class="un @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" autocomplete="password">
          @error('password')
              <span class="input-error">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="col-md-6 text-end">
          <input id="password_confirmation" placeholder="Confirm Password" type="password"  class="un @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" autocomplete="password_confirmation">
          @error('password_confirmation')
              <span class="input-error">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>

      <div class="row mb-4 dob">
        <div class="col-md-6">
          <input id="country" placeholder="Country" type="text"  class="un @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" autocomplete="country">
          @error('country')
              <span class="input-error">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="col-md-6 text-end">
          <input id="date_of_birth" placeholder="Date Of Birth" type="date"  class="un @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" autocomplete="date_of_birth">
          @error('date_of_birth')
              <span class="input-error" >
                  <strong style="float:left; margin-left:0.5vw;">{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>

      <div class="row mb-4 checkbox">
        <div class="col">
          <input class="" type="checkbox" id="checkbox">
          <span for="checkbox" class="not-checked label">
            By clicking Create account, I agree that I have read 
            and accepted the Terms of Use and Privacy Policy.
          </span>
        </div>
      </div>

      <div class="row text-center submit">
        <div class="col">
          <input class="signup-btn" type="submit" value="SIGN UP" name="signup">
        </div>
      </div>
    </form>

    <div class="row links">
      <div class="col">
        <p>Or Sign Up with ?</p>
        <a href="#"><img src="Images/fb1.png"></a>
        <a href="#"><img src="Images/g.png"></a>
      </div>
    </div>
  </div>
</div>
    </div>
</div>


@endsection
