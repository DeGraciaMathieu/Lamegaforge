@extends('template')

@section('content')

@include('partials.highlight_video', ['video' => $video])

        <section class="padding-top-50 padding-bottom-50">
            <div class="container">
                <div class="row sidebar">
                    <div class="col-md-9 leftside">
                        <div class="post post-single">
                            <div class="post-header post-author">
                                <div class="post-title" style="padding-left: 0px;">
                                    <h2><a href="#">{{$video->title}}</a></h2>
                                    <ul class="post-meta">
                                        <li><i class="fa fa-clock-o"></i> {{$video->formatedPublishedAt()}}</li>
                                        <li> <a href="#"><i class="fa fa-comments"></i> 0 <span class="hidden-xs">Comments</span></a></li>
                                        <li> <i class="fa fa-eye"></i> {{$video->view_count}} <span class="hidden-xs">Vues</span></li>
                                        <li> <i class="fa fa-thumbs-up"></i> {{$video->like_count}} <span class="hidden-xs">Likes</span></li>
                                    </ul>
                                </div>
                            </div>

                            <p>{{$video->description}}</p>

                            <div class="row margin-top-40">
                                <div class="col-md-8 col-xs-12">
{{--                                     <div class="tags">
                                        <a href="#">Playstation 4</a>
                                        <a href="#">Xbox One</a>
                                        <a href="#">Mirrors Edge</a>
                                        <a href="#">Cod Black Ops 3</a>
                                        <a href="#">Battlefront 3</a>
                                    </div> --}}
                                </div>
                                <div class="col-md-4 hidden-xs hidden-sm">
                                    <ul class="share">
                                        <li><a href="#" class="btn btn-sm btn-social-icon btn-facebook" data-toggle="tooltip" title="Share on facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="btn btn-sm btn-social-icon btn-twitter" data-toggle="tooltip" title="Share on twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="btn btn-sm btn-social-icon btn-google-plus" data-toggle="tooltip" title="Share on google"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="comments">
                            <h4 class="page-header"><i class="fa fa-comment-o"></i> Comments (5)</h4>
                            <a href="#" class="btn btn-block btn-primary text-left margin-bottom-30"><i class="fa fa-spinner fa-pulse margin-right-10"></i> Load more 4 comments</a>


                            @foreach($comments as $comment)
                            <div class="media">
                                <a class="media-left" href="#">
                                    <img src="/img/user/avatar2.jpg" alt="" />
                                </a>
                                <div class="media-body">
                                    <div class="media-content">
                                        <a href="#" class="media-heading">{{$comment->user->name}}</a>
                                        <a href="#" class="btn btn-sm btn-primary pull-right">reply</a>
                                        <span class="date">{{$comment->created_at}}</span>
                                        <p>{{$comment->content}}</p>
                                    </div>
                                    @foreach($comment->relatedComments as $relatedComment)
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
                                    @endforeach
                                </div>
                            </div>
                            @endforeach



                            <div class="comment-form">
                                <h4 class="page-header">Leave a comment</h4>
                                <form method='post'>
                                    <input type='hidden' id='video-id' value="{{$video->id}}">
                                    <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <textarea id='comment-content' class="form-control" rows="6" placeholder="Your Comment"></textarea>
                                    </div>
                                    <button id='push-comment' type="button" class="btn btn-primary btn-rounded btn-shadow pull-right">Submit Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 rightside">
                        <div class="widget">
                            <div class="title">Recommended Videos</div>
                            @foreach($randomVideos as $randomVideo)
                            <div class="card card-video">
                                <div class="card-img">
                                    <a href="videos-single.html"><img src="http://i1.ytimg.com/vi/{{$randomVideo->youtube_id}}/mqdefault.jpg" alt=""></a>
                                    <div class="time">{{$randomVideo->formatedDuration()}}</div>
                                </div>
                                <div class="caption">
                                    <h3 class="card-title"><a href="videos-single.html">{{$randomVideo->title}}</a></h3>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> {{$randomVideo->formatedPublishedAt()}}</li>
                                        <li><i class="fa fa-eye"></i> {{$randomVideo->view_count}} views</li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach

                            <a href="#" class="btn btn-inverse btn-block">More Videos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection



@section('scripts')
<script type="text/javascript">
$('#push-comment').click(function (e) {
    alert(1);
    e.preventDefault();
    var content = $('#comment-content').val();
    var video_id = $('#video-id').val();
    var _token = $('#_token').val();
    $.ajax({
        type: "POST",
        url: '/video/push-comment',
        data: {content: content, video_id: video_id, _token: _token},
        success: function( msg ) {
            $("#ajaxResponse").append("<div>"+msg+"</div>");
        }
    });
});
</script>
@endsection