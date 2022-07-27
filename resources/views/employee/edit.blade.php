@extends('layouts.master')
@section('mainContent')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Employee</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Employee</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Employee Form</h3>
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <form method="POST" class="form-horizontal" action="{{route('employee.edit', ['employee' => $employee->id])}}">
                @csrf
              <div class="form-group">
                <label for="inputName">First Name</label>
                <input type="text" id="inputName" class="form-control" name="first_name" value="{{$employee->first_name}}">
              </div>
              <div class="form-group">
                <label for="inputName">Last Name</label>
                <input type="text" id="inputName" class="form-control" name="last_name" value="{{$employee->last_name}}">
              </div>
              <div class="form-group">
                <label for="inputName">Company Name</label>
                <select class="form-control" name="company_id">
                <option value="{{$employee->company->id}}">{{$employee->company->name}}</option>
                        @foreach($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach      
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Email</label>
                <input type="text" id="inputName" class="form-control" name="email" value="{{$employee->email}}">
              </div>
              <div class="form-group">
                <label for="inputName">Phone</label>
                <input type="text" id="inputName" class="form-control" name="phone" value="{{$employee->phone}}">
              </div>
              <input type="submit" value="Save Now" class="btn btn-success">
            </div>
          </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection