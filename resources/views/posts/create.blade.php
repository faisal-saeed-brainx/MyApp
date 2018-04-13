@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-primary">Back</a>
<h1>Add New Post</h1>
{!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
    <div>
    	{{Form::label('title','Title')}}
    	{{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>

    <div>
    	{{Form::label('body','Body')}}
    	{{Form::textarea('body','',['id' => 'article-ckeditor' ,'class'=>'form-control', 'placeholder'=>'Body Text'])}}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection