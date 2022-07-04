@extends('layouts.app')
<style type="text/css">
  .fieldset{

  }
  .login-board{
    width: 75%;
  }
  @media screen and (max-width: 992px){
    .login-board{
    width: 100%;
  }
  }
</style>
@section('content')
<div class="container-fluid d-flex h-100 justify-content-center" style="background-color: white;">
    <div class="row justify-content-center align-self-center login-board">
        <div class="col-sm-8 col-lg-5">
            <div class="">
                <div class="">
                        <div class="image">
        <center>
          
          <img src=" {{asset('frontend/image/logo/fatmonk logo 21-01.png')}}" class="img-fluid">
        </center>

      </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                      <div class="field">
                        <fieldset style="padding: 0rem !important;">
                          <div class="row">
                              <legend for="email" class="col-md-5 col-form-label text-center">{{ __('E-Mail Address') }}</legend>
                              <div class="col-md-7">
                                  <input style="-webkit-box-shadow: 0 0 0 30px #f5f5f5 inset;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Type Email">

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="field">
                        <fieldset style="padding: 0rem !important;">
                          <div class="row">
                              <legend for="password" class="col-md-5 col-form-label text-center">{{ __('Password') }}</legend>

                              <div class="col-md-7">
                                  <input style="-webkit-box-shadow: 0 0 0 30px #f5f5f5 inset"; id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Type password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>
                        </fieldset>
                      </div>



                        <div class="form-group row mb-0" style="padding-top:1rem">
                            <div class="col-md-8 offset-md-4">
                              <center>
                                <button type="submit" class="btn btn-primary submit-Btn"style="padding: 0.5rem 5rem 0.5rem 5rem;">
                                    {{ __('Login') }}
                                </button>
                                </center>

                                @if (Route::has('password.request'))
                                   <!--  <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a> -->
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection








