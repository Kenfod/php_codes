<?php 
//  Logical operators   =   combine conditional statements.
//        syntax        =   if(condition1 && condition2)
//                      =   if(condition1 || condition2)
//                      =   if(!condition)

// There are 3 logical operators, namely:
//  1.  &&  (AND)   =   True if BOTH conditions are correct.
//  2.  ||  (OR)    =   True if atleast ONE condition is correct.
//  3.   !  (NOT)   =   True if false. False if true.


//  ELECTION ELIGIBILITY EXERCISE - 1:

    $age = 18;
    $citizen = false;

    if($age >= 18 && $citizen){
        echo "You are ELIGIBLE to vote!<br>";
    }
    else{
        echo "You are NOT ELIGIBLE to vote!<br>";
    }

?>
