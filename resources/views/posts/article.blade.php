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
