@extends('template')

@section('content')
<form>
        <section class="padding-top-20 padding-bottom-20 border-bottom-1 border-grey-300">
            <div class="container">
                <div class="headline no-margin">
                    <h4><i class="fa fa-film"></i> Les videos</h4>
                    <div class="btn-group pull-right">
                        <a href="#" class="btn btn-default"><i class="fa fa-search no-margin"></i></a>
                    </div>

                    <input name='search' type="text" class="form-control hidden-xs" placeholder="Rechercher..." value='{!!request()->get('search')!!}'>

                    <div class="dropdown">
                        <a href="#" class="btn btn-default btn-icon-left btn-icon-right dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sort-amount-desc"></i> Trier par <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/video">Date</a></li>
                            <li><a href="/video/sort/rate">Score</a></li>
                            <li><a href="/video/sort/title">A-Z</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
</form>
        <section class="bg-grey-50">
            <div class="container">
                <div class="card-group">
                    <div class="row">
                        @foreach($videos as $video)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="card card-video">
                                <div class="card-img">
                                    <a href="{{route('video.show', ['id' => $video->id])}}">
                                        <img src="http://i1.ytimg.com/vi/{{$video->youtube_id}}/mqdefault.jpg" alt="">
                                    </a>
                                    <div class="time">{{$video->formatedDuration()}}</div>
                                </div>
                                <div class="caption">
                                    <h3 class="card-title">
                                        <a href="{{route('video.show', ['id' => $video->id])}}">{{$video->title}}</a>
                                    </h3>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> {{$video->formatedPublishedAt()}}</li>
                                        <li><i class="fa fa-eye"></i> {{$video->view_count}}</li>
                                    </ul>
                                    <p>{{$video->description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{$videos->render()}}

{{--                 <ul class="pagination margin-top-20">
                    <li><a href="#"><span>&laquo;</span></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#">11</a></li>
                    <li><a href="#"><span>&raquo;</span></a></li>
                </ul> --}}
            </div>
        </section>



@endsection