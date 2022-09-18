      @extends('layouts.templates.template-crud')
      @section('title', 'Penjualan User')
      @section('body')
      <body class="hold-transition sidebar-mini">
      @endsection
      @section('main-menu', 'User')
      @section('menu', 'User')
      @section('process', 'Read User')
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
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($users as $u)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $u->nama }}</td>
                                <td>{{ $u->username }}</td>
                                <td>{{ $u->password }}</td>
                                
                                <td>
                                  <a href="{{ url('users/'.$u->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                  <form action="{{ url('users/'.$u->id) }}" method="post">
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