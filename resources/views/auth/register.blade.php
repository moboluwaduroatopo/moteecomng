@extends('layouts.app2')

@section('content2')
<section id="regestration">
  <div class="container-fluid">
    <div class="row full-height-vh m-0">
      <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="card">
          <div class="card-content">
            <div class="card-body register-img">
                 <form method="POST" action="{{ route('register') }}">
                        @csrf

              <div class="row m-0">
                <div class="col-lg-6 d-none d-lg-block py-2 text-center">
                <a href="{{ url('/') }}" >  <img src="app-assets/img/gallery/register.png" alt="" class="img-fluid mt-3 pl-3" width="400"
                    height="230"></a>
                </div>
                
                <div class="col-lg-6 col-md-12 px-4 pt-3 bg-white">
                  <h4 class="card-title mb-2">Create Account</h4>
                  <p class="card-text mb-3">
                    Fill the below form to create a new account.
                  </p>
                  <input type="text"  placeholder="Name" class="mb-3 form-control{{ $errors->has('name') ? ' is-invalid' : '' }} " name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                   <input type="text" class="form-control mb-3" placeholder="Address" name="address" required />
                   <input type="hidden"  name="role" value="user" />
                    <input type="number" class="form-control mb-3" placeholder="Phone Number" name="phone" re />
                  <input type="email"  placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} mb-3" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  <input type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} mb-3" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  <input type="password" class="form-control mb-3" placeholder="Confirm Password" name="password_confirmation" required />
                  <!-- <div class="custom-control custom-checkbox custom-control-inline mb-3">
                    <input type="checkbox" id="customCheckboxInline1" name="customCheckboxInline1" class="custom-control-input"
                      checked />
                    <label class="custom-control-label" for="customCheckboxInline1">
                      I accept the terms & conditions.
                    </label>
                  </div> -->
                  <div class="fg-actions d-flex justify-content-between">
                    <div class="login-btn">
                      <button class="btn btn-outline-primary">
                        <a href="{{ route('login') }}" class="text-decoration-none">
                          Back To Login
                        </a>
                      </button>
                    </div>
                    <div class="recover-pass">
                      <button class="btn btn-primary">
                        <a type="submit" class="text-decoration-none text-white">
                          Register
                        </a>
                      </button>
                    </div>
                  </div>
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
<!--Registration Page Ends-->

          </div>
        </div>
        <!-- END : End Main Content-->
      </div>
       </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection
