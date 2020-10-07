@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('post.store') }}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <label for="Title">Title</label>
            <input type="text" name="title" class="form-control mb-4">

            <label for="Body">Body</label>
            <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>

            <button type="submit" class="btn btn-primary float-right mt-4">Submit</button>
        </div>
    </div>
    </form>
</div>
@endsection
