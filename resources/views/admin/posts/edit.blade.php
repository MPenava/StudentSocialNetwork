@extends('layouts.admin')


@section('content')
<div class="header">
    <h1 class="page-header">Edit Post</h1>
</div>
<div id="page-inner">
    <div class="col-sm-6" style="background:white;">
        {!! Form::model($post, ['method'=>'PATCH', 'route' => ['posts.update', $post->id], 'files' => true]) !!}
        @csrf
        @method('PATCH')
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
                    {!! Form::submit('Update Post', ['class'=>'btn btn-primary btn-sm']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@stop