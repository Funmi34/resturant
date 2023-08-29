<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$id = $_GET["foodid"];
$qty = $_GET["quantity"];



echo  '<a href="sales.php">Go back</a>'; 
?>
<form method="post" action="submit_update_foodqty.php">
     <input type="hidden" name="foodid" value="<?php echo $id  ?>">
    <input type="number" name="newqty" value="<?php echo $qty ?>" placeholder="Enter Quantity"> for <?php echo $qty;?>
    <button>Update Food Quantity</button>
</form>
</body>
</html>