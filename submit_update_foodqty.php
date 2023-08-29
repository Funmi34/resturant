<?php
$id = $_POST["foodid"];
$qty = $_POST["newqty"];
$connection = mysqli_connect("Localhost","root","","resturant");
$sql = "UPDATE food SET quantity = $qty WHERE id =".$id;
mysqli_query($connection,$sql);
echo "Item Quantity updated  successfully";

echo "<br>";
echo  '<a href="sales.php">Go back</a>'; 
?>