@extends('layouts.app')

@section('content')

        <div class="container">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Logo</th>
                <th scope="col">Website</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($companies as $company)
                <tr>
                    <td scope="row">{{ $loop->index + 1 + ($companies->currentPage() - 1) * $companies->perPage() }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td><img src="{{ Storage::url($company->logo)}}" height="90px" /></td>
                    <td><a href="{{ $company->website }}">{{ $company->website }}</a> </td>
                    <td>
                        <div class="d-flex justify-content-evenly">
                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary">Edit</a>
                            <form class="d-block" action="{{ route('companies.destroy',['company'=>$company->id]) }}" method="POST">
                             @csrf
                             @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
               @endforeach
            </tbody>
            </table>

            {{ $companies->links() }}
        </div>
@endsection
