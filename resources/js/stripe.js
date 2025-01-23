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