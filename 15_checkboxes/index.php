<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes-1</title>
</head>
<body>
    <h1>Checkboxes - 1: Using isset()</h1>

    <form action="index.php" method="post">
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

        if(isset($_POST["pizza"])){
            echo"You like pizza! <br>";
        }
        if(isset($_POST["hamburger"])){
            echo"You like hamburger! <br>";
        }
        if(isset($_POST["hotdog"])){
            echo"You like hotdog! <br>";
        }
        if(isset($_POST["taco"])){
            echo"You like tacos! <br>";
        }
    }
?>
