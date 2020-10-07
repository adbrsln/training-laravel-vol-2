@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('post.update',$post->id) }}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <label for="Title">Title</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control mb-4">

            <label for="Title">Title</label>
            <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{  $post->body }}</textarea>

            <button type="submit" class=" mt-4 btn btn-primary mt-4 float-right">Submit</button>
        </div>
    </div>
    </form>
</div>
@endsection
