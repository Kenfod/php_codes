<?php
    // cookie   =   Information about a user stored in a user's web browser
    //              That's why a user may receive targeted advertisements, browsing preferences and other non-sensitive data.
    //              A cookie is an associative array.
    //              Press "F12" key to view cookies.


    // 1. To set up a cookie:
    setcookie("fav_food", "Biriani", time() + (86400 * 2), "/");
    setcookie("fav_beer", "Pilsner", time() + (86400 * 3), "/");
    setcookie("fav_car", "Peugeot", time() + (86400 * 4), "/");


    // 2. To DELETE a cookie:
    // setcookie("fav_food", "Biriani", time() -0, "/");
    // setcookie("fav_beer", "Pilsner", time() -0, "/");
    // setcookie("fav_car", "Peugeot", time() -0, "/");


    // 3.To PRINT each key=>value pair using foreach loop:
        foreach($_COOKIE as $key => $value){
            echo"{$key} = {$value} <br>";
        }


    // 4.To access the value:
    if(isset($_COOKIE["fav_food"])){
        echo"BUY SOME {$_COOKIE["fav_food"]}!!! <br>";
    }
    else{
        echo"I don't know your favourite food <br>";
    }


    // 4.To access a value that is not set:
    setcookie("fav_beer", "Pilsner", time() -0, "/");

    if(isset($_COOKIE["fav_beer"])){
        echo"BUY SOME {$_COOKIE["fav_beer"]}!!! <br>";
    }
    else{
        echo"I don't know your favourite beer <br>";
    }

    setcookie("fav_beer", "Pilsner", time() + (86400 * 3), "/");
?>
