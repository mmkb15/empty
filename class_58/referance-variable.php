<?php
    $var1 = 10;
    $var2 =& $var1;
    $var2 = 20;

    $var3 = 10;
    $var4 = $var3;
    $var4 = 20;

    echo "<br><br>  =&  Referance Value ---------<br>";
    echo $var1; // update when var2 rewrite
    echo "<br>";
    echo $var2;

    echo "<br><br>  =  Assign Value ------- --<br>";
    echo $var3; // update when var2 rewrite
    echo "<br>";
    echo $var4;
?>