<?php 
//  while_loop   =   is used to repeat some infinitely while some condition remains true.
//                   It has 1 statement in the syntax
//       syntax  =   while(condition).


    $counter = 0;

    //  1. Increment:

    while($counter < 10){
        $counter++;
        echo $counter . "<br>";
    }


    $counter = 0;

    //  2. Adjusted increment:
    while($counter < 10){
        $counter+=2;
        echo $counter . "<br>";
    }


    $index = 10;

    //  3. Decrement:

    while($index > 0){
        $index--;
        echo $index . "<br>";
    }


    $index = 10;

    //  2. Adjusted decrement:
    while($index > 0){
        $index-=2;
        echo $index . "<br>";
    }
    
?>
