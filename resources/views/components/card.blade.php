<div class="presto-card">
    <div class="card-img">
        <img src="https://picsum.photos/250/250" alt="Immagine dell'articolo {{$article->title}}">
    </div>
    
    <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <p class="card-price">€ {{$article->price}}</p>
        
        <div class="card-footer-custom">
            <a href="{{ route('article.show', compact('article')) }}" class="btn-presto">
                Dettaglio
            </a>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="text-decoration-none small fw-medium" style="color: #aaa; font-size: 12px;">
                {{-- {{ $article->category->name }} --}}
                Categoria
            </a>
        </div>
    </div>
</div>