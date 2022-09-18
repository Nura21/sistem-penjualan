@extends('layouts.templates.template-crud')
@section('title', 'PEKEL User')
@section('body')
<body class="hold-transition sidebar-mini">
@endsection
@section('main-menu', 'User')
@section('menu', 'User')
@section('process', 'Create User')
@section('main')
    <!-- Site wrapper -->
    <div class="wrapper">

        @include('layouts.preloader')

        @include('layouts.navigations.navbar')
      
        @include('layouts.navigations.sidebar')
      
        @include('layouts.content-wrapper')
      
          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">General</h3>
      
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <form action="{{ url('users') }}" method="POST">
                      @csrf
                        <div class="form-group">
                          <label for="fullname">Nama Lengkap</label>
                          <input type="text" id="name" name="name" class="form-control @error('fullname') is-invalid @enderror" value="{{ old('name') }}" required>
                          @error('fullname')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                          @error('email')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required>
                          @error('password')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        
                        <div class="form-group">
                          <button type="submit" class="btn-dark">Create</button>
                        </div>
                      </div>
                    </form>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
      
        @include('layouts.navigations.footer')
    
      </div>
      <!-- ./wrapper -->
@endsection