<?php 
//  associative array   =   is an array of elements made up of  "key=>value" pairs.

// Examples of asociative arrays:
//          countries => capitals
//          id => username
//          item => price

//  1. NORMAL ARRAY:

    $capitals = array("Kenya", "Egypt", "Nigeria", "South Africa");

//  2. CONVERT A NORMAL ARRAY TO AN ASSOCIATIVE ARRAY:

    $capitals = array("Kenya"=>"Nairobi",
                      "Egypt"=>"Cairo", 
                      "Nigeria"=>"Lagos", 
                      "South Africa"=>"Johannesburg");

        
    // 3. TO DISPLAY THE VALUES OF THE ASSOCIATIVE ARRAYS ELEMENTS - using keys:
    echo $capitals["Kenya"] ."<br>";
    echo $capitals["Egypt"] ."<br>";
    echo $capitals["Nigeria"] ."<br>";
    echo $capitals["South Africa"] ."<br><br>";

    
    // 4. TO DISPLAY THE KEY-VALUE PAIRS OF THE ASSOCIATIVE ARRAYS - using foreach loop:
        foreach ($capitals as $key => $value){
            echo "{$key} = {$value} .<br>";
        }


    // 5. TO CHANGE A VALUE OF A KEY ELEMENT:
        $capitals["Nigeria"] = "Abuja";

        foreach($capitals as $key => $value){
            echo "{$key} = {$value} .<br>";
        }
        

    // 5. TO ADD A NEW "KEY=>VALUE" PAIR:
        $capitals["Uganda"] = "Kampala";

        foreach($capitals as $key => $value){
            echo "{$key} = {$value} .<br>";
        }


    // 6. TO REMOVE THE LAST "KEY=>VALUE" PAIR:
        array_pop($capitals);

        foreach($capitals as $key => $value){
            echo "{$key} = {$value} .<br>";
        }


    // 7. TO REMOVE THE FIRST ELEMENT IN AN ARRAY:
        array_shift($capitals);

        foreach($capitals as $key => $value){
            echo "{$key} = {$value} .<br>";
        }


    // 8. TO DISPLAY "KEYS" ONLY:
        $keys = array_keys($capitals);

        foreach($keys as $key){
            echo "{$key} .<br>";
        }


    // 9. TO DISPLAY "VALUES" ONLY:
        $values = array_values($capitals);

        foreach($values as $value){
            echo "{$value} .<br>";
        }


    // 10. TO FLIP(SWITCH) THE KEYS TO VALUES  AND VICE VERSA:
        $capitals = array_flip($capitals);

        foreach($capitals as $key => $value){
            echo "{$key} = {$value} .<br>";
        }


    // 11. TO REVERSE ORDER OF THE "KEY=>VALUE" PAIRS - 1:
        $reversed_capitals = array_reverse($capitals);

        foreach($capitals as $key => $value){
            echo "{$key} = {$value} .<br>";
        }


    // 12. TO REVERSE ORDER OF THE "KEY=>VALUE" PAIRS - 2:
        $capitals = array_reverse($capitals);

        foreach($capitals as $key => $value){
            echo "{$key} = {$value} .<br>";
        }


    // 13. TO COUNT THE ELEMENTS IN AN ARRAY:
        echo count($capitals);
?>
