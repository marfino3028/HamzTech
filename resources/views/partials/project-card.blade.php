{{-- Kartu proyek. Param: $project, $loop index via $i --}}
<a href="{{ '/portofolio/' . $project['slug'] }}"
   class="card card-hover overflow-hidden reveal {{ $i % 3 == 1 ? 'reveal-d1' : ($i % 3 == 2 ? 'reveal-d2' : '') }}">
    <div class="aspect-[16/10] overflow-hidden border-b border-slate-200">
        <img src="{{ asset('images/portfolio/' . $project['image']) }}" alt="{{ $project['title'] }}" class="shot" loading="lazy">
    </div>
    <div class="p-6">
        <div class="flex items-center justify-between mb-2 gap-3">
            <h3 class="font-bold text-lg text-navy-900">{{ $project['title'] }}</h3>
            <span class="badge badge-blue shrink-0">{{ ucfirst($project['type'] ?? 'web') }}</span>
        </div>
        <p class="text-sm text-slate-500 line-clamp-2 mb-4">{{ app()->getLocale() === 'en' ? ($project['desc_en'] ?? $project['desc']) : $project['desc'] }}</p>
        @if(!empty($project['tech']))
        <div class="flex flex-wrap gap-1.5">
            @foreach(explode('+', $project['tech']) as $t)
                <span class="badge">{{ trim($t) }}</span>
            @endforeach
        </div>
        @endif
    </div>
</a>
