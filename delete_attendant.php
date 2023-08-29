<?php
$id=$_GET["attendantid"];
$connection=mysqli_connect("localhost","root","","resturant");
$sql="DELETE FROM attendant WHERE id=".$id;
mysqli_query($connection,$sql);
echo "deleted sucessfully";
echo "<br>";
echo '<a href="attendant_list.php">Go back</a>';
?>




