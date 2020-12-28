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
                <h3 class="card-title">Users</h3>
                @if($users->count() > 0)
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
                            Name
                        </th>
                        <th style="">
                            Email
                        </th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                                <a>
                                    {{$user->name}}
                                </a>
                                <br/>
                                <small>
                                    {{$user->created_at}}
                                </small>
                            </td>
                            <td class="project_progress">


                                {{$user->email}}

                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <div class="card-body">
                        <h1 class="text-center">No Users Yet.</h1>
                    </div>
                @endif
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        {{$users->links()}}
    </section>
    <!-- /.content -->
@endsection
