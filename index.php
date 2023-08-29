
<?php
session_start();
$userid=$_POST["user_id"];
$un=$_POST["username"];
$pw=$_POST["password"];
$db=mysqli_connect("localhost","root","","resturant");
$sql="SELECT * FROM user WHERE uname='$un' AND pword='$pw'";
$r=mysqli_query($db,$sql);
        while($rows=mysqli_fetch_assoc($r)){
            $username = $rows["uname"];
            $_SESSION["uname"] = $username;
            $_SESSION["user_id"] =$userid;
            echo "$userid";
           
        }
        echo "$userid";
        $num=mysqli_num_rows($r);
if($num==1){
    echo "successful";
}else {
    echo"username and password error";
}

echo '<br>';
echo '<a href="index.php">Go back</a>';
?>