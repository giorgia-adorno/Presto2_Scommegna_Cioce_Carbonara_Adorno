<x-layout>
    <div style="background: linear-gradient(135deg, #f7a204 0%, #130c00d7 100%); min-height: 100vh;">
        <div class="container py-5">
            <div class="row mb-5 justify-content-center align-items-center text-center">
                <div class="col-12 col-md-8">
                    <span class="section-label text-uppercase fw-semibold" style="color: #d4a843; letter-spacing: 2px; font-size: 13px;">{{ __('ui.productDetail') }}</span>
                    <h1 class="display-4 fw-bold mt-2" style="color: #fff; font-family: 'Poppins', sans-serif;">{{ $article->title }}</h1>
                    <div class="mx-auto mt-3" style="width: 60px; height: 3px; background-color: #d4a843;"></div>
                </div>
            </div>

            <div class="row justify-content-center g-4 align-items-stretch">
                
                <div class="col-12 col-lg-6">
                    @if ($article->images->count() > 0)
                        <div id="carouselExample" class="carousel slide h-100 shadow rounded-3 overflow-hidden" style="min-height: 400px; max-height: 550px;">
                            <div class="carousel-inner h-100">
                                @foreach ($article->images as $key => $image)
                                    <div class="carousel-item h-100 @if ($loop->first) active @endif">
                                        <img src="{{ Storage::url($image->path) }}" 
                                             class="d-block w-100 h-100 object-fit-cover"
                                             alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                                    </div>
                                @endforeach
                            </div>
                            @if ($article->images->count() > 1)
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            @endif
                        </div>
                    @else
                        <div class="h-100 d-flex align-items-center justify-content-center rounded-3 shadow" style="background-color: #3d2514; min-height: 400px; max-height: 550px; border: 1px solid rgba(212, 168, 67, 0.15);">
                            <img src="https://picsum.photos/500/500" class="rounded w-100 h-100 object-fit-cover" alt="Nessuna foto inserita dall'utente">
                        </div>
                    @endif
                </div>

                <div class="col-12 col-lg-6">
                    <div class="p-4 p-sm-5 h-100 d-flex flex-column justify-content-between shadow" style="background-color: #3d2514; border: 1px solid rgba(212, 168, 67, 0.15); border-radius: 12px; border-left: 5px solid #d4a843;">
                        <div>
                            <span class="text-uppercase fw-bold" style="color: #d4a843; font-size: 11px; letter-spacing: 1.5px;">
                                {{ __('ui.category') }}: {{ $article->category->name }}
                            </span>
                            
                            <h2 class="h2 fw-bold mt-1 mb-3" style="color: #fff; font-family: 'Poppins', sans-serif;">{{ $article->title }}</h2>
                            
                            <div class="mb-4">
                                <span class="fs-2 fw-bold px-4 py-2 shadow-sm" style="color: #d4a843; background-color: #2b1a0e; border-radius: 8px; border: 1px solid rgba(212, 168, 67, 0.25); display: inline-block;">
                                    {{ $article->price }} €
                                </span>
                            </div>
                            
                            <hr style="border-top: 1px solid rgba(255, 243, 196, 0.15); margin: 25px 0;">
                            
                            <h5 class="fw-bold mb-2" style="color: #d4a843; font-size: 13px; text-transform: uppercase; letter-spacing: 1px;">{{ __('ui.description') }}</h5>
                            <p style="color: #fff3c4; line-height: 1.8; font-size: 15px; text-align: justify; margin-bottom: 0;">
                                {{ $article->description }}
                            </p>
                        </div>
                        
                        <div class="mt-5">
                            <a href="{{ route('article.index') }}" class="btn px-4 py-2.5 fw-semibold transition-all" style="background-color: #2b1a0e; color: #fff3c4; border: 1px solid rgba(212, 168, 67, 0.3); border-radius: 6px; text-transform: uppercase; font-size: 12px; letter-spacing: 1px; text-decoration: none;">
                                ← {{ __('ui.goBack') }}
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-layout>