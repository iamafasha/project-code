@extends('layouts.app')

@section('content')
    <div class="container">
    @include('inc.error')
    <form  action="{{ route('company.employees.store', $company ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('employees.inc.form')
        <div class="form-group pt-3">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
    </div>
@endsection()
