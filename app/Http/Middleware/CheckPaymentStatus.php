<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class CheckPaymentStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kullanıcının oturum açıp açmadığını kontrol et
        /*if (Auth::check()) {
            // Kullanıcının ödeme durumu kontrol ediliyor
            if (Auth::user()->is_payment == 0) {
                // Ödeme yapılmamışsa ödeme sayfasına yönlendir


                return redirect('');
            }
        }
        return $next($request);*/
    }
}
