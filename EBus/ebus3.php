
<!DOCTYPE html>
<html>
<body>
<!--//Starting the session to get the variable from last page-->
<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
echo "Name: ".$fullNameValue.".";
echo '<br>';
echo "Phone Number: ".$phoneNumber.".";
echo '<br>';
echo "Total: ".$totalValue2.".";
?>

</body>
</html>