<?php
session_start();
if(!isset($_SESSION["uname"])){
    header("Location:error.php");
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1><?php echo  "welcome ".$_SESSION["uname"]; ?></h1>
    <br>
    <ul>
        <li><a href="attendant.php">Attendant page</a></li>
        <li><a href="customer.php">Customer page</a></li>
        <li><a href="food.php">Food page</a></li>
        <li><a href="sales.php">Sales page</a></li>
        <li><a href="order.php">Order page</a></li>
        <li><a href="attendant_list.php">Attendant list</a></li>

    </ul>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Item Name</label>
        <input type="file" name="picture">
    <button name="submit"> Upload Image</button>
    </form>
    <table border="5"width="200">
        <thead>
        <tr>
            <td>S/N</td>
            <td>IMAGES</td>
            <td>NAME</td>
        </tr>
        </thead>
        <tbody>
            <?php
            $dbconnect=mysqli_connect("localhost","root","","resturant");
            $sql="SELECT * FROM image_pic WHERE userid=""";
            ?>
        </tbody>
</body>
</html>