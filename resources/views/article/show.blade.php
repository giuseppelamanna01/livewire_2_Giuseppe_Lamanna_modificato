<x-layout>
    <div class="container mb-5">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h1>Dettagli dell'articolo {{$article->title}}</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6 mt-5">
                <p class="mt-5">{{$article->body}}</p>
                <p class="text-muted">Scritto da {{$article->user->name}}</p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{$article->img ? Storage::url($article->img) : 'https://picsum.photos/500'}}" alt="Immagine relativa all'articolo" class="mx-auto rounded shadow">
            </div>
        </div>
        @auth
            @if(Auth::id() == $article->user->id)
                <div class="row justify-content-center mt-5">
                    <div class="col-6">
                        <livewire:article-delete :article="$article">
                    </div>
                    <div class="col-6">
                        <a href="{{route('article.edit', compact('article'))}}" class="btn btn-outline-warning">Modifica l'articolo</a>
                    </div>
                </div>
            @endif
        @endauth
    </div>
</x-layout>