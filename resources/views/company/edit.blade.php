@extends('layouts.app')

@section('content')
    <div class="container">
    <form  action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @include('company.inc.form')
        <div class="form-group pt-3">
            <input type="submit" class="btn btn-primary">
        </div>

        @method('PUT')
    </form>
    </div>
@endsection()
