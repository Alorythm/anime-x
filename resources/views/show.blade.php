<x-layout>
    <video autoplay loop muted><source src="/wallpaper.mp4" type="video/mp4"></video>
    <div class="container mt-5 text-light position-relative" style="z-index: 2;">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $anime->images->jpg->large_image_url }}" alt="{{ $anime->title }}" class="img-fluid rounded shadow border border-secondary">
            </div>
            <div class="col-md-8">
                <h1 class="mb-3">{{ $anime->title }}</h1>
                <p>{{ $anime->synopsis }}</p>
                <hr class="border-secondary">
                <ul class="list-unstyled">
                    <li>📅 <strong>Aired:</strong> {{ $anime->aired->string ?? 'N/A' }}</li>
                    <li>🏆 <strong>Rank:</strong> {{ $anime->rank ?? 'N/A' }}</li>
                    <li>⭐ <strong>Score:</strong> {{ $anime->score }}/10</li>
                    <li>🔥 <strong>Popularity:</strong> {{ $anime->popularity ?? 'N/A' }}</li>
                    <li>📺 <strong>Status:</strong> {{ $anime->status ?? 'N/A' }}</li>
                    <li>⏱️ <strong>Duration:</strong> {{ $anime->duration ?? 'N/A' }}</li>
                </ul>
            </div>
        </div>
        <hr class="my-4 border-secondary">
        <h2 class="mb-4">Characters</h2>
        <div class="row">
            @foreach($characters as $character)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="card bg-dark text-light border-secondary h-100 text-center anime-card">
                        <img src="{{ $character->character->images->jpg->image_url }}" class="card-img-top img-fluid" alt="{{ $character->character->name }}">
                        <div class="card-body p-2">
                            <p class="card-text small">{{ $character->character->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
