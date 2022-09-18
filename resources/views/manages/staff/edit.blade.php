@extends('layouts.templates.template-crud')
@section('title', 'PEKEL User')
@section('body')
<body class="hold-transition sidebar-mini">
@endsection
@section('main-menu', 'User')
@section('menu', 'User')
@section('process', 'Edit User')
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
                    <form action="{{ url('users/'.$user->id) }}" method="POST">
                      @method('patch')
                      @csrf
                      <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" required>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" required>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ $user->password }}" required>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn-dark">Edit</button>
                      </div>
                    </div>
                    </form>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              {{-- <div class="col-md-6">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title">Budget</h3>
      
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputEstimatedBudget">Estimated budget</label>
                      <input type="number" id="inputEstimatedBudget" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="inputSpentBudget">Total amount spent</label>
                      <input type="number" id="inputSpentBudget" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="inputEstimatedDuration">Estimated project duration</label>
                      <input type="number" id="inputEstimatedDuration" class="form-control">
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div> --}}
            {{-- <div class="row">
              <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new Project" class="btn btn-success float-right">
              </div>
            </div> --}}
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
      
        @include('layouts.navigations.footer')
    
      </div>
      <!-- ./wrapper -->
@endsection




{{-- <input class="form-select @error('nik') is-invalid @enderror" type="text" name="nik" id="nik" value="{{ old('nik') }}" required>
             @error('nik')
              <div class="alert alert-danger">{{ $message }}</div>
             @enderror --}}