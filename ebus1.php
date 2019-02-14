<?php>
<html>

<head>
<title>Calculator</title>

<script language="javascript" type="text/javascript">
        function packageTotal() {
    //Enter prices here
    var x = 5 ;
    var y = 10 ;
    var p = x + y * 12;
    var b = y * 12 ;
    
    if (document.getElementById('basicprogram').checked) {
        //Basic Package is checked
        document.Calculator.Total.VAlue = b;
        
    }else if (document.getElementById('proProgram').checked) {
        //pro package is checked
        document.calculator.total.value = p;
    }
        }
</script>
</head>
</html>


