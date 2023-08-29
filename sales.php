<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  type="text/css"   href="s.css">

</head>
<body background="img/images (31).jpeg" class="bod">
<div class="icon-bar">
                <a href="home.html"><i class="fa fa-home"><span class="nav-text">Home</span></i></a>
                <a href="help.php"><i class="fa fa-question-circle"><span class="nav-text">Help</span></i></a>
                <a href="sales.php" class="acfit"><img src="img/store-3-line.png" style="height: 17px;"><span class="nav-text">Sell</span></i></a>
                <a href="attendant.php"><i class="fa fa-user-circle-o"><span class="nav-text">Profile</span></i></a>
                <a href="food_list.php"><i class="fa fa-cutlery"><span class="nav-text">Food</span></i></a>
            </div>

    <h1>Welcome to sales page</h1>
    <ul>
        <li><a href="attendant.php">Attendant page</a></li>
        <li><a href="customer.php">Customer page</a></li>
        <li><a href="food.php">Food page</a></li>
        <li><a href="sales.php">Sales page</a></li>
        <li><a href="images.php">Upload images</a><li>
        <li><a href="order.php">Order page</a></li>   
    </ul>
    <table border="5"  width="800px" margin="auto";>
        <thead>
            <tr>
                <td>S/N</td>
                <td>FOOD</td>
                <td>QUANTITY</td>
                <td>PRICE</td>
                <td>ATTENDANT</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>
</div>
<?php 
        $count =1;
        $msg = "";
            //connecting to mysql server
            $dbconnect = mysqli_connect("localhost","root","","resturant");
            //preparing sql query to retrieve data from database
            $sql = "SELECT food.id as foodid,attendant.id as attendantid,food_name,quantity,food_date,price,attendant_id,
            att_name,att_address,phone	
             FROM food inner join attendant ON food.attendant_id = attendant.id";
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               if($rows["quantity"] == 0){
                    $msg = "No item in the stock";
               }else{
                $msg = $rows["quantity"];
               }
               
              echo' 
              <tr>

                    <td>'.$count.'</td>

                    <td>'.$rows["food_name"].'</td>
                    <td>'.$msg.'</td>
                    <td>'.$rows["price"].'</td>
                    <td>'.$rows["att_name"].'</td>

                    <td>
                    <a href="sellfood.php?foodid='.$rows["foodid"].'">Sell Now |</a>
                    <a href="updatefoodqty.php?foodid='.$rows["foodid"].'&quantity='.$rows["quantity"].'">Update Food Quantity</a>
                    </td>
            </tr>
                ';
                $count++;
            }
        ?> 
    

