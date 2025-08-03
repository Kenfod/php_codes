<?php 
//  Logical operators   =   combine conditional statements.
//        syntax        =   if(condition1 && condition2)
//                      =   if(condition1 || condition2)
//                      =   if(!condition)

// There are 3 logical operators, namely:
//  1.  &&  (AND)   =   True if BOTH conditions are correct.
//  2.  ||  (OR)    =   True if atleast ONE condition is correct.
//  3.   !  (NOT)   =   True if false. False if true.


//  2.  ||  (OR)    =   True if atleast ONE condition is correct:
    $temp = 35;
    $cloudy = true;

    if($temp < 0 || $temp > 30){
        echo "The weather is BAD!<br>";
    }
    else{
        echo "The weather is GOOD!<br>";
    }

    if($cloudy){
        echo "It's CLOUDY.";
    }
    else{
        echo "It's SUNNY.";
    }
?>
