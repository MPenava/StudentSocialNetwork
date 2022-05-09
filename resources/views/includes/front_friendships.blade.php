<section class="companies-info">
    <div class="container">
        <div class="company-title">
            <h3>Students</h3>
        </div>
        <!--company-title end-->
        <div class="companies-list">
            <div class="row">
                @foreach($users as $user)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="company_profile_info">
                            <div class="company-up-info">
                                <img width="91" height="91" src="{{ $user->photo }}" alt="">
                                <h3>{{ $user->name }}</h3>
                                <h4>{{ $user->faculty }}</h4>
                                <ul>
                                    <li>
                                        {!! Form::open(['method'=>'POST', 'route' => 'friendships.store', 'files' => true]) !!}
                                            {!! Form::hidden('target_id', $user->id) !!}    
                                            <button type="submit"  title="" class="btn follow text-light">Follow</button>
                                        {!! Form::close() !!}
                                    </li>
                                    <li><a href="#" title="" class="message-us"><i class="la la-envelope-o"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" title="" class="view-more-pro">View Profile</a>
                        </div>
                        <!--company_profile_info end-->
                    </div>
                @endforeach
            </div>
        </div>
        <!--companies-list end-->
    </div>
</section>
<!--companies-info end-->