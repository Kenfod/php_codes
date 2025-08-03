<?php
    //  arithmetic    = This topic has been divided into:
    
    //  1. Arithmetic operators
    //  2. Increment/Decerement operators
    //  3. Operator Precedence


    //  1. Arithmetic operators
    //  + - * / ** %

    $x = 15;
    $y = 2;
    $z = null;

    //  a. Addition:
    $z = $x + $y;
    echo $z  . "<br>";
    

    //  b. Subtraction:
    $z = $x - $y;
    echo $z . "<br>";

    //  c. Multiplication:
    $z = $x * $y;
    echo $z . "<br>";

    //  d. Division:
    $z = $x / $y;
    echo $z . "<br>";

    //  e. Exponent:
    $z = $x ** $y;
    echo $z . "<br>";

    //  f. Modulus:
    $z = $x % $y;
    echo $z . "<br> <br>";
    
    
    //  2. Increment/Decerement operators
    //  ++ --

    $counter = 15;

    // a. Increment:
    $counter = $counter + 1;
    echo $counter . "<br>";

    // short form:
    $counter++;
    echo $counter . "<br>";

    // increment by certain value:
    $counter+=3;
    echo $counter . "<br>";


    // b. Decrement:
    $counter = $counter - 1;
    echo $counter . "<br>";

    // short form:
    $counter--;
    echo $counter . "<br>";

    // decrement by certain value:
    $counter-=3;
    echo $counter . "<br> <br>";


    //  3. Operator Precedence:
    //  1.  ()      -    parenthesis
    //  2.  **      -    exponent
    //  3.  * / %   -    multiplication / division / modulus
    //  4.  + -     -    addition / subtraction

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo $total;   
?>
