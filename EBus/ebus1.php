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
                color: white;
            }
            
            #btnClear {
                background-color: #ff253a;
                font-family: 'arial', sans-serif;
                border: #FF201E;
                border-style: solid;
                padding: 18px 32px;
                color: white;
            }
            
            #btnCart {
                background-color: #34ce57;
                font-family: 'arial', sans-serif;
                border: #1c7430;
                border-style: solid;
                padding: 18px 32px;
                color: white;
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
            
            body {
                background-color: #e0a800
            }
        </style>
    
    
 <!DOCTYPE html>
<html>
    <head>
      
        <meta charset="UTF-8">
        <title>Select Product</title> 
        <script type="text/javascript" src="calc.js"></script>
    </head>
    
    <body>
      <!--dividing the header from rest of text-->
      <div class="one">
  <a href="../index.php">Homepage</a>
  <a href="../tiltedpage_scroll-master/demo/consulting.html">About Us </a>
  <hr>
  </div>
  </br>
  <!--putting the prices on the radio buttons-->
 <div id="purchase">
        <center>
            <h2>Our Products:</h2>
            <br/>
            
            <form method="post" action="ebus2.php">
              
              <label for="blockchain">
                <input type="radio" id="blockchain" name="product" checked onClick="disablebtnProceed()"/>
               Blockchain
              </label>
              
              <br/>
              
              <label for="autonomousthings">
                <input type="radio" id="autonomousthings" name="product" onClick="disablebtnProceed()"/>
                Autonomous Things
              </label>
              
              <br/>
              
                <label for="immersivexp">
                <input type="radio" id="immersivexp" name="product" checked onClick="disablebtnProceed()"/>
                Immersive Experience
              </label>
             
             </br>      
             </br>
             </br>
              
              <label for="SubTotal">
                Sub Total
                <input type="text" id="txtSubTotal" value="0.00" readonly/>
              </label>
              
              <br/>
              <br/>
              
              <label for="Discount">
                Discount(10%)
                <input type="text" id="txtDiscount" value="0.00" readonly/>
              </label>
              
               <br/>
              <br/>
              
                <label for="VAT">
                VAT(20%)
                <input type="text" id="txtVAT" value="0.00" readonly/>
              </label>
              
                <br/>
              <br/>
              
              
              <label for="total">
                Total
                <input type="text" id="txtTotal" name=txtTtotal" value="0.00" readonly/>
              </label>
            </center>
              <br/>
              </div>
                </form>

              <!--adding buttons-->
            <center>
                <button type="submit" id="btnCart" name="btnCart" onclick="location.href='ebus2.php'">Add to Cart</button>
            </center>
                   
            <br>
            <br>
          
            <center>
            <button id='btnClear' onclick="location.href='ebus1.php'">Clear</a>
            </center>
            <br>
            <br/>
            <center>
            <button id="btnCalculate" onClick="calcSub()">Calculate Cost</button>
            </center>
            <br>
        
    </body>
</html>
