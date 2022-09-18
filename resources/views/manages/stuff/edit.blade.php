@extends('layouts.templates.template-crud')
@section('title', 'Penjualan Stuff')
@section('body')
<body class="hold-transition sidebar-mini">
@endsection
@section('main-menu', 'Stuff')
@section('menu', 'Stuff')
@section('process', 'Edit Stuff')
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
                    <form action="{{ url('stuffs/'.$stuff->id) }}" method="POST">
                      @method('patch')
                      @csrf
                      <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" id="nama_barang" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" value="{{ $stuff->nama_barang }}" required>
                        @error('nama_barang')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="harga" id="harga" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ $stuff->harga }}" required>
                        @error('harga')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="stok" id="stok" name="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ $stuff->stok }}" required>
                        @error('stok')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      {{-- {{ dd($suppliers->toArray()) }} --}}
                      <div class="form-group">
                        <label for="supplier_id">Supplier ID</label>
                        <br>
                        <select name="supplier_id" id="supplier_id" class="form-control @error('supplier_id') is-invalid @enderror" required>
                          <option value="{{ $stuff->supplier_id }}">{{ $stuff->supplierName($stuff->supplier_id)->nama_supplier }}</option>
                          @foreach ($suppliers as $supplierName)
                            <option value="{{ $supplierName->id }}">{{ $supplierName->nama_supplier }}</option>   
                          @endforeach
                        </select>
                        @error('supplier_id')
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
             
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
      
        @include('layouts.navigations.footer')
    
      </div>
      <!-- ./wrapper -->
@endsection