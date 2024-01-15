@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('movie.store') }}">
                        @csrf
                        <div class="form-group row mb-3">
                          <label class="col-sm-2 col-form-label">Name <small class="text-danger">*</small></label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="" name="name" value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group row mb-3">
                          <label class="col-sm-2 col-form-label">Director <small class="text-danger">*</small></label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control @error('director') is-invalid @enderror" placeholder="" name="director" value="{{ old('director') }}">
                            @error('director')
                              <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-sm-2 col-form-label">Actor <small class="text-danger">*</small></label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control @error('actor') is-invalid @enderror" placeholder="" name="actor" value="{{ old('actor') }}">
                              @error('actor')
                                <small class="text-danger">{{ $message }}</small>
                              @enderror
                            </div>
                        </div>
                        <fieldset class="form-group">
                          <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Review <small class="text-danger">*</small></legend>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="review" id="gridRadios1" value="Best" {{ old('review') == 'Best'? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios1">
                                  Best
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="review" id="gridRadios2" value="Good" {{ old('review') == 'Good'? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios2">
                                  Good
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="review" id="gridRadios3" value="Bad" {{ old('review') == 'Bad'? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios3">
                                  Bad
                                </label>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <div class="form-group row mb-3">
                          <div class="">
                            <a href="{{ route('movie.index') }}" class="btn btn-outline-secondary">Cancel</a>
                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
