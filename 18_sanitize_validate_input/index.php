<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize & Validate inputs-1</title>
</head>
<body>
    <h1>Sanitize inputs :</h1>

    <form action="index.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"><br><br>

        <label>Age: </label>
        <input type="text" name="age"><br><br>

        <label>Email: </label>
        <input type="text" name="email"><br><br>

        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>
<?php 

    // 1. TO TEST IF "LOG IN" IS SET OR CONTAINS A VALUE":
    if(isset($_POST["login"])){

        $username = filter_input(INPUT_POST, "username",
                                 FILTER_SANITIZE_SPECIAL_CHARS);  //on page view source: => Hello Hello &#60;script&#62;alert(&#34;You have a VIRUS!&#34;);&#60;script&#62;

        $age = filter_input(INPUT_POST, "age",
                                 FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST, "email",
                                 FILTER_SANITIZE_EMAIL);

        echo"Hello {$username} <br>";
        echo"You are {$age} years old <br>";
        echo"Your email is: {$email} <br>";
    }

        // // 3. TO TEST IF "username"  & "password" are empty or not:
        // if (empty($username)){
        //     echo"Please enter your username <br>";
        // }
        // elseif (empty($password)){
        //     echo"Please enter your password <br>";
        // }
        // else{
        //     echo"Hello {$username}!<br>"; 
        // }

?>
