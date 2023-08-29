<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $id=$_GET["customerid"];
    $name=$_GET["nname"];
    $phone=$_GET["phone"];
    $dbconnect=mysqli_connect("localhost","root","","resturant");
     echo '<a href="customer.php">Go back</a>';
    ?>
    <form method="post"   action="submit_update_customer.php">
        <input type="hidden"  name="customerid" value="<?php echo $id?>">
        <label>Enter customer name</label>
        <input type="text" name="name"  value="<?php echo $name?>">
        <label>Enter phone number</label>
        <input type="number" name="newnumber"  value="<?php echo $phone?>">
        <button>submit</button></br>
    </form>
</body>
</html>