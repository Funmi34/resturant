<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1> Welcome To Sell Food</h1>
    <br>
    <ul>
        <li><a href="attendant.php">Attendant page</a></li>
        <li><a href="customer.php">Customer page</a></li>
        <li><a href="food.php">Food page</a></li>
        <li><a href="sales.php">Sales page</a></li>
    </ul>

    <form action="submit_sales.php" method="POST">
    <table width="800px" border="5" style="margin: auto;">
        <thead>
            <tr style="background-color: grey; color:white;">
                <td>SN</td>
                <td>ATTENDANT</td> 
                <td>FOOD</td>
                <td>FOOD QUANTITY </td>
                <td>DATE</td>
                <td>PRICE</td>
                <td>QUANTITY TO SELL</td>
                <td>ACTION</td>
               
            </tr>
        </thead>
        <tbody>
       
        <?php 
        
        $count =1;
            //connecting to mysql server
            $dbconnect = mysqli_connect("localhost","root","","resturant");
            //preparing sql query to retrieve data from database
            $sql = "SELECT food.id as foodid,attendant.id as attendantid,food_name,quantity,food_date,price,attendant_id,
            att_name,att_address,phone FROM food inner join attendant ON food.attendant_id = attendant.id WHERE 
            food.id=".$_GET["foodid"];
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               
               
              echo' 
              <tr>
                    <td>'.$count.' <input type="hidden" name="foodid" value="'.$rows["foodid"].'"></td>
                    <td><select name="attendant_id">';
                ?>
                <?php
                //connecting to mysql server
                $db = mysqli_connect("localhost","root","","resturant");
                //preparing sql query to retrieve data from database
                $s = "SELECT * FROM attendant";
                $ra = mysqli_query($db,$s);
                while($row = mysqli_fetch_assoc($ra)){
                    echo '<option value='.$row["id"].'>'.$row["att_name"].'</option>';
                }
               
                    ?>
               <?php
                echo '</select></td>
        
                    <td><input type="text" name="foodname" value="'.$rows["food_name"].'" readonly></td>
                    <td><input type="number" name="foodqty" value="'.$rows["quantity"].'" readonly></td>
                    <td><input type="date" name="fooddate" value="'.$rows["food_date"].'" ></td>
                 
                    <td><input type="number" name="foodprice" value="'.$rows["price"].'" readonly></td>
                   
                    <td><input type="number" name="sellqty" placeholder="Enter quanity"></td>
                    <td><button> Sell</button></td>
            </tr>
                ';
                $count++;
            }
        ?> 
        </tbody>
    </table>
    </form>
    <a href="sales.php">back</a>
</body>
</html>