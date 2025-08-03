<?php 
//  if statement    =   if some condition is true,perform atask/code.
//                  =   if condition is false, don't do it.

//  PAY RATE EXERCISE:

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){
        $weekly_pay = 0;
    }
    elseif($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = (($rate * 40) + ($hours - 40) * ($rate * 1.5));
    }

    echo "Your pay is \${$weekly_pay} this week";
?>
