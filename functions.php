<?php 
$title ="function";
include "include/headerall.php";?>


<?php
echo"<h2>function 1</h2>";
function allan(){
    echo "my name is allan.<br>";
}
allan();

echo"<h2>function 1</h2>";

function allan1($name){
    echo "my name is $name.<br>";
}

allan1("musiime");

function allan2($name, $age){
    echo "my name is $name and an $age years.<br>";
}

allan2("Acnie",23);

function allan3($age){
   
    return  $age*$age;
}

echo allan3(23)."<br>";
echo allan3(10);
?>
</body>

</html> 