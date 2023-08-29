<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Area of trapezium</h3>
    <form style="text-align: center;">
    <label><b>a </b>(base)</label>
    <input type="number" placeholder="Enter value" id="a" name="a"><br>
    <label>b (base)</label>
    <input type="number" placeholder="Enter value" id="b" name="b"><br>
    <label>h (height)</label>
    <input type="number" placeholder="Enter value" id="h" name="h"><br>

    <button>calculate</button>

</form>
</body>
</html>
<?php
$a=$_GET["a"];
$b=$_GET["b"];
$h=$_GET["h"];
    function areaoftrapezium($q,$w,$r){
        $a=$q;
        $b=$w;
        $h=$r;
        echo (($a+$b)/2)*$h;
    }   
    
    areaoftrapezium($a,$b,$h);
    ?>



