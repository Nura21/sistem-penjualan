@extends('layouts.templates.template-crud')
@section('title', 'Penjualan Stuff')
@section('body')
<body class="hold-transition sidebar-mini">
@endsection
@section('main-menu', 'Stuff')
@section('menu', 'Stuff')
@section('process', 'Read Stuff')
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
                    <table class="table table-head-fixed text-nowrap table-responsive" id="datatable">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Harga</th>
                          <th>Stok</th>
                          <th>Supplier ID</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($stuffs as $s)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $s->nama_barang ?? '-' }}</td>
                          <td>{{ $s->harga ?? '-' }}</td>
                          <td>{{ $s->stok ?? '-' }}</td>
                          <td>{{ $s->supplierName($s->supplier_id)->nama_supplier}}</td>
                          
                          <td>
                            <a href="{{ url('stuffs/'.$s->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ url('stuffs/'.$s->id) }}" method="post">
                              @method('delete')
                              @csrf
                              <button class="btn btn-danger btn-sm">Delete</button>
                            </form> 
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
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