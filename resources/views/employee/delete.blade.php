@extends('layouts.master')

@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>Delete: {{ $employee->first_name }} {{ $employee->last_name }}</h1>
            <a href="{{ route('employee.single', ['employee' => $employee->id]) }}" class="btn btn-info btn-lg">Cancel</a>               
       <form method="POST" action="{{ route('employee.delete', ['employee' => $employee->id])}}">
        @csrf
        <input type="hidden" name="id" value="{{$employee->id}}">
        <input class="btn btn-danger btn-lg" type="submit" value="Delete">
       </form>
        </div>
    </div>
</div>
@endsection