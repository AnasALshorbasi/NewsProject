@extends('dashboard.layouts.master')

@section('title')
    Dashboard Tags
@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
    @include('dashboard.layouts.messages')
    <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tags</h3>
                @if($tags->count() > 0)
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
                           Tag Name
                        </th>

                        <th>
                            Date
                        </th>

                        <th style="">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                                <a>
                                    {{$tag->name}}
                                </a>
                                <br/>
                                <small>
                                    {{$tag->created_at}}
                                </small>
                            </td>

                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <form action="{{route('dashboard.tags.destroy', $tag)}}" method="POST">

                                    <a class="btn btn-info btn-sm" href="{{route('dashboard.tags.edit', $tag)}}">
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
                        <h1 class="text-center">No Tags Yet.</h1>
                    </div>
                @endif
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        {{$tags->links()}}
    </section>
    <!-- /.content -->
@endsection
