<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html>

    <head>  
        <meta charset="UTF-8">
        <title>Select Product</title>    
        <script type="text/javascript" src="calc.js"></script>
    
    
    
      <!--here i am separating the header from rest of text-->
      <div class="one">
  <a href="http://localhost:8000/menupage.html">Home Menu</a>
       </div>
      <hr>
    </head>
        
  </br>
  </br>
  </br>
  </br>
  
  <body>
  <!-- here i am putting the prices on the radio buttons-->
 <div id="purchase">
     <center>
     <h4>Our Products:</h4>
     </center>  
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
                <center>
              <label for="blockchain">
                <input type="radio" id="blockchain" name="product" checked onClick="disablebtnProceed()"/>
                Blockchain @ $1000
              </label>
                </center>
                
              <br/>
              
              <center>
              <label for="autonomousthings">
                <input type="radio" id="autonomousthings" name="product" onClick="disablebtnProceed()"/>
                Autonomous Things @ $2000
              </label>
              </center>
              
              <br/>
              
              <center>
                <label for="immersivexp">
                <input type="radio" id="immersivexp" name="product" checked onClick="disablebtnProceed()"/>
                Immersive Experience @ $3000
              </label>
              </center>
              
             </br>
             </br>
              
             <center
              <label for="SubTotal">
                Sub Total
                <input type="text" id="txtSubTotal" name="txtSubTotal" value="0.00" readonly/>
              </label>
            </center>
             
              <br/>
              <br/>
              
              <center>
              <label for="Discount">
                Discount(10%)
                <input type="text" id="txtDiscount" name="txtDiscount" value="0.00" readonly/>
              </label>
              </center>
               <br/>
              <br/>
              
              <center>
                <label for="VAT">
                VAT(20%)
                <input type="text" id="txtVAT" name="txtVAT" value="0.00" readonly/>
              </label>
                  <center> 
                <br/>
              <br/>
              
              <center>
              <label for="total">
                Total
                <input type="text" id="txtTotal" name="txtTotal" value="0.00" readonly/>
              </label>
              </center>
              
              <br/>
              </div>
              <!--adding buttons-->
                <center>
                   <button onclick="location.href='http://localhost:8000/EBus/ebus2.php'" type="button">
         Add To Cart</button>
                </center>
            </form>
            
            <br>
            <center>
            <button onclick="location.href='ebus1.php'" type="button">Clear</button>
            </center>
            <br/>
            <center>
            <button id="calculate" onClick="calcSub()">Calculate Cost</button>
            </center>
            <br>
            </body>
    
    
</html>