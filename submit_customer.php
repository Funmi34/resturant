<?php
$cusname=$_POST["customer"];
echo "customer name is ".$cusname;
echo "<br>";

$phone=$_POST["phone"];
echo "customer phone number for ".$cusname." is ".$phone;
echo "<br>";

$connection=mysqli_connect("localhost","root","","resturant");
$sql="INSERT INTO customer(cus_name,phone) VALUES ('$cusname','$phone')";
$r=mysqli_query($connection,$sql);
if($r){
echo "sucessful";
} else {
echo "something went wrong";
}
echo "<br>";
echo '<a href="customer.php">Go back</a>';

?>