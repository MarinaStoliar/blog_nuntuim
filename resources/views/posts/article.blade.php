@foreach($articles as $article)
    <a class="article_item" href="{{'article', $article->id}}">
        <img src="{{asset('/storage/' . $article->image)}}" alt="">
        <div class="article_desk">
            <span class="tag">{{$article->category}}</span>
            <h2>{{$article->title}}</h2>
            <div class="data">{{$article->create_date}}</div>
            <p>{{$article->description}}</p>
        </div>
    </a>
@endforeach
