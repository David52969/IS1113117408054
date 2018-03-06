/* global $ */

function calcSub(){
    
    var argSubTotal;
    var argTotal;
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
      Total = 110
    }
    if(document.getElementById('aws').checked) {
      argSubTotal = 300;
      Total = 330
    }
    if(document.getElementById('cloud').checked) {
      argSubTotal = 200;
     Total = 220
    }
     if(document.getElementById('gmail').checked) {
      argSubTotal = 200;
     Total = 220
    }
    
    $_SESSION['total'] = $total;
    display(argSubTotal);
    display(argTotal);
}

function display(parm1){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("total").value = parm2;
        
  enablebtnProceed();
}

}

}

function display(parm2){
  
  document.getElementById("total").value = parm2;
        
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}