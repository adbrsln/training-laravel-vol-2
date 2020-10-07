@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('post.store') }}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <label for="Title">Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="Body" class="mt-4">Body</label>
            <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
            @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary float-right mt-4">Submit</button>
        </div>
    </div>
    </form>
</div>
@endsection
