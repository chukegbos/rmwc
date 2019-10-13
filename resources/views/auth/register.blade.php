@extends('layouts.live')
@section('pageTitle', 'Register')
@section('content')
<div class="page-content">
    <section class="register pos-r o-hidden">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-md-12 ml-auto mr-auto">
                    <div class="section-title">
                        <div class="title-effect">
                            <div class="bar bar-top"></div>
                            <div class="bar bar-right"></div>
                            <div class="bar bar-bottom"></div>
                            <div class="bar bar-left"></div>
                        </div>
                        <h6>Register Now</h6>
                        <h2>Simple And Easy To Sign Up</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                    <div class="register-form text-center">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                        <input type="text" name="firstname" class="form-control" placeholder="First name" value="{{ old('firstname') }}" required autofocus data-error="Firstname is required.">
                                        @if ($errors->has('firstname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('firstname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <input type="text" name="lastname" class="form-control" placeholder="Last name/Surname" value="{{ old('lastname') }}" required autofocus data-error="Lastname is required.">
                                        @if ($errors->has('lastname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('lastname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Valid email is required." value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                        <input id="form_username" type="text" name="username" class="form-control" placeholder="username" required="required" data-error="Valid username is required." value="{{ old('username') }}">
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>                  
                            </div>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="form_password" type="password" name="password" class="form-control" placeholder="Password" required="required" data-error="password is required.">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input id="form_password1" type="password" name="password_confirmation" class="form-control" placeholder="Conform Password" required="required" data-error="Conform Password is required.">
                                  <div class="help-block with-errors"></div>
                                </div>
                              </div>
                            </div>

                            <div class="row mt-5">
                              <div class="col-md-12">
                                <div class="remember-checkbox clearfix mb-5">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" required="">
                                    <label class="custom-control-label" for="customCheck1">I agree to the term of use and privacy policy</label>
                                  </div>
                                </div> 
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <input type="submit" class="btn btn-theme btn-block btn-circle" value="Register">

                                <h5 class="mb-0 text-capitalize mt-4">Have An Account ? <a href="{{ route('login') }}"><i>Sign In!</i></a></h5>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
