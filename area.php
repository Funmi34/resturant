<?php
$a=$_POST["a"];
$b=$_POST["b"];
$h=$_POST["h"];
    function areaoftrapezium($q,$w,$r){
        $a=$q;
        $b=$w;
        $h=$r;
        echo (($a+$b)/2)*$h;
    }   
    
    areaoftrapezium($a,$b,$h);
    ?>
