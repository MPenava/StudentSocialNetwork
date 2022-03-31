@extends('layouts.admin')

@section('content')
<div class="header">
    <h1 class="page-header">All Users</h1>
</div>
<div id="page-inner">
    @if(session('user_created'))
        <div class="alert alert-success">
            {{ session('user_created') }}
        </div>
    @endif
    @if($users)
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Role</th>
                <th scope="col">Created At</th>
                <th scope="col" colspan="2" class="text-center">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td><img width=55 height=55 src="{{ $user->photo }} " alt="No image"></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->status ? $user->status : 'No status'  }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->created_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">
                        <button type="submit" class='btn btn-success btn-sm'>Edit</button>
                    </a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) !!}
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