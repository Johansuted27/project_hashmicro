@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Character</div>

                <div class="card-body">
                    <form action="{{ route('form.input.user') }}" method="GET">
                        <div class="form-group col-4">
                            <label for="input1">Input 1:</label>
                            <input type="text" class="form-control" name="input1" id="input1" required>
                        </div>

                        <div class="form-group col-4">
                            <label for="input2">Input 2:</label>
                            <input type="text" class="form-control" name="input2" id="input2" required>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Check</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
