<div class="main-message-box ta-right">
    <div class="message-dt">
        <div class="message-inner-dt">
            <p>{{$message->content}}</p>
        </div>
        <!--message-inner-dt end-->
        <span>{{$message->created_at->diffForHumans()}}</span>
    </div>
    <!--message-dt end-->
    <div class="messg-usr-img">
        <img src="http://via.placeholder.com/50x50" alt="">
    </div>
    <!--messg-usr-img end-->
</div>