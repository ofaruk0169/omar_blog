@extends('layouts.app')

@Section('content')
       <h1>{{$title}}</h1>
       @if(count($services) > 0)
       <ul>
        @foreach($services as $service)
            <li> {{$service}} </li>
        @endforeach
        </ul>
       @endif
    </body>
</html>
@endsection