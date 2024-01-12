@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="{{ route('movie.create') }}" class="btn btn-success">Add +</a>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Director</th>
                            <th scope="col">Actor</th>
                            <th scope="col">Review</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($movies as $movie)

                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $movie->name }}</td>
                                    <td>{{ $movie->director }}</td>
                                    <td>{{ $movie->actor }}</td>
                                    <td>{{ $movie->review }}</td>
                                    <td>
                                        <div>
                                            <div class="d-inline-block">
                                                <a href="{{ route('movie.edit', $movie->id) }}" class="btn btn-outline-warning "><i class="fas fa-pencil"></i></a>
                                            </div>
                                            <div class="d-inline-block">
                                                <a href="{{ route('movie.show', $movie->id) }}" class="btn btn-outline-info "><i class="fas fa-info"></i></a>
                                            </div>
                                            <div class="d-inline-block">
                                                <form action="{{ route('movie.destroy', $movie->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-outline-danger "><i class="fas fa-trash-can"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
