@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body shadow">
                        <form action="{{ route('student.store') }}" method="POST">
                            @csrf
                            <div class="col-md-10">
                                <label for="name">Name</label>
                                <input type="input" value="{{ old('name') }}" class="form-control" name="name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-10">
                                <label for="email">Email</label>
                                <input type="email" value="{{ old('email') }}" class="form-control" name="email">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-10 mb-4">
                                <label for="age">Age</label>
                                <input type="input" value="{{ old('age') }}" class="form-control" name="age">
                                @error('age')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <a href="{{ route('student.index') }}" class="btn btn-dark">Cancel</a>
                            <button type="submit" class="btn btn-dark">Submit</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
