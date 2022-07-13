<?php 
$title ="forloop";
include "include/headerall.php";?>

<?php 
echo "<p>HOW TO PRINTWHOLE ARRAY</p>";
$numbers =array(1,3,4,5,6,7,865,78,6,8,9,6,4,3,6,7,6,4);
$size = count($numbers);
echo "$size<br>";
for($s=0;$s<18;$s++){
    echo "$numbers[$s]<br>";
}
var_dump($numbers);
?>
</body>

</html> 