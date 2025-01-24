<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsSubscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Kullanıcının giriş yapıp yapmadığını ve abone olup olmadığını kontrol et
        if (Auth::check() && !Auth::user()->is_subscribed) {
            return redirect('/payment')->with('error', 'Abonelik gereklidir.');
        }
        return $next($request);
    }
}
