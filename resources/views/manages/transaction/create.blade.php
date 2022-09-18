@extends('layouts.templates.template-crud')
@section('title', 'Penjualan Transaction')
@section('body')
<body class="hold-transition sidebar-mini">
@endsection
@section('main-menu', 'Transaction')
@section('menu', 'Transaction')
@section('process', 'Create Transaction')
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
                    <form action="{{ url('transactions') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="stuff_id">Stuff ID</label>
                        <br>
                        <select name="stuff_id" id="stuff_id" class="form-control @error('stuff_id') is-invalid @enderror" required>
                          @foreach ($stuffs as $stuffName)
                            <option value="{{ $stuffName->id }}">{{ $stuffName->nama_barang }}</option>   
                          @endforeach
                        </select>
                        @error('stuff_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="client_id">Client ID</label>
                        <select name="client_id" id="client_id" class="form-control @error('client_id') is-invalid @enderror" required>
                          @foreach ($clients as $clientName)
                            <option value="{{ $clientName->id }}">{{ $clientName->nama_pembeli }}</option>   
                          @endforeach
                        </select>
                        @error('client_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}" required>
                        @error('quantity')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" min="{{ date('Y-m-d', strtotime(now())) }}" max="2099-12-30" value="{{ old('tanggal') }}" required>
                        @error('tanggal')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <br>
                        <input type="text" id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}" required>
                        @error('keterangan')
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