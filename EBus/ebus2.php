<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
$phoneNumber = "";
      
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtNumber'] = $phoneNumber;
?>

<!DOCTYPE html>
<html>
<head>
<title>Confirm Purchase</title>
</head>

<body>
    <div class="form">
        <form name="Details" method="post" action="ebus3.php">
    </div>
    <div id="paragraph title">
        <h3>Enter Details</h3>
        <hr>
    </div>
    
<div id="First Name">
    <center>
        <label for="fullname">Full Name</label>
        <br>
        <input type="text" name="txtName" id="txtName" size="40">
    </center>
</div>
    <br>
    <div id="Email">
        <center>
            <label for="phone">Phone Number</label>
            <br>
            <input type="text" name="txtNumber" id="txtNumber" size="40"> 
        </center>
    </div>
    <br>
    <div id="PIN">
        <center>
            <label for="pin">PIN</label>
            <br>
            <input type="text" name="txtPin" id="txtPin" size="40" maxlength="4">
        </center>
    </div>
    <br>
    <div id="submit-button">
        <center>
             <button onclick="location.href='http://localhost:8000/EBus/ebus3.php'" type="button">
         Submit Details</button>
        </center>
    </div>
</form>
        </body>



</html>