<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes-2</title>
</head>
<body>
    <h1>Checkboxes - 2: Using empty()</h1>

    <form action="index2.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br><br>
        <input type="checkbox" name="hamburger" value="Hamburger">Hamburger<br><br>
        <input type="checkbox" name="hotdog" value="Hotdog">Hotdog<br><br>
        <input type="checkbox" name="taco" value="Taco">Taco<br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php 

    if(isset($_POST["submit"])){

        // $payment = null;

        if(empty($_POST["pizza"])){
            echo"You DON'T like pizza! <br>";
        }
        if(empty($_POST["hamburger"])){
            echo"You DON'T like hamburger! <br>";
        }
        if(empty($_POST["hotdog"])){
            echo"You DON'T like hotdog! <br>";
        }
        if(empty($_POST["taco"])){
            echo"You DON'T like tacos! <br>";
        }
    }
?>
