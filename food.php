<?php session_start();
if(!isset($_SESSION["username"])){
header("Location:error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Welcome to food page</h1>
    <ul>
        <li><a href="attendant.php">Attendant page</a></li>
        <li><a href="customer.php">Customer page</a></li>
        <li><a href="food.php">Food page</a></li>
        <li><a href="sales.php">Sales page</a></li>
        <li><a href="order.php">Order page</a></li>
    </ul>
    <form method="post" action="submit_food.php">
        <label>Enter Food name</label>
        <input type="text" name="food">
        <label> Enter food quality</label>
        <input type="number" name="qty">
        <label> Enter date</label>
        <input type="date" name="date">
        <label> Enter price</label>
        <input type="number" name="price">
        <label>Select attendant name</label>
        <select name="name">
            <?php
            $dbconnect=mysqli_connect("localhost","root","","resturant");
            $sql="SELECT * FROM attendant";
            $r=mysqli_query($dbconnect,$sql);
            while ($rows=mysqli_fetch_assoc($r)){
                echo '<option value='.$rows["id"].'>'.$rows["att_name"].'</option>';
            }
            ?>
        </select>
        <label>Images</label>
        
        <br>
    
        <button> submit </button>
    </form>
    <ul>
        <li><a href="food_list.php">Food list</a></li>
    </ul> 
    </body>
</html> 

