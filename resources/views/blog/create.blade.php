@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron">
                <h1>Latest Blog Posts</h1>
                <h4>Revolution Blog Sites</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::open([ 'method'=>'post' ]) !!}
                    <div class="form-group">
                            {!! Form::label('title', 'Title:') !!}
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title' ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('body', 'Body:') !!}
                        {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Description' ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Creat a Blog', ['class' => 'btn btn-success btn-lg', 'placeholder' => 'Enter Description' ]) !!}
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection