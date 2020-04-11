@extends('layouts.app')

@section('content')
    
    
    <h1 class="page-section bg-primary" id="blogtitle">{{$post->title}}</h1>
    <div class="row">
        <div class="col-md-12">
            <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="current cover image" class="showimg">
        </div>
    </div>
    <p class="postbody page-section bg-primary">{{$post->body}} </p>
    <hr>

    <small>Written on {{$post->created_at}} </small>
    <hr>
    
    {{-- back button --}}
    <a href="/posts" class="btn btn-primary">Go Back</a>

    {{-- user features  --}}
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection