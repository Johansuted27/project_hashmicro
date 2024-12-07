@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Results</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <td style="width: 20%">Input 1</td>
                            <td style="width: 5%">:</td>
                            <td>{{ $input1 }}</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Input 2</td>
                            <td style="width: 5%">:</td>
                            <td>{{ $input2 }}</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Matches</td>
                            <td style="width: 5%">:</td>
                            <td>{{ $matches }}</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Character Matches</td>
                            <td style="width: 5%">:</td>
                            <td>{{ $char_matches }}</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Percentage</td>
                            <td style="width: 5%">:</td>
                            <td>{{ $percentage }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('index.form') }}" class="btn btn-danger">Back to form</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
