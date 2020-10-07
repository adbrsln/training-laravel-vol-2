@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('post.update',$post->id) }}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <label for="Title">Title</label>
            <input type="text" name="title" value="{{ old('title') ?? $post->title }}" class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="Body" class="mt-4">Body</label>
            <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="body" cols="30" rows="10">{{   old('body') ?? $post->body }}</textarea>
            @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class=" mt-4 btn btn-primary mt-4 float-right">Submit</button>
        </div>
    </div>
    </form>
</div>
@endsection
