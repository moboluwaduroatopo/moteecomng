
@extends('layouts.app2')

@section('content2')
<section id="login">
  <div class="container-fluid">
    <div class="row full-height-vh m-0">
      <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="card">
          <div class="card-content">
            <div class="card-body login-img">
               <form method="POST" action="{{ route('login') }}">
                        @csrf

              <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none py-2 text-center align-middle">
                 <a href="{{ url('/') }}" > <img src="app-assets/img/gallery/login.png" alt="" class="img-fluid mt-5" width="400" height="230"></a>
                </div>
                <div class="col-lg-6 col-md-12 bg-white px-4 pt-3">
                  <h4 class="mb-2 card-title">Login</h4>
                  <p class="card-text mb-3">
                    Welcome back, please login to your account.
                  </p>
                  <input type="email"  placeholder="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}  mb-3" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  <input type="password"  placeholder="Password"  name="password"class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} mb-1" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  <div class="d-flex justify-content-between mt-2">
                    <div class="remember-me">
                      <div class="custom-control custom-checkbox custom-control-inline mb-3">
                        <input type="checkbox" id="customCheckboxInline1" name="customCheckboxInline1" class="custom-control-input" />
                        <label class="custom-control-label" for="customCheckboxInline1">
                          Remember Me
                        </label>
                      </div>
                    </div>
                    <div class="forgot-password-option">
                      <a href="{{ route('password.request') }}" class="text-decoration-none text-primary">Forgot Password
                        ?</a>
                    </div>
                  </div>
                  <div class="fg-actions d-flex justify-content-between">
                    <div class="login-btn">
                      <button class="btn btn-outline-primary">
                        <a href="{{ route('register') }}" class="text-decoration-none">Register</a>
                      </button>
                    </div>
                    <div class="recover-pass">
                      <button class="btn btn-primary">
                        <a type="submit" class="text-decoration-none text-white">Login</a>
                      </button>
                    </div>
                  </div>
                  <hr class="m-0">
                 <!--  <div class="d-flex justify-content-between mt-3">
                    <div class="option-login">
                      <h6 class="text-decoration-none text-primary">Or Login With</h6>
                    </div>
                    <div class="social-login-options">
                      <a class="btn btn-social-icon mr-2 btn-facebook">
                        <span class="fa fa-facebook"></span>
                      </a>
                      <a class="btn btn-social-icon mr-2 btn-twitter">
                        <span class="fa fa-twitter"></span>
                      </a>
                    </div>
                  </div> -->
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Login Page Ends-->

          </div>
        </div>
        <!-- END : End Main Content-->
      </div>






 </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection









