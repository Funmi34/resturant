<?php

$fname=$_POST["food"];
echo "The name of the food is ".$fname;
echo "<br>";

$qty=$_POST["qty"];
echo "The quality of ".$fname." is ".$qty;
echo "<br>";

$date=$_POST["date"];
echo "The date of ".$fname." is ".$date;
echo "<br>";

$price=$_POST["price"];
echo "The price of ".$fname." is  $".$price;
echo "<br>";

$ad=$_POST["name"];
$co=mysqli_connect("localhost","root","","resturant");
$sql1="SELECT * FROM attendant WHERE id =".$ad;
$ro=mysqli_query($co,$sql1);
while ($rows=mysqli_fetch_assoc($ro)){
    $a=$rows["att_name"];
}
echo "The food was recorded by ".$a;
echo "<br>";

$dbconnect=mysqli_connect("localhost","root","","resturant");
$sql="INSERT INTO food(food_name,quantity,food_date,price,attendant_id) VALUES ('$fname','$qty','$date','$price','$ad')";
$result=mysqli_query($dbconnect,$sql);
if($result){
echo "successful";}
else{
echo "something went wrong";
}
echo "<br>";
echo '<a href="food.php">Go back</a>';
?>