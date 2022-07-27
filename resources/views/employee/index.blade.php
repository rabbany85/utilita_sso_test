@extends('layouts.master')
@section('mainContent')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('employee.new')}}">
                <button type="button" class="btn btn-success">Add New Employee</button>
              </a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       


        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Employee List</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Company</th>
                      <th>Details</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($employees as $employee)
                    <tr>
                      <td>{{$employee->id}}</td>
                      <td>{{$employee->first_name}}</td>
                      <td>{{$employee->last_name}}</td>
                      <td>{{$employee->email}}</td>
                      <td>{{$employee->phone}}</td>
                      <td>{{$employee->company->name}}</td>
                      <td>
                          <a href="{{ route('employee.single', ['employee' => $employee->id]) }}">
                             <button type="button" class="btn btn-default btn-block">
                                  Details
                             </button>
                          </a>
                      </td>
                      <td>
                          <a href="{{ route('employee.edit', ['employee' => $employee->id]) }}">
                            <button type="button" class="btn btn-default btn-block">
                                  Edit
                            </button>
                          </a>
                      </td>
                      <td>
                          <a href="{{ route('employee.delete', ['employee' => $employee->id])}}">
                            <button type="button" class="btn btn-default btn-block">
                                    Delete
                            </button>
                          </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $employees->links() }}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection