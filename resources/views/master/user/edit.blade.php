@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create User</div>

                <div class="card-body">
                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}" required>
                        </div>
                        {{-- <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password" id="password" value="{{ $user->name }}" required>
                        </div> --}}

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
