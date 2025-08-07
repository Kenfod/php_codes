<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes-4</title>
</head>
<body>
    <h1>Checkboxes - 4: Converted into arrays</h1>

    <form action="index4.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">Pizza<br><br>
        <input type="checkbox" name="foods[]" value="Hamburger">Hamburger<br><br>
        <input type="checkbox" name="foods[]" value="Hotdog">Hotdog<br><br>
        <input type="checkbox" name="foods[]" value="Taco">Taco<br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php 

    if(isset($_POST["submit"])){

        // $payment = null;

        $foods = $_POST["foods"];

        // click ALL checkboxes then "submit":
        
        //echo $foods . "<br>";    //RETURNS => Warning: Array to string conversion in C:\xampp\htdocs\website\15_checkboxes\index4.php on line 29 Array


        // To iterate the elements in the array:

        echo $foods[0] . "<br>";
        echo $foods[1] . "<br>";
        echo $foods[2] . "<br>";
        echo $foods[3] . "<br>";


        // To loop the elements in the array using foreach():

            foreach ($foods as $food => $value) {
                echo $food . "<br>";
            }


            foreach ($foods as $food) {
                echo $food . "<br>";
            }
    }
?>
