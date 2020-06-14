@extends('layouts.app')

@section('content')
    <h1 class="page-section bg-primary" id="mainBlogTitle">My Blog Entries</h1>
        @if(count($posts) > 0)
        <div class="card">
                    <ul class="list-group list-group-flush">
            @foreach($posts as $post)
                
            <div class="row">
                <div class="col-md-6 col-lg-2">
                <img style="width: 100%" src="/img/finalfinal.png" alt="Blog Image">
                </div>
                <div class="col-md-8 col-lg-8">
                        <h1 class="blogh1"><a href="/posts/{{$post->id}}">{{ $post->title  }}</a></h1>
                       
                </div>
                
            </div>
            <div class="card-footer text-muted">
                Posted on {{ Carbon\Carbon::parse($post->created_at)->format('Y-m-d') }}
               
              </div>                       
                    
            @endforeach
            </ul>
                    
                </div>
        @else

        @endif
        
        <br>
        {{$posts->links()}}



@endsection