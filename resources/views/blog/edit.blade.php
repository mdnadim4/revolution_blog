@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron text-center jumbo">
                <h1>Edit Blog Post</h1>
                <h4>Revolution Blog Sites</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::model($data, ['method'=>'PATCH', 'action'=>['BlogController@update', $data->id] ]) !!}

                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title' ]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Body:') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Description' ]) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Edit Post', ['class' => 'btn btn-success btn-lg']) !!}
                    {!! Form::open(['method'=>'DELETE', 'action'=>['BlogController@destroy', $data->id]]) !!}
                        <sapn>{!! Form::submit('Delete Post', ['class'=>'btn btn-danger btn-lg']) !!}</span>
                    {!! Form::close() !!}

                </div>

                {!! Form::close() !!}


            </div>
        </div>
    </div>

@endsection