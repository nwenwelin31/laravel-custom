@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">
                    <a href="{{ route('student.create') }}" class="col-sm-1 btn btn-dark m-3">
                        <i class="fa fa-plus-circle">Add</i>
                    </a>

                    <table class="table table-striped table-dark">
                        <h1 class="text-center">Student List</h1>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Age</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td>
                                        <a href="{{ route('student.edit', $student->id) }}"
                                            class="btn btn-outline-success"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('student.show', $student->id) }}"
                                            class="btn btn-outline-success"><i class="fa fa-info"></i></a>
                                        <form action="{{ route('student.destroy', $student->id) }}" method="post"
                                            class="d-inline-block">
                                            @method('delete')
                                            @csrf
                                            <button type="" class="btn btn-outline-success">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
