<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to customers page</h1>
     <p>document for customer</p>
    
    <ul>
        <li><a href="attendant.php">Attendant page</a></li>
        <li><a href="customer.php">Customer page</a></li>
        <li><a href="food.php">Food page</a></li>
        <li><a href="sales.php">Sales page</a></li>
        <li><a href="order.php">Order page</a></li>
    </ul>
    <form method="post"  action="submit_customer.php">
        <label>Enter customer name</label>
        <input type="text"  name="customer">
        <label>Enter customer phone number</label>
        <input type="text"   name="phone">
        <button>submit</button>
    </form>
    <ul>
        <li><a href="customer_list.php">Customer list</a></li>
    </ul>
</body>
</html>
