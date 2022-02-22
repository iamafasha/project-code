@extends('layouts.app')

@section('content')
    <div class="container">
    <form  action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('company.inc.form')
        <div class="form-group pt-3">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
    </div>
@endsection()
