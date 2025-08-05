<?php 
//  switch   =   is a replacement to using many elseif statements.
//           =   it is more efficient and take less code to write.


//  2. switch - 2:

    $date = date("l");

    // $date = "Jan"; 

    switch($date){
        case "Monday":
            echo"I hate moody Mondays!";
            break;
    
        case "Tuesday":
            echo"It's Taco Tuesday";
            break;
        case "Wednesday":
            echo"It's mid-week!";
            break;
        case "Thursday":
            echo"It's Thors Day!";
            break;
        case "Friday":
            echo"Thank God it's Friday!";
            break;
        case "Saturday":
            echo"Weekend is Here, Let's party!";
            break;
        case "Sunday":
            echo"It's a resting day!";
            break;
        default:
            echo"{$date} is NOT a day of the week!";
        }
?>
