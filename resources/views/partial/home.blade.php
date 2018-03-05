@extends('master')
@section('title')
   Home | Articles
@endsection
@section('content')
                <!-- Blog Post (Right Sidebar) Start -->
                <div class="col-md-9">
                    <div class="col-md-12 page-body">
                        <div class="row">
                            <div class="sub-title">
                                <h2>The Articles</h2>
                            </div>
                            <div class="col-md-12 content-page">

                            @foreach($articles as $article)
                                <!-- Blog Post Start -->
                                <div class="col-md-12 blog-post">
                                    <div class="post-title">
                                        <a href="{{ url('article/'.$article->id) }}"><h1>{{$article->title}}</h1></a>
                                    </div>

                                    <p>{{str_limit($article->description,300)}}</p>
                                    <a href="{{ url('article/'.$article->id) }}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                                </div>
                                <!-- Blog Post End -->
                                @endforeach

                                <div class="col-md-12 text-center">
                                    <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
                                    <div id="post-end-message"></div>
                                </div>

                            </div>

                        </div>


                    </div>


                </div>


@endsection