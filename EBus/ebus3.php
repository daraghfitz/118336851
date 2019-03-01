
<!DOCTYPE html>
<html>
    <head>
        <style>
            #container {
                text-align: center;
                font-family: 'arial', sans-serif;               
            }
        </style>
        <title>Receipt</title>
    </head>
    
<body>
    <header>
        <h1>Receipt</h1>
        <hr>
    </header>
<!--//Starting the session to get the variable from last page-->
<div id="container">
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