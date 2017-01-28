@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron text-center">
                <h1>Single Blog Posts</h1>
                <h4>Revolution Blog Sites</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2>{{$data->title}}</h2>
                    </div>
                    <div class="panel-body">
                        {{$data->body}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection