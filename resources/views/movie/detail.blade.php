@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Director</th>
                                <th scope="col">Actor</th>
                                <th scope="col">Review</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $movie->id }}</th>
                                <td>{{ $movie->name }}</td>
                                <td>{{ $movie->director }}</td>
                                <td>{{ $movie->actor }}</td>
                                <td>{{ $movie->review }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('movie.index') }}" class="btn btn-outline-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
