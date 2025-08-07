<?php 
//  string functions:

    $username = "Kay The Don";

    //1. strtolower() :

    $username1 = strtolower($username);
    echo $username1 . "<br>";


    //2. strtoupper() :

    $username2 = strtoupper($username);
    echo $username2 . "<br>";


    //3. trim() :

    $userName5 = "     Kay    The    Don     ";

    $username2 = trim($userName5);
    echo $username2 . "<br>";


    //4. str_pad() :

    $username3 = str_pad($username,20, "*");
    echo $username3 . "<br>";


    //5. str_replace() :

    $phone = "123-456-7890";

    $phone1 = str_replace("-", "*",$phone);
    echo $phone1 . "<br>";


    //6. strrev() :

    $username1 = strrev($username);
    echo $username1 . "<br>";


    //7. str_shuffle() :

    $username1 = str_shuffle($username);
    echo $username1 . "<br>";


    //8. strcmp() :

    $equals = strcmp($username, "Kay The Don");
    echo $equals . "<br>";     //returns "0" if TRUE => EQUAL

    $equals = strcmp($username, "Kay");
    echo $equals . "<br>";     //returns "1" if FALSE => NOT equal

    $equals = strcmp($username, "Kay TheDon");
    echo $equals . "<br>";     //returns "-1" if FALSE => missing a space ""


    //9. strlen() :

    $count = strlen($username);
    echo $count . "<br>";

    $count = strlen($phone);
    echo $count . "<br>";


    //10. strpos() :

    $count = strpos($username," ");
    echo $count . "<br>";

    $count = strpos($phone,"-");
    echo $count . "<br>";


    //11. substr() :

    $firstName = substr($username, 0, 3);
    echo $firstName . "<br>";

    $firstName = substr($username, 4, 3);
    echo $firstName . "<br>";

    $lastName = substr($username, 8);
    echo $lastName . "<br>";


    //12. explode() :

    $fullName = explode(" ", $username);
    echo $fullName . "<br>";    //Warning: Array to string conversion C:\xampp\htdocs\website\17_string_functions\index.php on line 97  Array

    //To iterate the elemnets in the array using foreach() :
        foreach($fullName as $name){
            echo $name . "<br>";
        }

    //13. explode() :

    $username9 = array("Kay", "The", "Don");

    $fullName = implode("-", $username9);
    echo $fullName . "<br>";
 
?>
