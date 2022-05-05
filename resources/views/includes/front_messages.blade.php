<section class="messages-page">
    <div class="container">
        <div class="messages-sec">
            <div class="row">
                <div class="col-lg-4 col-md-12 no-pdd">
                    <div class="msgs-list">
                        <div class="msg-title">
                            <h3>Messages</h3>
                        </div>
                        <!--msg-title end-->
                        <div class="messages-list">
                            <ul>
                                @foreach($chats as $chat)
                                <a href="{{ route('messages.show', $chat->target_id) }}">
                                    <li class="">
                                        <div class="usr-msg-details">
                                            <div class="usr-ms-img">
                                                <img width="50" height="50" src="{{$chat->targetUser->photo}}" alt="">
                                                <span class="msg-status"></span>
                                            </div>
                                            <div class="usr-mg-info">
                                                <h3>{{ $chat->targetUser->name }}</h3>
                                                <p>{{ Str::limit($chat->content, 30) }}</p>
                                            </div>
                                            <!--usr-mg-info end-->
                                            <span class="posted_time">1:55 PM</span>
                                            <span class="msg-notifc">1</span>
                                        </div>
                                        <!--usr-msg-details end-->
                                    </li>
                                </a>
                                @endforeach      
                            </ul>
                        </div>
                        <!--messages-list end-->
                    </div>
                    <!--msgs-list end-->
                </div>
                @if($messages)
                <div class="col-lg-8 col-md-12 pd-right-none pd-left-none">
                    <div class="main-conversation-box">
                        <div class="message-bar-head">
                            <div class="usr-msg-details">
                                <div class="usr-ms-img">
                                    <img width="50" height="50"src="{{ $target->photo }}" alt="">
                                </div>
                                <div class="usr-mg-info">
                                    <h3>{{ $target->name }}</h3>
                                    <p>{{ $target->faculty}}</p>
                                </div>
                                <!--usr-mg-info end-->
                            </div>
                            <a href="#" title=""><i class="fa fa-ellipsis-v"></i></a>
                        </div>
                        <!--message-bar-head end-->
                        <div class="messages-line">
                            @foreach($messages as $message)
                                @if($message->source_id == $user->id)
                                    @include('includes.front_message_user')
                                @else
                                    @include('includes.front_message_target')
                                @endif
                            @endforeach
                        </div>
                        <!--messages-line end-->
                        <div class="message-send-area">
                        {!! Form::open(['method'=>'POST', 'route' => 'messages.store', 'files' => true]) !!}
                                <div class="mf-field">
                                    {!! Form::hidden('target_id', $target->id) !!}
                                    {!! Form::text('content', null, ['class' => 'validate', 'placeholder'=>'Type a message here']) !!}
                                    <button type="submit">Send</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                        <!--message-send-area end-->
                    </div>
                    <!--main-conversation-box end-->
                </div>
                @endif
            </div>
        </div>
        <!--messages-sec end-->
    </div>
</section>
<!--messages-page end-->