<?php
$id= $_POST["customerid"];
$name = $_POST["name"];
echo "customer name is ".$name;
echo "<br>";
$phone = $_POST["newnumber"];
echo "customer name for ".$name." is ".$phone;
echo "<br>";
$connection = mysqli_connect("localhost","root","","resturant");
$sql ="UPDATE customer SET cus_name='$name', phone='$phone' WHERE id =".$id;
mysqli_query($connection,$sql);
echo "customer updated sucessfully";
echo "<br>";
echo '<a href="customer_list.php">Go back</a>';
?>

