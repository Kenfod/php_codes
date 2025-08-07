<?php 
//  function   =   With a function you write some code once,then reuse it when you need it.
//                 To invoke or call a function, typt "()" after the function name.
// Examples of a function  =   add(), subtract(), multiply(), divide() etc.


    //1.  To create a function with 1 parameter:

    function is_even($number){
        $result = $number % 2;
        return $result;
    }

    // To execute the code (call or invoke it):
    echo is_even(11) . "<br>";


    //2.  To create a function with 1 parameter:

    function is_even2($number){
        return $number % 2;
    }

    // To execute the code (call or invoke it):
    echo is_even2(11) . "<br>";


    //3.  To create a function with 1 parameter:

    function iseven($number){
        $result = $number % 2;
        return $result;
    }

    // To execute the code (call or invoke it):
    echo iseven(10) . "<br>";


    //4.  To create a function with 1 parameter:

    function iseven2($number){
        return $number % 2;
    }

    // To execute the code (call or invoke it):
    echo iseven2(10) . "<br>";


    //5.  To create a function with 2 parameters:

    function hypotenuse($a, $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    // To execute the code (call or invoke it):
    echo hypotenuse(3, 4) . "<br>";


    //6.  To create a function by listing the datatypes of the parameters:

    function hypotenuse1(int $a, int $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    // To execute the code (call or invoke it):
    echo hypotenuse1(6, 8) . "<br>";
    
?>
