<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
      
@$totalValue = @$_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
?>

<!DOCTYPE html>
<html>
<head>
<title>Confirm Purchase</title>
<style>
    #paragraphtitle {
        font-family: 'arial', sans-serif;
        font-weight: bolder;
        color: white;
    }
    
    label {
        font-family: 'arial', sans-serif;
        font-weight: bold;   
        color: white        
    }
    
    button {
        background-color: #34ce57;
        border: #1c7430;
        padding: 18px 32px;
    }
    
    body {
        background-color: #007bff;
    }
    
    hr {
        color: black
    }
    
</style>
</head>

<body>
    <div class="form">
        <form method="post" action="ebus3.php">
    </div>
    <div id="paragraphtitle">
        <h3>Enter Details</h3>
        <hr>
    </div>
    
<div id="FirstName">
    <center>
        <label for="fullname">Full Name</label>
        <br>
        <input type="text" name="txtName" id="txtName" size="40" maxlength="25">
    </center>
</div>
    <br>
    <div id="PhoneNumber">
        <center>
            <label for="phone">Phone Number</label>
            <br>
            <input type="text" name="txtNumber" id="txtNumber" size="40" maxlength='15'> 
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
        <button onclick="location.href='ebus3.php'" type="button" id='btnSubmit'>
         Submit Details</button>
        </center>
    </div>
</form>
        </body>



</html>