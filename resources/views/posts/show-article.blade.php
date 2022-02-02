@extends('layouts.app')



@section('content')
    <div class="container article">
        <p>Hello world!</p>
        <img src="{{asset('/storage/' . $article->image)}}" alt="">
        <div class="article_page">
            <span class="tag">{{$article->category}}</span>
            <h2>{{$article->title}}</h2>
            <div class="data">{{$article->create_date}}</div>
            <p>{{$article->description}}</p>
        </div>
    </div>
@endsection
