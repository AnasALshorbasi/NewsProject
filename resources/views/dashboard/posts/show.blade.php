@extends('dashboard.layouts.master')
@section('title')
    Detail Post
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->

        <div class="card ">

            <div class="card-header">
                <h2 class="card-title"><strong>Title:</strong> {{$post-> title}}</h2>

            </div>

            <div class="card-body ">

                <div class="card col-md-2 float-right">
                    <div class="card-header">Tags</div>
                        <div class="card-body">

                            @foreach($post->tags as $tag)
                                <div>

                                   {{$tag->name}}<hr/>
                                </div>
                            @endforeach
                        </div>
                </div>
                <div class="text-center">
                    <img alt="Avatar" class=" " src="{{asset('post_images/'.$post->image)}}" width="700" height="500">
                </div>

                <div class="p-4">{{$post->content}}</div>
            </div>
            <!-- /.card-body -->

        </div>


        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
