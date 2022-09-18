@extends('layouts.templates.template-crud')
@section('title', 'Penjualan Transaction')
@section('body')
<body class="hold-transition sidebar-mini">
@endsection
@section('main-menu', 'Transaction')
@section('menu', 'Transaction')
@section('process', 'Read Transaction')
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
                          <th>Stuff ID</th>
                          <th>Client ID</th>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                          <th>Quantity</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($transactions as $t)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $t->stuffName->nama_barang }}</td>
                          <td>{{ $t->clientName->nama_pembeli }}</td>
                          <td>{{ $t->tanggal }}</td>
                          <td>{{ $t->keterangan }}</td>
                          <td>{{ $t->quantity }}</td>
                          <td>
                            <a href="{{ url('transactions/'.$t->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ url('transactions/'.$t->id) }}" method="post">
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


{{-- @foreach($participants as $no => $loc) --}}
{{-- <tr> --}}
  {{-- <td>{{ $no+1 }}</td>
  <td>{{ $loc->ticketnumber }}</td>
  <td>{{ $loc->fullname }}</td>
  <td>{{ $loc->phonenumber }}</td>
  <td>{{ $loc->nik }}</td>
  <td>{{ $loc->dateofbirth }}</td>
  <td>{{ $loc->gender }}</td>
  <td>{{ $loc->status }}</td> --}}

  {{-- <td> --}}
    {{-- <a href="/detail/edit/{{ $loc->id }}" class="btn btn-warning btn-sm">Detail</a> --}}
  {{-- </td> --}}
{{-- </tr> --}}
{{-- @endforeach --}}