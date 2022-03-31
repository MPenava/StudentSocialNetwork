@extends('layouts.admin')

@section('content')
<div class="header">
    <h1 class="page-header">Edit User</h1>
</div>
<div id="page-inner">
    <div class="col-sm-12" style="background:white;">
        {!! Form::model($user, ['method'=>'PATCH', 'route' => ['users.update', $user->id], 'files' => true]) !!}
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="input-field col s6">
                {!! Form::text('name', null, ['class' => 'validate']) !!}
                {!! Form::label('name','Name:') !!}
            </div>
            <div class="input-field col s6">
                {!! Form::email('email', null, ['class' => 'validate']) !!}
                {!! Form::label('email','Email:') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                {!! Form::password('password', null, ['class' => 'validate']) !!}
                {!! Form::label('password','Password:') !!}
            </div>
            <div class="input-field col s6">
                {!! Form::text('status', null, ['class' => 'validate']) !!}
                {!! Form::label('status','Status:') !!}
            </div>
        </div>
        <div class="row">
            <div class="group-form  col s6">
                {!! Form::label('photo','Photo:') !!}
                {!! Form::file('photo', null, ['class' => 'form-control']) !!}
            </div>
            <div class="group-form  col s6">
                {!! Form::label('role','Role:') !!}
                {!! Form::select('role', array('administrator' => 'Administrator','subscriber'=>'Subscriber'), null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                {!! Form::submit('Update User', ['class'=>'btn btn-primary btn-sm']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>

</div>
@endsection