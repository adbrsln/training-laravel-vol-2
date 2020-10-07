@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Posts') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('post.create') }}" class="btn btn-primary mb-4 float-right">Create New Post</a>

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Body</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($collection as $item)

                          <tr>
                            <th scope="row">{{ $item->title }}</th>
                            <td>{{ $item->body }}</td>
                            <td>
                                <a href="{{ route('post.show',$item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('post.destroy',$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                          </tr>

                        @endforeach
                        </tbody>
                      </table>

                      {{ $collection->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
