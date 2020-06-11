<!doctype html>
<html lang="en">
  <head>
    @include('partials._head')
    @yield('title')
  </head>
  <!-- style="background-image:url('../images/net-1.jpg');background-repeat:no-repeat;background-size: cover;" -->
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" >
<div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-6">
            <div class="site-logo">
                <a href="{{url('/')}}"><img src="../images/logonew1.png" alt=" " width="50%" height="2%"></a>
            </div>
        </div>
        <div class="col-6 text-right ml-auto ">
            <h2 style="font-size: 400%;color:darkorange;margin-top:3%"> CC QUERIES</h2>
        </div>
      </div>
    </div>
</div>


  <div class="back-cover" style="background-image:url('../images/cc2.jpg');">
<div class="container" >
    <br>
    <br> <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            
    <div class="card">
        
        <div class="card-header" style="background:#3da1f3">
                <h1 style="text-align:center; font-weight:400; color:white;">REGISTER</h1>
                </div>
        <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-lg-6 txtfield">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                           
                            <div class="col-lg-6 txtfield">
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

                            
                            <div class="col-lg-6 txtfield">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary btn-block">
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
</div>


@include('partials._script')
</body>
</html>
