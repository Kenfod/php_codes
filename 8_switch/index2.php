<?php 
//  switch   =   is a replacement to using many elseif statements.
//           =   it is more efficient and take less code to write.


//  2. switch - 1:

    $grade = "A";

    switch($grade){
        case "A":
            echo"Grade: DISTINCTION";
            break;
    
        case "B":
            echo"Grade: CREDIT";
            break;
        case "C":
            echo"Grade: PASS";
            break;
        case "D":
            echo"Grade: AVERAGE";
            break;
        case "E":
            echo"Grade: BELOW AVERAGE";
            break;
        case "F":
            echo"Grade: FAIL";
            break;
        default:
            echo"{$grade} is NOT a valid grade!";
        }
?>
