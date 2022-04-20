<div class="col-lg-3 col-md-4 pd-left-none no-pd">
    <div class="main-left-sidebar no-margin">
        <div class="user-data full-width">
            <div class="user-profile">
                <div class="username-dt">
                    <div class="usr-pic">
                        <img width="100" height="100" src="{{ $user->photo }}" alt="">
                    </div>
                </div>
                <!--username-dt end-->
                <div class="user-specs">
                    <h3>Marko Penava</h3>
                    <span>Student at {{ $user->faculty }}</span>
                </div>
            </div>
            <!--user-profile end-->
            <ul class="user-fw-status">
                <li>
                    <h4>Following</h4>
                    <span>34</span>
                </li>
                <li>
                    <a href="#" title="">View Profile</a>
                </li>
            </ul>
        </div>
        <!--user-data end-->
        <div class="suggestions full-width">
            <div class="sd-title">
                <h3>Suggestions</h3>
                <i class="la la-ellipsis-v"></i>
            </div>
            <!--sd-title end-->
            <div class="suggestions-list">
                @foreach($potential_friends as $potential_friend)
                    <div class="suggestion-usd">
                        <img width="35" src="{{ $potential_friend->photo }}" alt="">
                        <div class="sgt-text">
                            <h4>{{ $potential_friend->name }}</h4>
                            <span>Student at: {{ $potential_friend->faculty }}</span>
                        </div>
                        <span><i class="la la-plus"></i></span>
                    </div>
                @endforeach
                <div class="view-more">
                    <a href="#" title="">View More</a>
                </div>
            </div>
            <!--suggestions-list end-->
        </div>
        <!--suggestions end-->
    </div>
</div>