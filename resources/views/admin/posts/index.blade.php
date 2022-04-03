@extends('layouts.admin')


@section('content')
<div class="header">
    <h1 class="page-header">All Posts</h1>
</div>
<div id="page-inner">
    @if(session('post_created'))
    <div class="alert alert-success">
        {{ session('post_created') }}
    </div>
    @endif
    @if(session('post_updated'))
    <div class="alert alert-success">
        {{ session('post_updated') }}
    </div>
    @endif
    @if($posts)
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Photo</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Created At</th>
                <th scope="col" colspan="2" class="text-center">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td><img width=100 height=55 src="{{ $post->photo }} " alt="No image"></td>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->title}}</td>
                <td>{{ Str::limit($post->content, 30) }}</td>
                <td>{{ $post->created_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post->id) }}">
                        <button type="submit" class='btn btn-success btn-sm'>Edit</button>
                    </a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id]]) !!}
                    <div class="form-group">
                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection