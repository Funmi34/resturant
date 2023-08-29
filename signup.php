<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
        body{
            background-image: url(img/e9f1764c-0bdc-496a-be56-2aef89924b4b.jpg);
            color: white;
            font-family: sans-serif;    
             
            text-align: center;
        }
        .top{
            color: white;
            font-size: 30px;
        }
        .container {
            margin:7rem;
            width: 1000px;
            height: 550px;
            border: 1px solid white;
            border-radius: 7px;

        }

        .user {
            padding: 2rem;
            margin: 0;
        }
        .btn {
            padding: 7px;
            margin: 30px;
            width: 200px;
            border: 1px solid green;
            border-radius: 7px;
            opacity: 0.3;
        }
        #pword {
            padding: 7px;
            border-radius: 7px;
            border: 1px solid white;
            width: 250px;
            margin: 0px;
        }
        #uname {
            padding: 7px;
            border-radius: 7px;
            width: 250px;
        }
        .p {
            text-size: 40px;
        }
        .up {
            opacity: 0.3;

        }
        #us {
            margin:5px;
            padding: 7px;
            width:250px;
            border-radius: 7px;     

        }
        #ps {
            margin:5px;
            padding: 7px;
            width:250px;
            border-radius: 7px;     
        }
        #cw {
            margin:5px;
            padding: 7px;
            width:250px;
            border-radius: 7px;     

        }
        #pe {
            margin:5px;
            padding: 7px;
            width:250px;
            border-radius: 7px;     

        }
    </style>


<body>
    <div class="container">
        <h2 class="top">Sign Up</h2>
    <p class="p">please insert your name and password below</p>  
    <form method="post" action="index1.php">
    <div class="up">
    <div class="user">
        <input type="text" id="us" name="uname" placeholder="username">
    </div>
    <div class="pass">
        <input type="text" id="ps" name="pass" placeholder="Create password" required><br><br><br>
        <input type="text"  id="cw"  name="cword" placeholder="Confirm password" required><br><br><br>
        <input type="text"  id="pe" name="phe" placeholder="Enter Phone/email"  required>
    </div>

</div><br>
    <button class="btn">Sign Up</button>
    </div>
</form>
</body>
</html>