@extends('dashboard.layouts.master')

@section('title')
    Dashboard Messages
@endsection

@section('content')

    <!-- Main content -->
    <section class="content">
    @include('dashboard.layouts.messages')
    <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Posts</h3>
                @if($contacts->count() > 0)
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
                        <th style="">
                            Subject
                        </th>
                        <th>
                            Message
                        </th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                                <a>
                                    {{$contact->name}}
                                </a>
                                <br/>
                                <small>
                                    {{$contact->created_at}}
                                </small>
                            </td>
                            <td>
                                {{$contact->email}}
                            </td>
                            <td class="project_progress">


                                {{$contact->subject}}

                            </td>
                            <td class="project_progress">


                                {{$contact->message}}

                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <div class="card-body">
                        <h1 class="text-center">No Contacts Yet.</h1>
                    </div>
                @endif
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        {{$contacts->links()}}
    </section>
    <!-- /.content -->
@endsection
