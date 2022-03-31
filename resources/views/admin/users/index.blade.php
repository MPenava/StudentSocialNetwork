@extends('layouts.admin')

@section('content')
<div class="header">
    <h1 class="page-header">All Users</h1>
</div>
<div id="page-inner">
    @if($users)
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Role</th>
                <th scope="col">Created At</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td><img width=64 height=64 src="{{ $user->photo }} " alt="No image"></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->status ? $user->status : 'No status'  }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->created_at->diffForHumans() }}</td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) !!}
                    <div class="form-group">
                        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
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