<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons-3</title>
</head>
<body>
    <h1>Radio Buttons - 3: Using "switch"</h1>

    <form action="index3.php" method="post">
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

        switch ($payment) {
            case 'VISA':
                echo"You selected VISA";
                break;
            case 'MasterCard':
                echo"You selected MasterCard";
                break;
            case 'American Express':
                echo"You selected American Express";
                break;
            case 'Mpesa':
                echo"You selected Mpesa";
                break;
            default:
                echo"Please select your payment mode!!";
                break;
        }
    }
?>
