<?php
    //nachalo php
    echo "hello world";
    $mycounter = 1;
    $mystring = "hello world";
    $myarray = array(1, 2, 3, 4, 5);
    $userName = "Fred Smith";
    $current_user = $userName;
    echo "<br>";
    //Chislovye peremennye
    echo $current_user;
    $count = 17;
    $count = 7.5;
    //Array
    $team = array("Bill","Mick","Mary","Chris","Ann");
    echo "<br>";
    echo $team[2];

    $oxo = array(array("x"," ","o"),
                  array("o","x"," "),
                  array(" ","o","x"));
    echo "<br>";
    echo $oxo[1][1];

    echo "<br>";
    //operatory
    echo 6+2;
    $count = 0;
    $count +=1;
    echo "<br>";
    echo $count;
    $x = 10;
    $x+=10;
    if ($x < 10) echo "x less than 10";

    echo "<br>";
    if (++$x == 10) echo $x;

    $text = "My spelling\'s stiil arthous";
    $text = "She wrote upon it,\"Return to sender\". ";

    $heading = "Дата\tИмя\tДата";
    echo "<br>";
    echo $heading;
    //number
    $number = 12345 * 67890;
    echo "<br>";
    echo substr($number,3,1);
    echo "<br>";
    echo __LINE__;
    echo "<br>";
    $pi = "3.1415927";
    $radius = 5;
    echo "<br>";
    echo ($pi *($radius * $radius));
    echo "<br>";
    echo __DIR__;
    
    echo "<br>";
    $b =0;
    $b ? print "TRUE" : print "FALSE";
    echo "<br>";
    
    function longdate($timestamp){
        return date("l F jS y", $timestamp);
    }
    echo "<br>";
    $lg = longdate(5);
    echo $lg;
    ?>
