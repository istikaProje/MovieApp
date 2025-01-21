<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;  // Doğru namespace
use Illuminate\View\View;  // Doğru namespace (view için)


class ShowPaymentController extends Controller
{
      /**
     * Success response method to show payment form.
     *
     * @return \Illuminate\View\View
     */
    public function stripe(): View
    {
        // Kullanıcının ödeme yapıp yapmadığını kontrol et
        if (Auth::user()->is_payment == 1) {
            return redirect()->route('home')->with('error', 'You have already made the payment.');
        }


        return view('layouts.payments');
    }

    /**
     * Payment processing method.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function stripePost(Request $request): RedirectResponse
    {


        Stripe::setApiKey(env('STRIPE_SECRET'));
     
        
      
        try {
            // Plan seçimi ve fiyat belirleme
            $plan = $request->input('selected_plan');
            $amount = ($plan === 'yearly') ? 100 * 100 : 10 * 100;

            // Ödeme işlemi
            Charge::create([
                "amount" => $amount,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => ($plan === 'yearly') ? "Yearly Subscription" : "Monthly Subscription"
            ]);

            // Ödeme başarılı olduğunda kullanıcının 'is_payment' durumunu güncelle
            // Kullanıcının ödeme durumu ve abonelik bilgilerini güncelleme
            $user = Auth::user();
            $user->is_payment = 1;  // Ödeme yapıldı
            $user->subscription_plan = $plan;  // Abonelik planını kaydet  // Stripe abonelik ID'sini kaydet
            $user->subscription_created_at = now();  // Abonelik oluşturulma tarihi
            $user->subscription_ends_at = now()->addDays($plan === 'yearly' ? 365 : 30);  // Bitiş tarihi
            $user->save(); 
        
            // Yönlendirme işlemi
            return redirect()->route('home')->with('success', 'Payment successful!');
        } catch (\Exception $e) {
            return redirect()->route('payment')->with('error', 'Payment failed: ' . $e->getMessage());
        }
    }
}
