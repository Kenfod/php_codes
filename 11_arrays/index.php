<?php 
//  array   =   is a special type of a variable which can hold more than one value at a time.
//              It's aconvenient way to store value that are related or similar instead of creating many variables.
//              It's alot easier to work with an array than several variables. 


    //  1. TO CREATE AN ARRAY:
    $foods = array("apple", "orange", "banana", "coconut");
        
    // 2. TO DISPLAY THE ARRAY ELEMENTS - using index:
    echo $foods[0] ."<br>";
    echo $foods[1] ."<br>";
    echo $foods[2] ."<br>";
    echo $foods[3] ."<br><br>";

    // 3. TO DISPLAY THE ARRAY ELEMENTS - using foreach loop:
        foreach ($foods as $food => $value) {
            echo $food ."<br>";
        }

        foreach($foods as $food){
            echo $food ."<br>";
        }

    // 4. TO CHANGE AN ELEMENT IN ARRAY:
        $foods[0] = "Sugarcane";

        foreach($foods as $food){
            echo $food ."<br>";
        }
        

    // 5. TO ADD A NEW ELEMENT AT THE END OF AN ARRAY:
        array_push($foods, "pineapple", "kiwi");

        foreach($foods as $food){
            echo $food ."<br>";
        }

    // 6. TO REMOVE THE LAST ELEMENT IN AN ARRAY:
        array_pop($foods);

        foreach($foods as $food){
            echo $food ."<br>";
        }

    // 7. TO REMOVE THE FIRST ELEMENT IN AN ARRAY:
        array_shift($foods);

        foreach($foods as $food){
            echo $food ."<br>";
        }

    // 8. TO REVERSE ORDER OF ELEMENTS IN AN ARRAY - 1:
        $reversed_foods = array_reverse($foods);

        foreach($reversed_foods as $food){
            echo $food ."<br>";
        }

    // 9. TO REVERSE ORDER OF ELEMENTS IN AN ARRAY - 2:
        $foods = array_reverse($foods);

        foreach($foods as $food){
            echo $food ."<br>";
        }

    // 10. TO COUNT THE ELEMENTS IN AN ARRAY:
        echo count($foods);
?>
