<?php
$fid=$_POST["foodid"];
$att=$_POST["attendant_id"];
$fname=$_POST["foodname"];
$fqty=$_POST["foodqty"];
$date=$_POST["fooddate"];
$price=$_POST["foodprice"];
$sellqty=$_POST["sellqty"];
if($fqty >=$sellqty){
    $finalqty=$fqty - $sellqty;
    $sellprice=$sellqty * $price;
    echo "Hi,you have sold ".$sellqty." of ".$fname."(s) at the rate of $".$price." each";
    echo "<br>";
    echo "Total amount of ".$fname." sold is $".$sellprice."";
    echo "<br>";
    $db=mysqli_connect("localhost","root","","resturant");
    $sql="UPDATE food SET quantity=$finalqty WHERE id=".$fid; 
    mysqli_query($db,$sql);
    $sql1="INSERT INTO sales(food_name,quantity,food_date,price,attendant_id) 
    VALUES('$fname','$fqty','$date','$sellprice','$att')";
    mysqli_query($db,$sql1);
}else{
    echo "you cannot sell more than the available food quantity";
}
echo '<a href="sales.php">Go back</a>';

?>