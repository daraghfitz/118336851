<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>

<!DOCTYPE html>
<html>
<head>
<title>Confirm Purchase</title>
</head>

<body>
    <div id="paragraph title">
        <h3>Enter Details</h3>
        <hr>
    </div>
    
<div id="First Name">
    <center>
        <label for="firstname">First Name</label>
        <br>
        <input type="text" name="firstname" id="firstname" size="40">
    </center>
</div>
    <br>
    <div id ="Surname">        
         <center>
             <label for="surname">Surname</label>
             <br>
             <input type="text" name="surname" id="surname" size="40">            
        </center>
</div>
    <br>
    <div id="Email">
        <center>
            <label for="email">Email</label>
            <br>
            <input type="text" name="email" id="email" size="40"> 
        </center>
    </div>
    <br>
    <div id="PIN">
        <center>
            <label for="pin">PIN</label>
            <br>
            <input type="text" name="pin" id="pin" size="40" maxlength="4">
        </center>
    </div>
    <br>
    <div id="submit-button">
        <center>
            <button onclick="location.href='http://localhost:8000/EBus/ebus3.php'" type="submit">
         Submit Details</button>
        </center>
    </div>
        </body>



</html>