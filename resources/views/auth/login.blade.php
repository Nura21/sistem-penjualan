@extends('layouts.templates.template-auth')
@section('title', 'Penjualan Login')
@section('body')
<body class="hold-transition login-page">  
@endsection
  @section('main')
  <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="{{ url('/') }}" class="h1"><b>Pen</b>jualan</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Smile, breathe, and go slowly.</p>
    
          <form action="{{ url('login') }}" method="POST" id="loginForm">
            @csrf
            <div class="input-group mb-3">
              <input type="username" class="form-control  @error('username') is-invalid @enderror" placeholder="username" name="username" id="username">
              @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope">

                  </span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" id="password">
              {{-- @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror --}}
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block" id="login">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
          {{-- <div class="social-auth-links text-center mt-2 mb-3">
            <a href="#" class="btn btn-block btn-primary">
              <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
          </div> --}}
          <!-- /.social-auth-links -->
    
          {{-- <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
          </p> --}}
          <p class="mb-0">
            <a href="{{ url('/register') }}" class="text-center">Register a new membership</a>
          </p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box --> 
</body>
@endsection