@extends('layouts.master')

@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>Delete: {{ $company->name }}</h1>
            <a href="{{ route('company.single', ['company' => $company->id]) }}" class="btn btn-info btn-lg">Cancel</a>               
       <form method="POST" action="{{ route('company.delete', ['company' => $company->id])}}">
        @csrf
        <input type="hidden" name="id" value="{{$company->id}}">
        <input class="btn btn-danger btn-lg" type="submit" value="Delete">
       </form>
        </div>
    </div>
</div>
@endsection