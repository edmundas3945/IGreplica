@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-9 offset-2">
            <div class="row mb-3">
                <label for="caption" class="col-md-4 col-form-label text-md-end">{{ 'post caption' }}</label>

                <div class="col-md-6">
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" caption="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
