@extends('layoutsblog.main-layout')

@section('title', 'Nuntium')

@section('content')
    <div class="container">
        <div class="home_block">
            <div class="home_content">
                <span class="tag">INTERIOR</span>
                <h1>Laborum Ullamco Sunt id ut Sunt</h1>
                <div class="data">May 7, 2019 (10 mins read)</div>
                <p>Proident aliquip velit qui commodo officia qui consectetur dolor ullamco aliquip elit incididunt. Ea minim ex consectetur excepteur. Ex laborum nostrud mollit sint consectetur Lorem amet aliqua do enim. Commodo duis dolor anim excepteur. In aliquip mollit nulla consequat velit magna.
                </p>
            </div>
        </div>
        <div class="articles">
            @foreach($articles as $article)
            <div class="article_item">
                <img src="https://picsum.photos/237/177" alt="">
                <div class="article_desk">
                    <span class="tag">{{$article->text}}</span>
                    <h2>{{$article->title}}</h2>
                    <div class="data">November 3, 2012</div>
                    <p>{{$article->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
