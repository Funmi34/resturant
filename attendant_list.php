<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Attendant list</h2>
    <table  border="5" width="800px" style="margin: auto;">
    <thead>
        <tr>
            <td>S/N</td>
            <td>NAME</td>
            <td>ADDRESS</td>
            <td>PHONE</td>
            <td>ACTION</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $count=1;
        $dbconnect=mysqli_connect("localhost","root","","resturant");
        $sql="SELECT attendant.id, att_name,att_address,phone FROM attendant";
        $r=mysqli_query($dbconnect,$sql);
        while ($rows=mysqli_fetch_assoc($r)){
            echo '
        <tr>
            <td>'.$count.'</td>
            <td>'.$rows["att_name"].'</td>
            <td>'.$rows["att_address"].'</td>
            <td>'.$rows["phone"].'</td>
            <td><a href="delete_attendant.php?attendantid='.$rows["id"].'">DELETE</a></td>
        </tr>
            ';
            $count++;
         }
        ?>
    </tbody>
    <ul>
        <li><a href="attendant.php">Go back</a></li>
    </ul>
</body>
</html>