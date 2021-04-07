@extends('frontend.layouts.default-layout')

@section('content')
<!-- Login -->
<section id="login" class="padding">
  <div class="container">
    <h3 class="hidden">hidden</h3>
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="profile-login">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <h2 style="color:white;">LOGIN<h2>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content padding_half">
            <div role="tabpanel" class="tab-pane fade in active" id="home">
              <div class="agent-p-form">
                <form method="POST" action="{{ route('login') }}" class="callus clearfix">
                  @csrf

                  <div class="form-group row">

                      <div class="single-query col-sm-10 form-group">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">

                      <div class="single-query col-sm-10 form-group">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="search-form-group white form-group text-left">
                      <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                      <span>Remember Me</span>
                    </div>
                  </div>
                  <div class="form-group row mb-0">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <button type="submit" class="btn-slide">
                                    {{ __('SUBMIT NOW') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
</section>
<!-- Login end -->
@endsection
