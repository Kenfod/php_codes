<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POST-2</title>
</head>
<body>
    <h1>3. $_POST Exercise:</h1>

    <form action="index4.php" method="post">
        <label>Quantity:</label>
        <input type="text" name="quantity"><br><br>

        <input type="submit" value="Total"><br><br>
    </form>
    
</body>
</html>
<?php
$item = "keyboard";
$price = 4.50;
$quantity = $_POST["quantity"];
$total = null;

$total = $quantity * $price;

echo"You have ordered {$quantity} unit(s) of {$item}/s <br>";
echo"Your bill is: \${$total} <br>";
?>
