@extends('layouts.master')
@section('mainContent')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Company</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Company</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Company Form</h3>
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
              <form method="POST" class="form-horizontal" action="{{route('company.edit', ['company' => $company->id])}}" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="inputName">Company Name</label>
                <input type="text" id="inputName" class="form-control" name="name" value="{{$company->name}}">
              </div>
              <div class="form-group">
                <label for="inputName">Contact Email</label>
                <input type="text" id="inputName" class="form-control" name="email" value="{{$company->email}}">
              </div>
              <div class="form-group">
                <label for="inputName">Company Website</label>
                <input type="text" id="inputName" class="form-control" name="website" value="{{$company->website}}">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Company Logo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="logo">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
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