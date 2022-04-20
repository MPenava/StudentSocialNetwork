<div class="col-lg-6 col-md-8 no-pd">
    <div class="main-ws-sec">
        <div class="post-topbar">
            <div class="user-picy">
                <img src="http://via.placeholder.com/100x100" alt="">
            </div>
            <div class="post-st">
                <ul>
                    <li><a class="post_project" href="#" title="">Post a Project</a></li>
                    <li><a class="post-jb active" href="#" title="">Post a Job</a></li>
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
                        <div class="ed-opts">
                            <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                            <ul class="ed-options">
                                <li><a href="#" title="">Edit Post</a></li>
                                <li><a href="#" title="">Unsaved</a></li>
                                <li><a href="#" title="">Unbid</a></li>
                                <li><a href="#" title="">Close</a></li>
                                <li><a href="#" title="">Hide</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="epi-sec">
                        <ul class="descp">
                            <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                            <li><img src="images/icon9.png" alt=""><span>India</span></li>
                        </ul>
                        <ul class="bk-links">
                            <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                            <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="job_descp">
                        <h3>{{ $post->title }}</h3>
                        <ul class="job-dt">
                            <img class="img-fluid" src="{{ $post->photo }}" alt="">
                        </ul>
                        <p>{{ $post->content }}</a></p>
                        <ul class="skill-tags">
                            <li><a href="#" title="">HTML</a></li>
                            <li><a href="#" title="">PHP</a></li>
                            <li><a href="#" title="">CSS</a></li>
                            <li><a href="#" title="">Javascript</a></li>
                            <li><a href="#" title="">Wordpress</a></li>
                        </ul>
                    </div>
                    <div class="job-status-bar">
                        <ul class="like-com">
                            <li>
                                <a href="#"><i class="la la-heart"></i> Like</a>
                                <img src="images/liked-img.png" alt="">
                                <span>25</span>
                            </li>
                            <li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
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