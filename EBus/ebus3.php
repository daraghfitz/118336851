
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
            
            header {
                text-align: center;
                font-family: 'arial', sans-serif;
                font-size: large;
                font-weight: bold;
                color: #00B0FF;
            }
        </style>
        <title>Receipt</title>      
    </head>
    
<body>
<center>
    <header>       
        <h1>Receipt</h1>
        <hr>
    </header>
</center>
           <div id="container">
            <!--//Starting the session to get the variable from last page-->
<?php
session_start();
@$totalValue2 = @$_POST['txtTotal'];
@$fullNameValue = @$_POST['txtName'];
$phoneNumber = @$_POST['txtNum'];
echo "Name: ".$fullNameValue;
echo "<br>";
echo "Phone Number:".@$phoneNumber;
echo "<br>";
echo "Total: ".$totalValue2;

?>
</div>
</body>
</html>