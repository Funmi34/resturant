<?php
require_once 'dbConfig.php';
$sql="SELECT images FROM images ORDER BY id DESC";
$result=mysqli_query($db,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            max-width: 100%;
            max-height: 100%;
        }
        .gallery {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Retrieve Images From Database</h1>
        <a href="images.php">&lsaquo;Upload Image</a>
        <div class="gallery">
            <?php if($result->num_rows > 0){ ?>
                    <?php while($row = $result->fetch_assoc()){ ?>
                
                 <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['images']); ?>" />
                <?php } ?>
            </div>
            <?php }else{ ?>
            <p class="status error">Image(s) not found...</p>
        <?php } ?>
            </div>
            </div>    

</body>
</html>