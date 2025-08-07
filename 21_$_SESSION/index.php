<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SESSION-1</title>
</head>
<body>
    <h2>Log-in Page</h2>
    <a href="home.php">Click HERE to visit Home Page</a><br>
</body>
</html>
<?php
    $_SESSION["username"] = "Kinter";
    $_SESSION["password"] = "12344566";

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";


    // session  = is a super global variable that is used to store information on a user to be used across multiple pages.
    //            Once a session is created, a user is assigned a session-id e.g. log-in credentials.
?>
