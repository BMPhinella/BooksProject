{{--
    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
<!--Start of Registration Page-->
<!DOCTYPE html>
<html lang="en">
@include('layouts.login_layouts.styling')
<body class="hold-transition login-page">
<div class="login-box">
<div class="logo text-left text-center mb-2"><img src="{{asset('images/books.jpg')}}"  style="width:100px; height:100px;"/> </div>
  <div class="login-box-body">
    <h3 class="login-box-msg">Sign Up</h3>
    <form action="{{ route('register') }}" method="post">
        @csrf
      <div class="form-group has-feedback">
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror sty1" name="name"  placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group has-feedback">
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror sty1" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>
      <div class="form-group has-feedback">
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror sty1" name="password" placeholder="Password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group has-feedback">
        <input id="password-confirm" type="password" class="form-control sty1" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
      </div>
      <div>
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox">
               I agree to all Terms </label>
             </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign UP</button>
        </div>
        <!-- /.col --> 
      </div>
    </form>
    <div class="m-t-2">Already have an account? <a href="{{ route('login') }}" class="text-center">Sign In</a></div>
  </div>
  <!-- /.login-box-body --> 
</div>
@include('layouts.login_layouts.javascript')
</body>
</html>
<!--End of Registration Page-->
