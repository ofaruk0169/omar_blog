@extends('layouts.app')

@section('content')
    <h1>My Blog Entries</h1>
        @if(count($posts) > 0)
        <div class="card">
                    <ul class="list-group list-group-flush">
            @foreach($posts as $post)
                
            <div class="row">
                <div class="col-md-6 col-lg-2">
                <img style="width: 110%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                </div>
                <div class="col-md-8 col-lg-8">
                        <h1><a href="/posts/{{$post->id}}">{{ $post->title  }}</a></h1>
                        <h3>{{$post->created_at}}</h3>
                </div>
            </div>
                        
                    
            @endforeach
            </ul>
                    
                </div>
        @else

        @endif

@endsection