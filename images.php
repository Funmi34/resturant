<?php
include 'upload1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        </head>
<body>
    <h2>Images page</h2>
    <div class="container">
        <h1> upload and store image in database </h1>
        <div class="wrapper">
        <?php if(!empty($statusMsg)){ ?>
            <p class="status <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
        <?php }?>
            <form action="" method="post" enctype="multipart/form-data" >
                    <label for="image"> Select image file:</label>
                    <input type="file"  name="image" class="form-control">
                <label>select food</label>
                <select   name="food">
                    <?php
                    $dbconnect=mysqli_connect("localhost","root","","resturant");
                    $sql="SELECT food_name from food" 
                    ?>
                </select>
  
                <input type="submit"  name="submit" class="btn-primary" value="Upload">
            </form>
            <a href="view.php">View uploaded images</a>
    </div>
</body>
</html>



