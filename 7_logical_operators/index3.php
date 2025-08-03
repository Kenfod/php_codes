<?php 
//  Logical operators   =   combine conditional statements.
//        syntax        =   if(condition1 && condition2)
//                      =   if(condition1 || condition2)
//                      =   if(!condition)

// There are 3 logical operators, namely:
//  1.  &&  (AND)   =   True if BOTH conditions are correct.
//  2.  ||  (OR)    =   True if atleast ONE condition is correct.
//  3.   !  (NOT)   =   True if false. False if true.


//  3.   !  (NOT)   =   True if false. False if true:
    $temp = 15;
    $cloudy = false;

    if($temp < 0 || $temp > 30){
        echo "The weather is BAD!<br>";
    }
    else{
        echo "The weather is GOOD!<br>";
    }

    if(!$cloudy){
        echo "It's SUNNY.";
    }
    else{
        echo "It's CLOUDY.";
    }
?>
