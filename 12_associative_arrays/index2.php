<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <h1>Associative Arrays</h1>

    <form action="index2.php" method="post">
        <label>Enter a country:</label>
        <input type="text" name="country"><br>
        <input type="submit">
    </form>
    
</body>
</html>
<?php 
//  associative array   =   is an array of elements made up of  "key=>value" pairs.

// Examples of asociative arrays:
//          countries => capitals
//          id => username
//          item => price

    $capitals = array("Kenya"=>"Nairobi",
                      "Egypt"=>"Cairo", 
                      "Nigeria"=>"Lagos", 
                      "South Africa"=>"Johannesburg");

    // $capital = $_POST["country"];

    // echo $capital . "<br>";

    $capital = $capitals[$_POST["country"]];

    echo"The capital is {$capital}";
?>
