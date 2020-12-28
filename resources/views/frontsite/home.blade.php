@extends('frontsite.layouts.master')
@section('page-title')
    Home Page
@endsection
@section('content')

<div class="top-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6 tn-left">
                <div class="row tn-slider">
                    @foreach($posts as $post)

                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="{{asset('post_images/'.$post->image)}}" width="400px" height="400px"/>
                            <div class="tn-title">
                                <a href="{{route('front.detils', $post->id)}}">{{$post->title}}</a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>

            <div class="col-md-6 tn-right">
                <div class="row">

                    @foreach($posts->slice(0, 4) as $post)

                    <div class="col-md-6">
                        <div class="tn-img">
                            <img src="{{asset('post_images/'.$post->image)}}" width="200px" height="200px"/>
                            <div class="tn-title">
                                <a href="{{route('front.detils', $post->id)}}">{{$post->title}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top News End-->

<!-- Category News Start-->
<div class="cat-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Sports</h2>
                <div class="row cn-slider">
                    @foreach($posts as $post)
                        @if($post->category->name == 'sports')
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="{{asset('post_images/'.$post->image)}}" width="200px" height="162px"/>
                            <div class="cn-title">
                                <a href="{{route('front.detils', $post->id)}}">{{$post->title}}</a>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="col-md-6">
                <h2>Technology</h2>
                <div class="row cn-slider">
                    @foreach($posts as $post)
                        @if($post->category->name == 'technology')
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="{{asset('post_images/'.$post->image)}}"  width="200px" height="162px"/>
                            <div class="cn-title">
                                <a href="{{route('front.detils', $post->id)}}">{{$post->title}}</a>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category News End-->

<!-- Category News Start-->
<div class="cat-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Business</h2>
                <div class="row cn-slider">
                    @foreach($posts as $post)
                        @if($post->category->name == 'business')
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="{{asset('post_images/'.$post->image)}}"  width="200px" height="162px"/>
                            <div class="cn-title">
                                <a href="{{route('front.detils', $post->id)}}">{{$post->title}}</a>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <h2>Entertainment</h2>
                <div class="row cn-slider">
                    @foreach($posts as $post)
                        @if($post->category->name == 'entertainment')
                    <div class="col-md-6">
                        <div class="cn-img">
                            <img src="{{asset('post_images/'.$post->image)}}"  width="200px" height="162px"/>
                            <div class="cn-title">
                                <a href="{{route('front.detils', $post->id)}}">{{$post->title}}</a>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category News End-->



<!-- Main News Start-->
<div class="main-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    @foreach($posts->slice(0, 9) as $post)
                    <div class="col-md-4">
                        <div class="mn-img">
                            <img src="{{asset('post_images/'.$post->image)}}"/>
                            <div class="mn-title">
                                <a href="{{route('front.detils', $post->id)}}">{{$post->title}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <div class="col-lg-3">
                <div class="mn-list">

                    <h2>Read More</h2>
                    @foreach($posts->slice(0, 8) as $post)
                    <ul>
                        <li><a href="{{route('front.detils', $post->id)}}">{{$post->title}}</a></li>

                    </ul>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
