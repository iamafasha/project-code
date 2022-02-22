@extends('layouts.app')

@section('content')
    <div class="container">
    <form  action="{{ route('company.employees.update', [$company->id, $employee->id]) }}" method="POST" >
        @csrf

        @include('employees.inc.form')
        <div class="form-group pt-3">
            <input type="submit" class="btn btn-primary">
        </div>

        @method('PUT')
    </form>
    </div>
@endsection()
