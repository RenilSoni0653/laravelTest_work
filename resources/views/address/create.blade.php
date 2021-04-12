@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ url('/a') }}">
            @csrf
                <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">Full address</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address" autofocus>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="a_type" class="col-md-4 col-form-label text-md-right">Address type</label>

                            <div class="col-md-6">
                                <select id="a_type" class="form-control @error('a_type') is-invalid @enderror" name="a_type" value="{{ old('a_type') }}" autocomplete="a_type" autofocus>
                                    <option>Home</option>
                                    <option>Office</option>
                                </select>
                                @error('a_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                
                    </form>
                </div>
            </div>
        </div>
@endsection