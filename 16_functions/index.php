<?php 
//  function   =   With a function you write some code once,then reuse it when you need it.
//                 To invoke or call a function, typt "()" after the function name.
// Examples of a function  =   add(), subtract(), multiply(), divide() etc.


    //1.  To create a function without parameters:

    function happy_birthday(){
        echo"Happy Birthday to you! <br>";
        echo"Happy Birthday to you! <br>";
        echo"Happy Birthday, dear name! <br>";
        echo"Happy Birthday to you! <br>";
        echo"You are x years old! <br> <br>";
    }


    // To execute the code (call or invoke it):
    happy_birthday();

    // To execute the code 2 times(call or invoke it):
    happy_birthday();
    happy_birthday();


    //2.  To create a function with 2 parameters:

    function happybirthday($firstName, $age){
        echo"Happy Birthday to you! <br>";
        echo"Happy Birthday to you! <br>";
        echo"Happy Birthday, dear {$firstName}! <br>";
        echo"Happy Birthday to you! <br>";
        echo"You are {$age} years old! <br> <br>";
    }

    //3. To invoke a function with 2 arguments, 3 times :

    happybirthday("Spongebob", 25);
    happybirthday("Patrick", 30);
    happybirthday("Squidward", 45);
    
?>
