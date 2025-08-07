<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SESSION-2</title>
</head>
<body>
    <h2>Log-in Page</h2>
    <form action="index2.php" method="post">
        Username:<br>
        <input type="text" name="username"><br><br>

        Password:<br>
        <input type="password" name="password"><br><br>

        <input type="submit" name="login" value="Log-in">
    </form>
</body>
</html>
<?php
    if(isset($_POST["username"])){

        if(!empty($_POST["username"]) && 
           !empty($_POST["password"])){

            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            // echo $_SESSION["username"] . "<br>";
            // echo $_SESSION["password"] . "<br>";

            header("Location: home2.php");
        }
        else{
            echo"Either username or password is missing!"; 
        }
    }
?>
