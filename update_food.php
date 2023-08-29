<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id=$_GET["foodid"];
    $name=$_GET["name"];
    $qty=$_GET["qty"];
    $date=$_GET["date"];
    $price=$_GET["price"];
    ?>
    <form method="post"  action="submit_update_food.php">
        <input type="hidden" name="foodid" value="<?php echo $id?>">
        <label>Enter food</label>
        <input type="text"  name="newname"  value="<?php echo $name?>">
        <label>Enter quantity</label>
        <input type="number"  name="newqty" value="<?php echo $qty?>">
        <label>Enter date</label>
        <input type="date" name="newdate" value="<?php echo $date?>">
        <label>Enter new price</label>
        <input type="number" name="newprice"  value="<?php echo $price?>">
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
        </select><br>






        <button>submit</button>
    </form>
    <ul>
        <li><a href="food_list.php">Go back</a></li>
    </ul>
</body>
</html>