@foreach($articles as $article)
    <div class="article_item">
        <a class="item" href="{{route('article.show', $article->id)}}">
            <img src="{{asset('/storage/' . $article->image)}}" alt="">
        </a>
        <div class="article_desk">
            <span class="tag">{{$article->category}}</span>
            <a class="item" href="{{route('article.show', $article->id)}}">
                <h2>{{$article->title}}</h2>
            </a>
            <div class="data">{{$article->create_date}}</div>
            <p>{{$article->description}}</p>
        </div>
    </div>

@endforeach
