<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons-2</title>
</head>
<body>
    <h1>Radio Buttons - 2: Using "if-statement"</h1>

    <form action="index2.php" method="post">
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

        $payment = null;

        if(isset($_POST["payment"])){
            $payment = $_POST["payment"];
        }

        if($payment == "VISA"){
            echo"You selected VISA";
        }
        elseif($payment == "MasterCard"){
            echo"You selected MasterCard";
        }
        elseif($payment == "American Express"){
            echo"You selected American Express";
        }
        elseif($payment == "Mpesa"){
            echo"You selected Mpesa";
        }
        else{
            echo"Please select your payment mode!!";
        }    
    }
?>
