@extends('frontsite.layouts.master')
@section('page-title')
    Single page
@endsection

@section('content')
    <!-- Single News Start-->
    <div class="single-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sn-container">
                        <div class="sn-img">
                            <img src="{{asset('post_images/'.$post->image)}}" />
                        </div>
                        <div class="sn-content">
                            <h1 class="sn-title">{{$post->title}}</h1>
                            <p>
                                {{$post->content}}
                            </p>

                        </div>
                    </div>
                    <div class="sn-related">
                        <h2>Related News</h2>
                        <div class="row sn-slider">
                            @foreach($posts as $post)
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="{{asset('post_images/'.$post->image)}}" width="150px" height="150px" />
                                        <div class="sn-title">
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
    </div>
    <!-- Single News End-->
@endsection
