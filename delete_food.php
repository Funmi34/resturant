<?php
$id=$_GET["foodid"];
$dbconnect=mysqli_connect("localhost","root","","resturant");
$sql="DELETE FROM food WHERE id=".$id;
mysqli_query($dbconnect,$sql);
echo "food deleted successfully";
echo "<br>";
echo '<a href="food_list.php">Go back</a>';
?>