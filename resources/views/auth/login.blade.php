@extends('layouts.live')
@section('pageTitle', 'Login')
@section('content')

<section class="login">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12">
            <img class="hidden-md-down img-center" src="{{ asset('images/banner/05.png') }}" alt="">
          </div>
          <div class="col-lg-5 col-md-12 ml-auto mr-auto md-mt-5">
            <h2 style="font-weight: bolder; text-align: center;">Login</h2>
            <div class="login-form text-center">
              <form method="post" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="messages"></div>

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                  <input id="form_name" type="text" name="username" class="form-control" placeholder="User name" required="required" data-error="Username is required." value="{{ old('username') }}" required autofocus>
                      @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <input id="form_password" type="password" name="password" class="form-control" placeholder="Password" required="required" data-error="password is required.">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group mt-4 mb-5">
                  <div class="remember-checkbox d-flex align-items-center justify-content-between">
                    <div class="checkbox">
                        <input type="checkbox" id="check2" name="remember" value="{{ old('remember') ? 'checked' : '' }}">
                        <label for="check2">Remember me</label>
                    </div>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                  </div>
                </div> 
                <input type="submit" class="btn btn-theme btn-block btn-circle" value="Login">
              </form>
                <h5 class="mb-0 mt-4 text-capitalize">Don't Have An Account ? <a href="{{ route('register') }}">  
                    <i>Sign Up!</i></a>
                </h5>
                <div class="social-icons fullwidth social-colored mt-4 text-center clearfix">
                    <ul class="list-inline">
                      <li class="social-facebook"><a href="#">Facebook</a>
                      </li>
                      <li class="social-twitter"><a href="#">Twitter</a>
                      </li>
                      <li class="social-gplus"><a href="#">Google Plus</a>
                      </li>
                    </ul>
                </div>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection
