<?php
    //  variable    = is a container that holds data.
    //                That container is given a variable name.
    //  Data types include and is not limited to:
    
    //  1. Strings
    //  2. Integers
    //  3. Floats
    //  4. Booleans


    //  1. Strings- series of texts:

    //  To declare a variable use a "$" before a variable name:
        
    $name = "Kay Enterprises <br><br>";
    echo $name;

    // String Literal
    echo"Hello {$name}!<br><br>";

    $food = "Biriani";
    echo"You love {$food} <br>";

    $email = "kay123@gmail.com";
    echo"Your email is  {$email} <br> <br>";


    //  2. Integers- Whole numbers:

    $age = 50;
    echo"You are {$age} years old!<br>";

    $users = 3;
    echo"There are {$users} users online<br>";

    $quantity = 5;
    echo"You would like to buy {$quantity} items<br><br>";


    //  3. Floats - number with decimal points:

    $gpa = 2.5;
    echo"You gpa is {$gpa}<br>";

    $price = 3.95;
    echo"Your biriani is \${$price}<br>";

    $tax_rate= 1.5;
    echo"The excise duty on computer components is {$tax_rate}%<br><br>";


    //  4. Booleans - are either true or false:

    $employed = true;
    echo"Employed: {$employed} <br>";

    $online = false;
    echo"Online status: {$online}<br>";

    $tax = true;
    echo"Taxable: {$tax}<br><br>";

    //  Example of mixed variable usage:

    $total = null;

    echo"You have ordered {$quantity} plates of {$food}<br>";
    $total = $quantity * $price;
    echo"Your bill is: \${$total}";
?>
