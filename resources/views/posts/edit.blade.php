@extends('layouts.app')

@section('content')
        <div class="container">
            <h1>Edit Post</h1>
            {{-- Using LaravelCollective HTML --}}
            {!! Form::open(['action' => ['PostsController@update', ''], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                </div>
                <a href="/posts" class="btn btn-danger float-right" style="margin: 3px;">Cancel</a>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['style' => 'margin: 3px;', 'class' => 'btn btn-success float-right'])}}
            {!! Form::close() !!}
        </div>
@endsection