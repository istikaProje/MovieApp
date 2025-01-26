@extends('layouts.master')


@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2">
            <div class="bg-white shadow-md rounded-lg mt-5">
                <h3 class="bg-gray-100 text-lg font-semibold p-3 rounded-t-lg">
                   Ödeme Sayfası
                </h3>
                <div class="p-6">

                    @if(session('subscription_expired'))
                    alert('Aboneliğiniz sona erdi. Lütfen aboneliğinizi yenileyin!');
                    @endif

                    @session('success')
                        <div class="bg-green-100 text-green-700 p-3 rounded mb-4" role="alert"> 
                            {{ $value }}
                        </div>
                    @endsession
          
                    <form id="checkout-form" method="post" action="{{ route('stripe.post') }}">   
                        @csrf    

                        <label class="block text-gray-700 font-medium mb-2" for="name">
                            Name:
                        </label>
                        <input 
                            type="text" 
                            id="name"
                            name="name" 
                            placeholder="Enter Name"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        >

                        <label class="block text-gray-700 font-medium mt-4 mb-2" for="plan">
                            Plan Seçin:
                        </label>
                        <select id="plan" name="plan" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="monthly">Aylık - $10</option>
                            <option value="yearly">Yıllık - $100</option>
                        </select>

                        <input type="hidden" name="stripeToken" id="stripe-token-id">                              
                        <br>
                        <div id="card-element" class="w-full px-4 py-2 border rounded-lg mt-4 h-[50px] pt-4"></div>
                        <button 
                            id="pay-btn"
                            class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded w-full mt-4"
                            type="button"
                            onclick="createToken()">Abone Ol
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection


@push('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe("{{ config('services.stripe.key') }}");  
  
            var elements = stripe.elements();
            var cardElement = elements.create('card');
            cardElement.mount('#card-element');
            
            function createToken() {
                document.getElementById("pay-btn").disabled = true;
                const selectedPlan = document.getElementById("plan").value;
                
                stripe.createToken(cardElement).then(function(result) {
                    if(typeof result.error != 'undefined') {
                        document.getElementById("pay-btn").disabled = false;
                        alert(result.error.message);
                    }
                    
                    if(typeof result.token != 'undefined') {
                        document.getElementById("stripe-token-id").value = result.token.id;
                        
                        const form = document.getElementById('checkout-form');
                        const planInput = document.createElement('input');
                        planInput.setAttribute('type', 'hidden');
                        planInput.setAttribute('name', 'selected_plan');
                        planInput.setAttribute('value', selectedPlan);
                        form.appendChild(planInput);
                        
                        form.submit();
                    }
                });
  }
    </script>
@endpush



