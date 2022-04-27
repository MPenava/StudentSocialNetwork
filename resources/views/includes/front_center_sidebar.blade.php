<div class="col-lg-6 col-md-8 no-pd">
    <div class="main-ws-sec">
        <div class="post-topbar">
            <div class="user-picy">
                <img src="http://via.placeholder.com/100x100" alt="">
            </div>
            <div class="post-st">
                <ul>
                    <li><a class="post_project active" href="" title="">New Post</a></li>
                </ul>
            </div>
            <!--post-st end-->
        </div>
        <!--post-topbar end-->
        <div class="posts-section">
            @foreach($posts as $post)
            <div class="post-bar">
                <div class="post_topbar">
                    <div class="usy-dt">
                        <img width="50" height="50" src="{{ $post->user->photo}}" alt="">
                        <div class="usy-name">
                            <h3>{{ $post->user->name}}</h3>
                            <span><img src="images/clock.png" alt="">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                    @if($post->user_id == Auth::user()->id)
                    <div class="ed-opts">
                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                        <ul class="ed-options">
                            <li><a href="#" title="">Edit Post</a></li>
                            <li><a href="post/{{$post->id}}" title="" onclick="return confirm('Are you sure?')">Delete</a></li>
                            <li>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $post->id]]) !!}
                                <a href="">
                                    {!! Form::submit('Delete',['onclick' => "return confirm('Are you sure?')"]) !!}
                                </a>
                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="epi-sec">
                    <ul class="descp">
                        <li><img src="images/icon8.png" alt=""><span>{{ $user->faculty }}</span></li>
                    </ul>
                    @if($post->user_id == Auth::user()->id)
                    <ul class="bk-links">
                        <li><a href="#" title=""><i class="la la-edit"></i></a></li>
                        <li>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $post->id]]) !!}
                            <button type="submit" class="p-0 border-0 pe-auto" style="cursor: pointer;" onclick="return confirm('Are you sure?')"><i class="la la-trash-o bg-danger"></i></button>
                            {!! Form::close() !!}
                        </li>
                    </ul>
                    @endif
                </div>
                <div class="job_descp">
                    <h3>{{ $post->title }}</h3>
                    <ul class="job-dt">
                        <img class="img-fluid" src="{{ $post->photo }}" alt="">
                    </ul>
                    <p>{{ $post->content }}</a></p>
                </div>
                <div class="job-status-bar">
                    <ul class="like-com">
                        <li>
                            <a href="#"><i class="la la-heart"></i> Like</a>
                            <img src="images/liked-img.png" alt="">
                        </li>
                    </ul>
                    <a><i class="la la-eye"></i>Views 50</a>
                </div>
            </div>
            @endforeach
            <!--post-bar end-->
            <div class="process-comm">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
            <!--process-comm end-->
        </div>
        <!--posts-section end-->
    </div>
    <!--main-ws-sec end-->
</div>

@include('includes.front_create_post_popup')