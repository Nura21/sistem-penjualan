@extends('layouts.templates.template-crud')
@section('title', 'Penjualan Client')
@section('body')
<body class="hold-transition sidebar-mini">
@endsection
@section('main-menu', 'Client')
@section('menu', 'Client')
@section('process', 'Read Client')
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
                          <th>Nama Pembeli</th>
                          <th>Jenis Kelamin</th>
                          <th>No. Telepon</th>
                          <th>Alamat</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($clients as $c)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $c->nama_pembeli }}</td>
                          <td>{{ $c->jk }}</td>
                          <td>{{ $c->no_telp }}</td>
                          <td>{{ $c->alamat }}</td>
                          
                          <td>
                            <a href="{{ url('clients/'.$c->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ url('clients/'.$c->id) }}" method="post">
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