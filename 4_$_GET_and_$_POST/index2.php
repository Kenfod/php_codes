<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <h1>1. $_GET variable</h1>

    <form action="index2.php" method="get">
        <label>Username:</label><br>
        <input type="text" name="username"><br>

        <label>Password:</label><br>
        <input type="text" name="password"><br>

        <input type="submit" value="Log in">
    </form>
    
</body>
</html>
<?php
echo"{$_GET["username"]} <br>";
echo"{$_GET["password"]} <br>";
?>
