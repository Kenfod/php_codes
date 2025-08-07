<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize & Validate inputs-2</title>
</head>
<body>
    <h1>Validate inputs :</h1>

    <form action="index2.php" method="post">
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

        echo"Hello {$username} <br>";
        

        $age = filter_input(INPUT_POST, "age",
                                 FILTER_VALIDATE_INT);

        if(empty($age)){
            echo"That number is NOT valid!! <br>";
        }
        else {
            echo"You are $age years old <br>";
        }


        $email = filter_input(INPUT_POST, "email",
                                 FILTER_SANITIZE_EMAIL);

        if(empty($email)){
            echo"That email is NOT valid!! <br>";
        }
        else {
            echo"Your email is: $email <br>";
        }
    }
?>
