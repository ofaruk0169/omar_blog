@extends('layouts.app')

@section('content')
    
    
   
    <div class="row postWhole">
        <div class="col-md-12">
            <img style="width: 100%" src="/img/finalfinal.jpg" alt="current cover image" class="showimg">
        </div>
    </div>
    <h1 class="page-section " id="blogtitle">{{$post->title}}</h1>
    <p class="postbody page-section">{{$post->body}} </p>
    <hr>

    <small>Written on {{$post->created_at->format('M d, Y')}} </small>

   
    
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