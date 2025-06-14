<x-layout>
    <video autoplay loop><source src="wallpaper.mp4" type="video/mp4"></video>
    <div class="container mt-5">
        <h1>Top Anime</h1>
        <hr>
        <div class="row">
            @foreach($anime as $item)
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 mb-4">
                    <a href="{{ route('anime.show', $item->mal_id) }}" class="text-decoration-none text-light">
                        <div class="card h-100 bg-dark border-secondary shadow-sm anime-card">
                            <img src="{{ $item->images->jpg->image_url }}" class="card-img-top img-fluid" alt="{{ $item->title }}">
                            <div class="card-body text-center">
                                <h5 class="card-title fs-6 mb-2">{{ $item->title }}</h5>
                                <p class="card-text mb-1">📅 {{ $item->year ? $item->year : 'N/A' }}</p>
                                <p class="card-text mb-1">⭐ {{ $item->score }}</p>
                                <p class="card-text">🏆 Rank: {{ $item->rank }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
