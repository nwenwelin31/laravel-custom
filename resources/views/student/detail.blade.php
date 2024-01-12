@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card shadow">
                    <h1 class="text-center">Information</h1>
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Age</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $student->id }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->age }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('student.index') }}" class="col-sm-1 btn btn-dark m-3">Back</a>
                </div>
            </div>

        </div>
    </div>
@endsection
