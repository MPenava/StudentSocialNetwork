@extends('layouts/admin')

@section('content')
<div class="header">
    <h1 class="page-header">Dashboard</h1>
</div>
<div id="page-inner">
    <div class="dashboard-cards">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card horizontal cardIcon waves-effect waves-dark">
                    <div class="card-image red">
                        <i class="material-icons dp48">people_alt</i>
                    </div>
                    <div class="card-stacked red">
                        <div class="card-content">
                            <h3>{{ $users_num }}</h3>
                        </div>
                        <div class="card-action">
                            <strong>USERS</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card horizontal cardIcon waves-effect waves-dark">
                    <div class="card-image orange">
                        <i class="material-icons dp48">library_books</i>
                    </div>
                    <div class="card-stacked orange">
                        <div class="card-content">
                            <h3>{{ $posts_num }}</h3>
                        </div>
                        <div class="card-action">
                            <strong>POSTS</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card horizontal cardIcon waves-effect waves-dark">
                    <div class="card-image blue">
                        <i class="material-icons dp48">message</i>
                    </div>
                    <div class="card-stacked blue">
                        <div class="card-content">
                            <h3>{{ $messages_num }}</h3>
                        </div>
                        <div class="card-action">
                            <strong>MESSAGES</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card horizontal cardIcon waves-effect waves-dark">
                    <div class="card-image green">
                        <i class="material-icons dp48">person_add</i>
                    </div>
                    <div class="card-stacked green">
                        <div class="card-content">
                            <h3>88,658</h3>
                        </div>
                        <div class="card-action">
                            <strong>FRIENDSHIPS</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /. ROW  -->

    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-action">
                    <b>Users Panel</b>
                </div>
                <div class="card-image">
                    <div class="collection">
                        @foreach($users as $user)
                        <a href="#!" class="collection-item">{{ $user->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-action">
                    <b>User List</b>
                </div>
                <div class="card-image">
                    <ul class="collection">
                        @foreach($posts as $post)
                            <li class="collection-item avatar">
                                <i class="material-icons circle green"><img width=55 height=55 src="{{ $post->user->photo }} " alt="No image"><img src=""></img></i>
                                <span class="title">{{ $post->title }}</span>
                                <p class="p-2>
                                    <span  text-primary">By</span> {{ $post->user->name }}
                                </p>
                                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /. PAGE INNER  -->
@endsection
