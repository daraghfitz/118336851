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
   
     CalDisVatTotal(argSubTotal);
}

function CalDisVatTotal(parmSubTotal){
    var SubTotal = parmSubTotal;
    var VatAmt;
    var DiscountAmt;
    var TotalPrice;
    
    DiscountAmt = (parmSubTotal * 0.05);
    VatAmt = (parmSubTotal - DiscountAmt) * (.10);
    TotalPrice = (parmSubTotal + VatAmt - DiscountAmt);
    
    display(SubTotal, VatAmt, DiscountAmt, TotalPrice);
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
