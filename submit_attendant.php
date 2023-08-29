<?php

$attendant=$_POST["name"];
echo "attendant name is ".$attendant;
echo "<br>";

$attaddress= $_POST["address"];
echo "attendant address for ".$attendant." is ".$attaddress;
echo "<br>";

$attphone= $_POST["number"];
echo "attendant phone number for ".$attendant." is ".$attphone;
echo "<br>";

$connection= mysqli_connect("localhost","root","","resturant");
$sql= "INSERT INTO attendant (att_name,att_address,phone) VALUES ('$attendant','$attaddress','$attphone')";
$result= mysqli_query($connection,$sql); 
if ($result){ 
    echo "successful";}
     else {
        echo "there is an error";
}
echo "<br>";
echo '<a href="attendant.php">Go back</a>';

?>