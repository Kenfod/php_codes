<?php 
//  if statement    =   if some condition is true,perform atask/code.
//                  =   if condition is false, don't do it.

    $age = 101;

    if($age >= 100){
        echo "You are too old to visit this site!";
    }
    elseif($age >= 18){
        echo "You may visit this site!";
    }
    elseif($age <= 0){
        echo "That is not a valid age!";
    }
    else{
        echo "You MUST be 18+ to visit this site!";
    }
?>
