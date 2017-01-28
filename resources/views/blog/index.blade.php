@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="jumbotron text-center">
                    <h1>Latest Blog Posts</h1>
                    <h4>Revolution Blog Sites</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach($data as $blog)
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2><a href={{ action('BlogController@show', $blog->id) }}>{{$blog->title}}</a></h2>
                        </div>
                    	<div class="panel-body">
                            {{$blog->body}}
                    	</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection