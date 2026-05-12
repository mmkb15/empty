<?php
    $num = 20;
    $str = "10.4543";
    $arr = array("name",33,"age","year");

    $numUp = (string) $num; // "10"
    $strUp = (int) $str; // 10
    $arrUp = (array) $str; // 
    $objUp = (object) $str; // 
    $floatUp = (double) $str; // 

    var_dump($numUp);
    echo"<br>";
    var_dump($strUp);
    echo"<br>";
    var_dump($arrUp);
    echo"<br>";
    var_dump($objUp);
    echo"<br>";
    var_dump($floatUp);
?>