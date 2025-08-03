<?php 
//  Logical operators   =   combine conditional statements.
//        syntax        =   if(condition1 && condition2)
//                      =   if(condition1 || condition2)
//                      =   if(!condition)

// There are 3 logical operators, namely:
//  1.  &&  (AND)   =   True if BOTH conditions are correct.
//  2.  ||  (OR)    =   True if atleast ONE condition is correct.
//  3.   !  (NOT)   =   True if false. False if true.


//  MOVIE TICKET EXERCISE - 3:

    $child = false;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }
    echo"The ticket price is \${$ticket}";
?>
