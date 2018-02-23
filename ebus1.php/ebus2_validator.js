/* global $ */

function validateDetails(){
    var name
    var pin;
    name = document.getElementById("user_name").value;
    pin = document.getElementById("user_pin").value;
    card = pin = document.getElementById("user_card").value;
    
     if (card == ""){
        alert("Please enter your Card Number");
    }
    else if (String(card).length < 12){
        alert("Please make sure your Card Number is accurate");
    
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    if (name ==""){
        alert("Please enter your name")
    }
    
    if (name > 0 ) (card = "12") (pin = "4")
        enablebtnPurchase()
    
    



function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}





