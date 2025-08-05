<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>
<body>
    <h1>While Loop:</h1>

    <form action="index2.php" method="post">
        <input type="submit" name="stop" value="STOP">
    </form>
</body>
</html>
<?php 
//  while_loop   =   is used to repeat some infinitely while some condition remains true.
//                   It has 1 statement in the syntax
//       syntax  =   while(condition).


    $seconds = 0;
    $running = true;


    while($running){
        
        if(isset($_POST["stop"])){
            $running = false;
        }
        else{
            //wait 1 second
            $seconds++;
            echo $seconds . "<br>";
        }   
    }    
?>
