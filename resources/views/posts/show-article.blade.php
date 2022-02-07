@extends('layouts.app')

@section('content')
<div class="container_show">
    <img src="{{asset('/storage/' . $article->image)}}" alt="">
    <h2>{{$article->title}}</h2>
    <div class="author_data">
        <p>Ralph Hawkins</p>
        <div id="circle"></div>
        <p>May 7, 2019 (10 mins read)</p>
    </div>
    <div class="hashtag">
        <p>#technology</p>
        <p>#tech</p>
        <p>#career</p>
    </div>
    <span>{{$article->description}}</span>
</div>
@endsection
















