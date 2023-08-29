<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Customers list</h2>
    <table border="5" width="600px" margin="auto";>
    <thead>
        <tr>
            <td>S/N</td>
            <td>NAME</td>
            <td>PHONE</td> 
            <td>ACTION</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $count=1;
        $dbconnect=mysqli_connect("localhost","root","","resturant");
        $sql="SELECT * FROM customer";
        $recordset=mysqli_query($dbconnect,$sql);
        while ($rows=mysqli_fetch_assoc($recordset)){
            echo '
            <tr>
            <td>'.$count.'</td>
            <td>'.$rows["cus_name"].'</td>
            <td>'.$rows["phone"].'</td>
            <td><a href="update_customer.php?customerid='.$rows["id"].'&nname='.$rows["cus_name"].'&phone='.$rows["phone"].'">
            UPDATE</a></td>
            </tr>
            ';
        $count++;
        }
        ?>
    </tbody>
    </table>
    <ul>
        <li><a href="customer.php">Go back</li>
    </ul>

</body>
</html>

