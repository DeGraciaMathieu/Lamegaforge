<div class="media">
    <a class="media-left" href="#">
        <img src="/img/user/avatar.jpg" alt="" />
    </a>
    <div class="media-body">
    <div class="media-content">
        <a href="#" class="media-heading">{{$comment->user->name}}</a>
    <span class="date">{{$comment->created_at}}</span>
    <p>{{$comment->content}}</p></div>
    </div>
</div>