<?php
$id=$_POST["foodid"];
$nfood=$_POST["newname"];
echo "The name of the food is ".$nfood;
echo "<br>";
$nqty=$_POST["newqty"];
echo "The quantity of ".$nfood." is ".$nqty;
echo "<br>";
$ndate=$_POST["newdate"];
echo "The updated date of ".$nfood." is ".$ndate;
echo "<br>";
$nprice=$_POST["newprice"];
echo "The price of ".$nfood." is  $".$nprice;
echo "<br>";
$natt=$_POST["name"];
echo "The attendant id of the attentant that managed  ".$nfood." is ".$natt;
$dbconnect=mysqli_connect("localhost","root","","resturant");
$sql="UPDATE food SET food_name='$nfood',quantity='$nqty',food_date='$ndate',price='$nprice',attendant_id='$natt'
 WHERE id=$id";
mysqli_query($dbconnect,$sql);
echo "update sucessful";
echo "<br>";
echo '<a href="food_list.php">Go back</a>';

?>