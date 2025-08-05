<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons-1</title>
</head>
<body>
    <h1>Radio Buttons - 1:</h1>

    <form action="index.php" method="post">
        <input type="radio" name="payment" value="VISA">VISA<br><br>
        <input type="radio" name="payment" value="MasterCard">MasterCard<br><br>
        <input type="radio" name="payment" value="American Express">American Express<br><br>
        <input type="radio" name="payment" value="Mpesa">Mpesa<br><br>
        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>
</html>
<?php 

    if(isset($_POST["confirm"])){

        if(isset($_POST["payment"])){
            $payment = $_POST["payment"];
        echo"$payment <br>";
        }
        else {
            echo"Please select your payment mode!!";
        }    
    }
?>
