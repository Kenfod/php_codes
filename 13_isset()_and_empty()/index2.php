<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset() & empty()</title>
</head>
<body>
    <h1>isset() & empty() :</h1>

    <form action="index2.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"><br><br>

        <label>Password: </label>
        <input type="password" name="password"><br><br>

        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>
<?php 
//  isset() & empty()   =   are 2 useful php functions which are used to determine if HTML elements are filled or otherwise interacted with.

//  isset() =   Returns TRUE if a variable is:
//              i - Declared, and
//             ii - NOT null.

//  empty() =   Returns TRUE if a variable is:
//              i - NOT declared,
//             ii - false,
//            iii - null, and
//             iv - "" (empty).

    // 1. TO LIST THE POST SUPER-GLOBAL VARIABLE (which is, technically, an associative arrays key=>value"):
    //  PRESS "Log In" BUTTON to iterate all the elements of the above array.

    /*
    foreach($_POST as $key => $value){
        echo"{$key} = {$value} <br>";
    }
    */

    // 2. TO TEST IF "LOG IN" IS SET OR CONTAINS A VALUE":
    if(isset($_POST["login"])){
        // echo"You tried to log in...!<br>";

        $username = $_POST["username"];
        $password = $_POST["password"];
    }

        // 3. TO TEST IF "username"  & "password" are empty or not:
        if (empty($username)){
            echo"Please enter your username <br>";
        }
        elseif (empty($password)){
            echo"Please enter your password <br>";
        }
        else{
            echo"Hello {$username}!<br>"; 
        }

?>
