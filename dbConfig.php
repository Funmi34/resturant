<?php
$db=mysqli_connect("localhost","root","","resturant");
if ($db->connect_error) {
    die("Connection failed: " .$db->connect_error);
}
?>
