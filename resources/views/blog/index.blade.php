@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">Blog Afiliasi & Tips</h1>
<ul class="space-y-3">
    @foreach ($posts as $post)
        <li>
            <a href="/blog/{{ $post['slug'] }}" class="text-blue-600 hover:underline">{{ $post['title'] }}</a>
        </li>
    @endforeach
</ul>

<p class="mt-4">Untuk semua link rekomendasi saya, bisa cek di:</p>
<a href="https://lynk.id/marfino3028" target="_blank" class="text-blue-600 underline font-semibold">
    lynk.id/marfino3028
</a>
@endsection