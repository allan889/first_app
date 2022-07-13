<?php 
$title ="if";
include "include/headerall.php";?>


    <?php
    
    $num1 =$_POST["num1"];
    $sign =$_POST["sign"];
    $num2 =$_POST["num2"];

    if ($sign == "+") {
        echo "$num1 + $num2";
    } elseif ($sign == "-") {
        echo "$num1 - $num2";
    } elseif ($sign == "*") {
        echo "$num1 * $num2";
    } elseif ($sign == "/") {
        echo "$num1 / $num2";
    } else {
        echo "invalid";
    }
    ?>
</body>

</html> 