<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions-1</title>
</head>
<body>
    <h1>Math Functions - 1:</h1>

    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br><br>

        <label>y:</label>
        <input type="text" name="y"><br><br>

        <label>z:</label>
        <input type="text" name="z"><br><br>

        <input type="submit" value="Calculate"><br><br>
    </form>
    
</body>
</html>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

echo $x . "<br>";
echo $y . "<br>";
echo $z . "<br>";

// 1. Absolute function:
$total = abs($x);
echo $total . "<br>";

// 2. Round function:
$total = round($x);
echo $total . "<br>";

// 3. Floor function:
$total = floor($x);
echo $total . "<br>";

// 4. Ceil function:
$total = ceil($x);
echo $total . "<br>";

// 5. Square root function:
$total = sqrt($x);
echo $total . "<br>";

// 6. Power function:
$total = pow($x, $y);
echo $total . "<br>";

// 7. Max function:
$total = max($x, $y, $z);
echo $total . "<br>";

// 8. Min function:
$total = min($x, $y, $z);
echo $total . "<br>";

// 9. Pi function:
$total = pi();
echo $total . "<br>";

// 10. Random function:
$total = rand();
echo $total . "<br>";

// 10. Random function - with minimum and maximum values:
$total = rand(1, 6);
echo $total . "<br>";

?>
