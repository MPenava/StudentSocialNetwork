@extends('layouts.blog-home')


@section('content')
    @if(Auth::check())
        @include('includes.front_left_sidebar')
    @endif
    <!--main-left-sidebar end-->

    @include('includes.front_center_sidebar')
    <!--main-center-sidebar end-->

    @include('includes.front_right_sidebar')

@stop