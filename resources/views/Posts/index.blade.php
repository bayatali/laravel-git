@extends('layouts.app')

@section('content')

<ul>
 @foreach($posts as $post)
     <div class="class image-container col-sm-2">
         <img   class="img-responsive"  height="100" src="/images/{{$post->path}}">
     </div>
    <li>
        <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</li></a>
       <span>{{$post->user->name}}</span>
@endforeach
</ul>
@endsection
