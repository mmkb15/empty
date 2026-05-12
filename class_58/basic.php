<?php
    echo "<span>PHP Top</span>"," - ","PHP Top 2 <b>";   //echo
    echo ("<h5>PHP Top</h5>"); //echo with ()
    echo "<br>"."234324";

    print "<h5>print'Print line one';</h5>";   //print
    print ("<h5>print('Print line two');</h5>"); //print ()

    $arr = [11, 22, "3333","amrN"];
    const PI = 3.14; //constant use const then name must UPPERCASE like PI
    $name = " Mina";
    $age = 25;

    echo"<br>---------------print_r----------------<br><b>";  
    print_r($arr); 
    echo"<br><br>---------------var_dump----------------<br>";
    var_dump($arr);
    echo"<br><br>---------------printf----------------<br>";
    // printf("Her name %s and age is %d.", "Mina", 25);
    printf("Her name %s and age is %d.", $name, $age);          #printf display the text with variable 
    echo"<br><br>---------------print----------------<br>";
    // print("Her name" . " Mina" . " and age is " . 25 . ".");
    print("Her name".$name." and age is ".$age."."); 
    echo"<br><br>---------------sprintf----------------<br>";
    $str = sprintf("Her name %s and age is %d.", $name, $age);  #sprintf return value
    echo $str;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic php</title>
</head>
<body>
    <h2>HTML Section</h2>
    <h3>
        <!-- PHP Syntax some Way to Write -->
        <?php echo "PHP inside HTML<br>"; ?>
        <? echo "Short tag : Not Recommanded<br>"; ?> <!-- not recommanded -->
        <?= "Shortcircuit Syntax : Recommanded<br>"; ?><!-- shortcircuit syntax  -->
    </h3>
</body>
</html>

<?php
echo "<h5>PHP Botton</h5>";
?>