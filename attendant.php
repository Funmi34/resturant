<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  type="text/css"   href="a.css">


</head>
<body background="img/images (31).jpeg">
<div class="icon-bar">
                <a href="home.php"><i class="fa fa-home"><span class="nav-text">Home</span></i></a>
                <a href="help.php"><i class="fa fa-question-circle"><span class="nav-text">Help</span></i></a>
                <a href="sales.php"><img src="img/store-3-line.png" style="height: 17px;"><span class="nav-text">Sell</span></i></a>
                <a href="image.php" class="acfit"><i class="fa fa-user-circle-o"><span class="nav-text">Profile</span></i></a>
                <a href="food_list.php"><i class="fa fa-cutlery"><span class="nav-text">Food</span></i></a>
            </div>
  
    <h1 style="color:white";>Welcome to attendant page</h1>
    <ul>
        <li><a href="attendant.php">Attendant page</a></li>
        <li><a href="customer.php">Customer page</a></li>
        <li><a href="food.php">Food page</a></li>
        <li><a href="sales.php">Sales page</a></li>
        <li><a href="order.php">Order page</a></li>
        <li><a href="attendant_list.php">Attendant list</a></li>

    </ul>
    <form method="post"      action="submit_attendant.php" >
        <div class="you">
            <div class="name">
        <input type="text" name="name"  placeholder="Enter attendant name"  id="uname"   ><br>
            </div>
            <div class="address">
        <input type="text" name="address" placeholder="Enter attendant address" id="pword"><br>
            </div>
            <div class="no">
        <input type="text" name="number" placeholder="Enter phone number" id="pword"><br>
            </div>
        <button  class="btn">submit</button>
        </div>
        
    </form>
</body>
</html>