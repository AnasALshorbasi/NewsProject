@extends('dashboard.layouts.master')

@section('title')
    Dashboard Posts
@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
        @include('dashboard.layouts.messages')
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Posts</h3>
                @if($posts->count() > 0)
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="">
                            #
                        </th>
                        <th style="">
                             Post Title
                        </th>
                        <th style="">
                            Image
                        </th>
                        <th style="">
                            Category
                        </th>
                        <th>
                            Date
                        </th>

                        <th style="">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>
                            <a>
                                {{$post->title}}
                            </a>
                            <br/>
                            <small>
                                {{$post->created_at}}
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('post_images/'.$post->image)}}" width="30px" height="30px">
                                </li>
                            </ul>
                        </td>
                        <td class="project_progress">


                            {{$post->category->name}}

                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <form action="{{route('dashboard.posts.destroy', $post)}}" method="POST">
                                <a class="btn btn-primary btn-sm" href="{{route('dashboard.posts.show', $post->id)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('dashboard.posts.edit', $post)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>

                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <div class="card-body">
                        <h1 class="text-center">No Posts Yet.</h1>
                    </div>
                @endif
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        {{$posts->links()}}
    </section>
    <!-- /.content -->
@endsection
