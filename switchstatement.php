<?php 
$title ="switchstatement";
include "include/headerall.php";?>

<?php
$grade="k";
switch($grade){
    case 'A':
    echo "excellent";
    break;
    case 'B':
    echo "very good";
    break;
    case 'C':
    echo " good";
    break;
    case 'D':
    echo "FAIR";
    break;
    default:
    echo "poor";
    break;

}
?>
</body>

</html> 