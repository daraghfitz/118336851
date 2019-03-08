
<!DOCTYPE html>
<html>
    <head>
        <style>
            #container {
                text-align: center;
                font-family: 'arial', sans-serif;  
                font-size: x-large;
                color: #00B0FF;
            }
            
            h1 {
                text-align: center;
                font-family: 'arial', sans-serif;
                font-size: xx-large;
                font-weight: bold;
                color: #00B0FF;
            }
        </style>
        <title>Receipt</title>
    </head>
    
<body>
    <header>
        <h1>Receipt</h1>
        <hr>
    </header>
           <div id="container">
            <!--//Starting the session to get the variable from last page-->
<?php
session_start();
@$totalValue2 = @$_POST['txtTotal'];
@$fullNameValue = @$_POST['txtName'];
echo "Name: ".$fullNameValue.".";
echo "<br>";
echo "Total: ".$totalValue2.".";
?>
</div>
</body>
</html>