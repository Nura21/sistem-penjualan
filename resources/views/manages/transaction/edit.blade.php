@extends('layouts.templates.template-crud')
@section('title', 'Penjualan Transaction')
@section('body')
<body class="hold-transition sidebar-mini">
@endsection
@section('main-menu', 'Transaction')
@section('menu', 'Transaction')
@section('process', 'Edit Transaction')
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
                    <form action="{{ url('transactions/'.$transaction->id) }}" method="POST">
                      @method('patch')
                      @csrf
                      <div class="form-group">
                        <label for="stuff_id">Stuff ID</label>
                        <input type="text" id="stuff_id" name="stuff_id" class="form-control @error('stuff_id') is-invalid @enderror" value="{{ $transaction->stuff_id }}" required>
                        @error('stuff_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="client_id">Client ID</label>
                        <input type="client_id" id="client_id" name="client_id" class="form-control @error('client_id') is-invalid @enderror" value="{{ $transaction->client_id }}" required>
                        @error('client_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ $transaction->quantity }}" required>
                        @error('quantity')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ $transaction->tanggal }}" required>
                        @error('tanggal')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      {{-- {{ dd($suppliers->toArray()) }} --}}
                      <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <br>
                        <input type="text" id="keterangan" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ $transaction->keterangan }}" required>
                        @error('keterangan')
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