<div class="post-popup pst-pj">
    <div class="post-project">
        <h3>Create a post</h3>
        <div class="post-project-fields">
            {!! Form::open(['method'=>'POST', 'route' => 'post.store', 'files' => true]) !!}
                <div class="row">
                    <div class="input-field col s12">
                        {!! Form::text('title', null, ['class' => 'validate', 'placeholder'=>'Title']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="group-form  col s6">
                        {!! Form::file('photo', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        {!! Form::textarea('content', null, ['class' => 'form-control validate','placeholder'=>'Content', 'rows'=>3]) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <ul>
                            <li><button class="active" type="submit" value="post">Post</button></li>
                        </ul>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        <!--post-project-fields end-->
        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
    </div>
    <!--post-project end-->
</div>
<!--post-project-popup end-->