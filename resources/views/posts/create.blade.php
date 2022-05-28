@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-9 offset-2">
                <div class="row">
                    <h1>Adding new post</h1>
                </div>
                <div class="row mb-3">
                    <label for="caption" class="col-form-label text-md-start">{{ 'post caption' }}</label>

                    <input id="caption" 
                    type="text" 
                    class="form-control @error('caption') is-invalid @enderror" 
                    caption="caption" 
                    value="{{ old('caption') }}" 
                    required autocomplete="caption" 
                    autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post image</label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary">Add post</button>
                </div>
                   
            </div>
        </div>
        
    </form>
    
</div>
@endsection
