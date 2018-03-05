@extends('master')
@section('title')
    {{$article->title}}
@endsection
@section('content')

            <!-- Blog Post (Right Sidebar) Start -->
            <div class="col-md-9">
                <div class="col-md-12 page-body">
                    <div class="row">
                        <div class="col-md-12 content-page">
                            <div class="col-md-12 blog-post">

                                <!-- Post Headline Start -->
                                <div class="post-title">
                                    <h1>{{$article->title}}</h1>
                                </div>
                                <!-- Post Headline End -->

                                <!-- Post Detail End -->

                                <p>{{$article->description}}</p>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

@endsection