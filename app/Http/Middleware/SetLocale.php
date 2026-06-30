<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /** Terapkan bahasa dari session (default: id). */
    public function handle(Request $request, Closure $next): Response
    {
        // default Indonesia (abaikan APP_LOCALE .env yang sering 'en')
        $locale = session('locale', 'id');
        if (! in_array($locale, ['id', 'en'], true)) {
            $locale = 'id';
        }
        App::setLocale($locale);

        return $next($request);
    }
}
