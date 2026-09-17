{{-- Header gelap halaman. Param: $eyebrow, $title, opsional $lede, $back ['url','label'], $badges [], $actions [['url','label']] (pertama = tombol utama). --}}
<section class="hero pt-16 pb-20 lg:pt-20 lg:pb-24">
    <div class="hero-grid"></div>
    <div class="hero-glow a"></div><div class="hero-glow b"></div>
    <div class="max-w-6xl mx-auto px-6 relative">
        <div class="max-w-3xl reveal">
            @if (!empty($back))
                <a href="{{ $back['url'] }}" class="inline-flex items-center gap-1.5 text-sm text-slate-300 hover:text-white transition mb-6">&larr; {{ $back['label'] }}</a><br>
            @endif
            <span class="eyebrow on-dark mb-5">{{ $eyebrow }}</span>
            <h1 class="text-4xl sm:text-5xl font-black text-white leading-[1.08]">{{ $title }}</h1>
            @if (!empty($lede))
                <p class="lede mt-6 max-w-2xl" style="color:var(--slate-300)">{{ $lede }}</p>
            @endif
            @if (!empty($badges))
                <div class="flex flex-wrap gap-2 mt-6">
                    @foreach ($badges as $b)
                        <span class="badge badge-ondark">{{ $b }}</span>
                    @endforeach
                </div>
            @endif
            @if (!empty($actions))
                <div class="flex flex-wrap gap-3 mt-8">
                    @foreach ($actions as $a)
                        <a href="{{ $a['url'] }}" @if (str_starts_with($a['url'], 'http')) target="_blank" rel="noopener" @endif
                           class="btn {{ $loop->first ? 'btn-gold' : 'btn-outline-light' }}">
                            {{ $a['label'] }}
                            @if ($loop->first)
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                            @endif
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>
