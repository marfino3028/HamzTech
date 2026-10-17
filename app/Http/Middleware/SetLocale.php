<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /** Terapkan bahasa dari session (default: en). */
    public function handle(Request $request, Closure $next): Response
    {
        // default English (sesuai permintaan pemilik; pilihan pengunjung disimpan di session)
        $locale = session('locale', 'en');
        if (! array_key_exists($locale, config('site_locales'))) {
            $locale = 'en';
        }
        App::setLocale($locale);

        return $next($request);
    }
}
