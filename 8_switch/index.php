<?php 
//  switch   =   is a replacement to using many elseif statements.
//           =   it is more efficient and take less code to write.


//  1. elseif:

    $grade = "F";

    if($grade == "A"){
        echo"Grade: DISTINCTION";
    }
    elseif($grade == "B"){
        echo"Grade: CREDIT";
    }
    elseif($grade == "C"){
        echo"Grade: PASS";
    }
    elseif($grade == "D"){
        echo"Grade: AVERAGE";
    }
    elseif($grade == "E"){
        echo"Grade: BELOW AVERAGE";
    }
    elseif($grade == "F"){
        echo"Grade: FAIL";
    }
    else
    echo"{$grade} is NOT a valid grade!";
?>
