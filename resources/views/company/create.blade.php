@extends('layouts.app')

@section('content')
    <div class="container">
    <form  action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Name</label>
            <input class="form-control" type="text" name="name" id="title" required>
        </div>

        <div class="form-group">
            <label for="title">Email</label>
            <input class="form-control" type="email" name="email" id="title" required>
        </div>

        <div class="form-group">
            <label for="title">Logo</label>
            <input class="form-control" type="file" name="logo" id="title">
        </div>


         <div class="form-group">
            <label for="title">Website</label>
            <input class="form-control" type="url" name="website" id="title">
        </div>


        {{-- <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" rows="3" name="body"></textarea>
        </div> --}}
        <div class="form-group pt-3">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
    </div>
@endsection()
