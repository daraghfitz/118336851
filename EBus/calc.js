/* global $ */

function calcSub(parm1){
    
    var argSubTotal; 
    
    if(document.getElementById('blockchain').checked){
    argSubTotal=1000;
}
  if(document.getElementById('autonomousthings').checked){
    argSubTotal=2000;
}
  if(document.getElementById('immersivexp').checked){
    argSubTotal=3000;
        
}
   
     calcDisVatTotal(argSubTotal);
}

function calcDisVatTotal(parmSubTotal){
    var SubTotal = parmSubTotal;
    var VatAmnt;
    var DiscountAmnt;
    var TotalPrice;
    
    DiscountAmnt = (parmSubTotal * 0.1);
    VatAmnt = (parmSubTotal - DiscountAmnt) * (.20);
    TotalPrice = (parmSubTotal + VatAmnt - DiscountAmnt);
    
    display(SubTotal, VatAmnt, DiscountAmnt, TotalPrice);
}

function display(parm1 , parm2 , parm3 , parm4){
    

    
    document.getElementById("SubTotal").value= parm1;
    document.getElementById("VAT").value= parm2;
    document.getElementById("Discount").value = parm3;
    document.getElementById("total").value = parm4;
    
    
    enablebtnProceed();
    
    
    
}   
function enablebtnProceed(){
    $('#btnProceed').prop('disabled',false);
    
} 
function disablebtnProceed(){
    $('#btnProceed').prop('disabled',true); 
} 
