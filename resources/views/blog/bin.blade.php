@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron text-center jumbo">
                <h1>Deleted Blog Posts</h1>
                <h4>Revolution Blog Sites</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach($deletedblog as $blog)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>{{$blog->title}}</h2>
                        </div>
                        <div class="panel-body">
                            {{$blog->body}}
                        </div>
                        <div class="panel-footer">

                                {!! Form::open(['method'=>'get', 'action'=>['BlogController@restore', $blog->id] ]) !!}
                                    <div class="form-group">
                                        {!! Form::submit('Restore', ['class'=>'btn btn-success btn-lg']) !!}
                                        {!! Form::open(['method'=>'DELETE', 'action'=>['BlogController@delete', $blog->id] ]) !!}
                                            {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-lg']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                {!! Form::close() !!}

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection