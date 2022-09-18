@extends('layouts.templates.template-crud')
@section('title', 'Penjualan Client')
@section('body')
<body class="hold-transition sidebar-mini">
@endsection
@section('main-menu', 'Client')
@section('menu', 'Client')
@section('process', 'Create Client')
@section('main')

    {{-- @if($error)
    {{ $error }}
    @endif --}}

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
                    <form action="{{ url('clients') }}" method="POST">
                      @csrf
                        <div class="form-group">
                          <label for="nama_pembeli">Nama Pembeli</label>
                          <input type="text" id="nama_pembeli" name="nama_pembeli" class="form-control @error('nama_pembeli') is-invalid @enderror" value="{{ old('nama_pembeli') }}" required>
                          @error('nama_pembeli')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="jk">Jenis Kelamin</label>
                          <input type="text" id="jk" name="jk" class="form-control @error('jk') is-invalid @enderror" value="{{ old('jk') }}" required>
                          @error('jk')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="no_telp">No Telepon</label>
                          <input type="no_telp" id="no_telp" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" value="{{ old('no_telp') }}" required>
                          @error('no_telp')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <input type="alamat" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" required>
                          @error('alamat')
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