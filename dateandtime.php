<?php 
$title ="dae and time";
include "include/headerall.php";?>

<?php
echo "<p>ALLAN</p>"; 
$date =getdate();
echo $date["mday"].'/'.$date["mon"].'/'.$date["year"];
echo '<hr>';
echo date('d/m/y');

?>
</body>

</html> 