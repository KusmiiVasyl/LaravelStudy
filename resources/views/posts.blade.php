@extends('layouts/menu')
@section('content')
    <h1>Posts page</h1>
    @foreach($posts as $post)
        <div style="background-color: yellow;">
            {{$post->title}}
            {{$post->post_content}}
            {{$post->image}}
            {{$post->likes}}
            {{$post->is_published}}
        </div>
    @endforeach
@endsection
