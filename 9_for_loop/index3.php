<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop-2</title>
</head>
<body>
    <h1>For Loop - 2: Decrement</h1>

    <form action="index3.php" method="post">
        <label>Enter a number to count down from:</label>
        <input type="text" name="counter"><br>
        <input type="submit" value="START"><br>
    </form>
</body>
</html>
<?php 
//  for_loop   =   is used to repeat acode a certain number of times.
//                 it has 3 statements in the syntax.
//     syntax  =   for(counter or variable declaration; condition to be met; counter decrement or increment).


    //  1.Decrement:

    $counter = $_POST["counter"];

    for($i = $counter; $i > 0; $i--){
        echo $i . "<br>";
    }


    //  2.Adjusted decrement value:
    for($i = $counter; $i > 0; $i-=3){
        echo $i . "<br>";
    }

?>
