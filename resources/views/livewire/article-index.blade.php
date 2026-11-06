<div class="row justify-content-center align-items-center">
    <div class="col-12">
        <h1>Tutti gli articoli</h1>
    </div>
    @foreach($articles as $article)
    <div class="col-12 col-md-4">
        <div class="card mx-auto" style="width: 18rem;">
            <img src="{{!$article->img ? 'https://picsum.photos/200/300' : Storage::url($article->img)}}" class="card-img-top" alt="Immagine relativa all'articolo {{$article->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$article->title}}</h5>
                <div class="justify-content-center align-items-center">
                    <div class="col-6">
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">More info</a>
                    </div>
                    <div class="col-6">
                        @auth
                            @if(Auth::id() == $article->user_id)
                                <a href="{{route('article.edit', compact('article'))}}" class="btn btn-outline-warning mt-3">Modifica l'articolo</a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
