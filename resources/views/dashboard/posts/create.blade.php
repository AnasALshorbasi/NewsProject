@extends('dashboard.layouts.master')
@section('title')
    Add Posts
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        @include('dashboard.layouts.messages')
        <form method="POST" action="{{route('dashboard.posts.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Post Title</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Post Content</label>
                            <textarea id="content"  name="content" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Category</label>
                            <select class="form-control custom-select" name="category_id">
                                <option selected disabled>Select one</option>
                                @foreach($categories as $category)
                                     <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="post_image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>


        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new Post" class="btn btn-success float-right">
            </div>
        </div>
        </form>
    </section>
    <!-- /.content -->
@endsection
