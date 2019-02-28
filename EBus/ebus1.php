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
        <style>
           #btnCalculate {
                background-color: #00B0FF;
                font-family: 'arial', sans-serif;
                border: #0056b3;
                border-style: solid;
                padding: 18px 32px;
            }
            
            #btnClear {
                background-color: #ff253a;
                font-family: 'arial', sans-serif;
                border: #FF201E;
                border-style: solid;
                padding: 18px 32px;
            }
            
            #btnCart {
                background-color: #34ce57;
                font-family: 'arial', sans-serif;
                border: #1c7430;
                border-style: solid;
                padding: 18px 32px;
            }
            
            label{
                font-family: 'arial', sans-serif;
            }
            
            a {
                font-family: 'arial', sans-serif;
            }
            
            h2{
                font-family: 'arial', sans serif
            }
        </style>
    
    
      <!--here i am separating the header from rest of text-->
      <div class="one">
  <a href="../index.php">Home Menu</a>
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
     <h2>Our Products:</h2>
     </center>  
            <br/>
            
            <form method="post" action="Ebus2.php">
              
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
  
              <center>
              <!--adding buttons-->                 
                   <button onclick="location.href='../EBus/ebus2.php'" id="btnCart" type="button">
                    Add To Cart</button>  
              </center>
               <br>    
               <center> 
            <button onclick="location.href='ebus1.php'" id="btnClear" type="button">Clear</button>
               </center>
            <br/>
            <center>
            <button id="btnCalculate" onClick="calcSub()">Calculate Cost</button>
            </center>
            </form>
            </body>
    
    
</html>