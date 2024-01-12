@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('student.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-md-12">
                                <label for="name">Name</label>
                                <input type="input" value="{{ $student->name }}"
                                    class="form-control @error('name') is-invalid @enderror" name="name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input type="email" value="{{ $student->email }}"
                                    class="form-control @error('email') is-invalid @enderror" name="email">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="age">Age</label>
                                <input type="input" value="{{ $student->age }}"
                                    class="form-control @error('age') is-invalid @enderror" name="age">
                                @error('age')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <a href="{{ route('student.index') }}" class="btn btn-dark">Cancel</a>
                            <button type="submit" class="btn btn-dark m-3">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
