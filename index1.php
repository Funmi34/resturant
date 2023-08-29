<?php
$name=$_POST["uname"];
$pass=$_POST["pass"];
$conf=$_POST["cword"];
$phe=$_POST["phe"];
$conf=$pass;
$p=$conf=$pass;
if($p){
    echo "successful";
}else{
    echo "password error";
}
$db=mysqli_connect("localhost","root","","resturant");
$sql="INSERT INTO user (uname,pword,email) VALUES('$name','$p','$phe')";
$r=mysqli_query($db,$sql);
if($r){
    header("location:login.php");
}else{
    echo "OPPS,";
}
echo '<br>';
echo '<a href="index.php">Go back</a>';
?>
?>