@extends('layouts.admin')

@section('content')
<div class="header">
    <h1 class="page-header">Create User</h1>
</div>
<div id="page-inner">
    <div class="col-sm-12" style="background:white;">
        {!! Form::open(['method'=>'POST', 'route' => 'users.store', 'files' => true]) !!}
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
                    {!! Form::select('role', array('administrator' => 'Administrator','subscriber'=>'Subscriber'), 'subscriber', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>


    <!-- {!! Form::open(['method'=>'POST', 'route' => 'users.store', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div> -->
</div>
@endsection