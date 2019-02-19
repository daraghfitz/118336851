<?php>
<!DOCTYPE html>
<html>
    <head>
      
        <meta charset="UTF-8">
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="calc.js"></script>

    </head>
    
    <body>
      <!--here i am separating the header from rest of text-->
      <div class="one">
  <a href="http://localhost:8000/menupage.html">Home Menu</a>
       </div>
  </br>
  </br>
  </br>
  </br>
  <!-- here i am putting the prices on the radio buttons-->
 <div id="purchase">
            <h4>Our Products:</h4>
            
            <br/>
            
            <form method="POST" action="Ebus1.php">
              
              <label for="blockchain">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Blockchain @ $1000
              </label>
              
              <br/>
              
              <label for="autonomousthings">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Autonomous Things @ $2000
              </label>
              
              <br/>
              
                <label for="immersivexp">
                <input type="radio" id="Cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Immersive Experience @ $3000
              </label>
             
              
             </br>
             </br>
              
              <label for="SubTotal">
                Sub Total
                <input type="text" id="SubTotal" value="0.00" readonly/>
              </label>
              
              <br/>
              <br/>
              
              <label for="Discount">
                Discount(10%)
                <input type="text" id="Discount" value="0.00" readonly/>
              </label>
              
               <br/>
              <br/>
              
                <label for="VAT">
                VAT(10%)
                <input type="text" id="VAT" value="0.00" readonly/>
              </label>
              
                <br/>
              <br/>
              
              
              <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              </div>
              <!--adding buttons-->
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            <br>
            <a role="button" href="Ebus1.php">Clear Choice</a>
            <br/>
            <button id="calculate" onClick="calcSub()">Calculate Cost</button>
            <br>
           
    
    </body>
</html>