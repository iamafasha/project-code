@extends('layouts.app')

@section('content')

        <div class="container">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($employees as $employee)
                <tr>
                    <td scope="row">{{ $loop->index + 1 + ($employees->currentPage() - 1) * $employees->perPage() }}</td>
                    <td>{{ $employee->first_name  .' '. $employee->last_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>
                        <div class="d-flex justify-content-evenly">
                            <a href="{{ route('company.employees.edit', [$employee->company_id ,$employee->id]) }}" class="btn btn-primary">Edit</a>
                            <form class="d-block" action="{{ route('company.employees.destroy',[$employee->company_id,$employee->id]) }}" method="POST">
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

            {{ $employees->links() }}
        </div>
@endsection
