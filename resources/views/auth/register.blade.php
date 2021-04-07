@extends('frontend.layouts.default-layout')

@section('content')
<!-- Login -->

<section id="login" class="padding">

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="profile-login">
        <ul class="nav nav-tabs" role="tablist">
            <h2 style="color:white;">Registration<h2>
          </ul>
          <!-- Nav tabs -->
          <div class="tab-content padding_half">
            <div role="tabpanel" class="tab-pane fade in active" id="home">
           
              <div class="agent-p-form">
              <form method="POST" action="{{ route('register') }}" class="callus clearfix">
                        @csrf

                        <div class="form-group row">
                            

                            <div class="single-query col-sm-10 form-group">
                                <input id="name" placeholder="Full Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="single-query col-sm-10 form-group">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="single-query col-sm-10 form-group">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="single-query col-sm-10 form-group">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" Value="Create An Account" class="btn-slide">
                                    {{ __('Create An Account') }}
                                </button>
                            </div>
                        </div>
                    </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</section>

<!-- Login end -->
@endsection
