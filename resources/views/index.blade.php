@extends('template')

@section('content')

@if($twitch)
    @include('partials.highlight_live', ['twitch' => $twitch])
@endif

<section class="padding-top-15 padding-bottom-10">
    <div class="owl-carousel owl-video">
        @foreach($videos as $i => $video)
        @if(! $i)
            @php
                continue;
            @endphp
        @endif
        <div class="card card-video">
            <div class="card-img">
                <a href="{{route('video.show', ['id' => $video->id])}}"><img src="http://i1.ytimg.com/vi/{{$video->youtube_id}}/mqdefault.jpg" alt=""></a>
                @if($video->duration)
                <div class="time">
                    {{$video->formatedDuration()}}
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="bg-grey-50">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="headline">
                    <h4>News recentes</h4>
                </div>
                <div class="panel panel-default panel-post">
                    <div class="panel-body">
                        <div class="post">
                            <div class="post-header post-author">
                                <a href="#" class="author" data-toggle="tooltip" title="YAKUZI"><img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-1/p200x200/13320005_1237034039661118_2889321306439724128_n.jpg?oh=76fd1617fedae7ded364a4eb8f8dce3c&oe=598FB657"" alt=""></a>
                                <div class="post-title">
                                    <h3><a href="blog-post.html">Aujourd'hui, c'est les 5 ans d'LMF.</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="fa fa-user"></i> Adwim</a></li>
                                        <li><i class="fa fa-calendar-o"></i> April 22, 2017</li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 0 <span class="hidden-xs">Comments</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <a href="blog-post.html"><img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/17626123_1274189059331162_260528447229469695_n.png?oh=91f4ff77403a4385a200782c62b61bd5&oe=598A1C9B" alt=""></a>
                            </div>
Aujourd'hui, c'est les 5 ans d'LMF.

C'est un jour comme les autres.

Buvez de l'alcool sans modération, et consommez autant de drogue que possible.

Bisou <3

(merci à Poon's pour le dessin super cool, un t-rex bourré avec un ballon-bite à côté c'est vachement dur à trouver)
                        </div>
                    </div>
                    <div class="panel-footer">
                        <ul class="post-action">
                            <li><a href="#"><i class="fa fa-heart"></i> like (5)</a></li>
                            <li><a href="#"><i class="fa fa-comments"></i> Comments</a></li>
                            <li><a href="#"><i class="fa fa-reply"></i> share</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default panel-post">
                    <div class="panel-body">
                        <div class="post">
                            <div class="post-header post-author">
                                <a href="#" class="author" data-toggle="tooltip" title="YAKUZI"><img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-1/p200x200/13320005_1237034039661118_2889321306439724128_n.jpg?oh=76fd1617fedae7ded364a4eb8f8dce3c&oe=598FB657" alt=""></a>
                                <div class="post-title">
                                    <h3><a href="blog-post-video.html">S.T.A.L.K.E.R • Misery 2.1 mode désespoir activé </a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="fa fa-user"></i> Adwim</a></li>
                                        <li><i class="fa fa-calendar-o"></i> April 22, 2017</li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 0 <span class="hidden-xs">Comments</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="post-thumbnail">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZpjJmEWC4cM?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                                </div>
                            </div>
La légende dit qu'Adwim a désormais réalisé son rêve de devenir dresseur de sangsues, et est décédé littéralement 7 minutes après son premier contact.
                        </div>
                    </div>
                    <div class="panel-footer">
                        <ul class="post-action">
                            <li><a href="#"><i class="fa fa-heart"></i> like (5)</a></li>
                            <li><a href="#"><i class="fa fa-comments"></i> Comments</a></li>
                            <li><a href="#"><i class="fa fa-reply"></i> share</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default panel-post">
                    <div class="panel-body">
                        <div class="post">
                            <div class="post-header post-author">
                                <a href="#" class="author" data-toggle="tooltip" title="YAKUZI"><img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-1/p200x200/13320005_1237034039661118_2889321306439724128_n.jpg?oh=76fd1617fedae7ded364a4eb8f8dce3c&oe=598FB657" alt=""></a>
                                <div class="post-title">
                                    <h3><a href="blog-post-music.html">Le Forgecast #4: Scadur 2 La Renaissance</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="fa fa-user"></i> Adwim</a></li>
                                        <li><i class="fa fa-calendar-o"></i> April 22, 2016</li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 0 <span class="hidden-xs">Comments</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-thumbnail">
                                <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/250694409&amp;auto-play=false&amp;hide-related=false&amp;show-comments=true&amp;show-user=true&amp;show-reposts=false&amp;visual=true"></iframe>
                            </div>

Scadur nous revient en faisant son chemin à travers les boyaux, Russian a une nouvelle carte graphique, on a deux semaines de jeux et news à rattraper, et on s'en sort pas... au moins on essaye.

Oubliez pas de nous envoyer vos questions à lamegaforge@gmail.com on y répondra en début (ou la fin) de Forgecast, ça dépend de l'humeur.

                        </div>
                    </div>
                    <div class="panel-footer">
                        <ul class="post-action">
                            <li><a href="#"><i class="fa fa-heart"></i> like (5)</a></li>
                            <li><a href="#"><i class="fa fa-comments"></i> Comments</a></li>
                            <li><a href="#"><i class="fa fa-reply"></i> share</a></li>
                        </ul>
                    </div>
                </div>


            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                @include('widgets.facebook')
                @include('widgets.twitter')
                @include('widgets.recent_comments')
            </div>
        </div>
    </div>
</section>

@endsection