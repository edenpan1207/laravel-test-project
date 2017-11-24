@extends('layout.main')
<!-- @section('name', 'Eden') -->
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8">
            @foreach($contents as $content)
                <article class="post-item">
                    <div class="post-item-image">
                        <a href="{{$content['url']}}">
                            <img src="{{$content['img']}}" alt="{{$content['img']}}">
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="padding-10">
                            <h2><a href="{{$content['url']}}">{{$content['title']}}</a></h2>
                            <p>{{$content['paragraph']}}</p>
                        </div>

                        <div class="post-meta padding-10 clearfix">
                            <div class="pull-left">
                                <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> {{$content['time']}} </time></li>
                                    <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">{{$content['comments']}}  Comments</a></li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <a href="post.html">Continue Reading &raquo;</a>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach                
                <nav>
                  <ul class="pager">
                    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Newer</a></li>
                    <li class="next"><a href="#">Older <span aria-hidden="true">&rarr;</span></a></li>
                  </ul>
                </nav>
            </div>
            @include('layout.sidebar')
        </div>
</div>
@endsection