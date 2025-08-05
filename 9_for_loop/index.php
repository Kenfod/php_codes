<?php 
//  for_loop   =   is used to repeat acode a certain number of times.
//                 It has 3 statements in the syntax
//     syntax  =   for(counter or variable declaration; condition to be met; counter decrement or increment).


    //  1.Display message:
    for($i = 0; $i < 5; $i++){
        echo"Hello <br>";
    }


    //  2.Display index:
    for($i = 0; $i < 5; $i++){
        echo $i . "<br>";
    }


    //  3.Display index- adjusted index:
    for($i = 1; $i <= 5; $i++){
        echo $i . "<br>";
    }


    //  4.Display index- adjusted increment value:
    for($i = 2; $i <= 10; $i+=2){
        echo $i . "<br>";
    }


    //  5.Display index- Decrement:
    for($x = 10; $x > 0; $x--){
        echo $x . "<br>";
    }


    //  6.Display index- adjusted deccrement value:
    for($x = 10; $x > 0; $x-=2){
        echo $x . "<br>";
    }
?>
