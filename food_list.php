<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  type="text/css"   href="d.css">

</head>
<body>
<div class="icon-bar">
                <a href="home.php"><i class="fa fa-home"><span class="nav-text">Home</span></i></a>
                <a href="help.php"><i class="fa fa-question-circle"><span class="nav-text">Help</span></i></a>
                <a href="sales.php"><img src="img/store-3-line.png" style="height: 17px;"><span class="nav-text">Sell</span></i></a>
                <a href="attendant.php"><i class="fa fa-user-circle-o"><span class="nav-text">Profile</span></i></a>
                <a href="food_list.php"  class="acfit"><i class="fa fa-cutlery"><span class="nav-text">Food</span></i></a>
            </div>

    <h2>WELOME TO LAURA'S FOOD LIST</h2>
    <table border="5" width="700px" margin="auto";>
        <thead>
        <tr>
            <td>S/N</td>
            <td>NAME</td>
            <td>QUANTITY</td>
            <td>DATE</td>
            <td>PRICE</td>
            <td>IMAGES</td>
            <td>ACTIONS</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $count=1;
        $dbconnect=mysqli_connect("localhost","root","","resturant");
        $sql="SELECT * FROM food";
        $recordset=mysqli_query($dbconnect,$sql);
        while ($rows=mysqli_fetch_assoc($recordset)){
            echo '
            <tr>
            <td>'.$count.'</td>
            <td>'.$rows["food_name"].'</td>
            <td>'.$rows["quantity"].'</td>
            <td>'.$rows["food_date"].'</td>
            <td>'.$rows["price"].'</td>
            <td>'.$rows["images_id"].'</td>
            <td><a href="delete_food.php?foodid='.$rows["id"].'">DELETE |
            <a href="update_food.php?foodid='.$rows["id"].' &name='.$rows["food_name"].'&qty='.$rows["quantity"].'
            &date='.$rows["food_date"].' &price='.$rows["price"].'">EDIT</a></td>
            </tr>
            ';
            $count++;
        }
        ?>   
    </table>
    <ul>
    <li><a href="food.php">Go back</a></li>
    </ul>
</body>
</html>