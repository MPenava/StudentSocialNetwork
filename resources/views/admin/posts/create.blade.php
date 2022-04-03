@extends('layouts.admin')


@section('content')
<div class="header">
    <h1 class="page-header">Create Post</h1>
</div>
<div id="page-inner">
    <div class="col-sm-6" style="background:white;">
        {!! Form::open(['method'=>'POST', 'route' => 'posts.store', 'files' => true]) !!}
            <div class="row">
                <div class="input-field col s12">
                    {!! Form::text('title', null, ['class' => 'validate']) !!}
                    {!! Form::label('title','Title:') !!}
                </div>
            </div>
            <div class="row">
                <div class="group-form  col s6">
                    {!! Form::label('photo','Photo:') !!}
                    {!! Form::file('photo', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    {!! Form::label('content','Content:') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control validate', 'rows'=>3]) !!}
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@stop