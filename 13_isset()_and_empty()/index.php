<?php 
//  isset() & empty()   =   are 2 useful php functions which are used to determine if HTML elements are filled or otherwise interacted with.

//  isset() =   Returns TRUE if a variable is:
//              i - Declared, and
//             ii - NOT null.

//  empty() =   Returns TRUE if a variable is:
//              i - NOT declared,
//             ii - false,
//            iii - null, and
//             iv - "" (empty).

//  A.  isset()  :

//  1. When a variable is DECLARED:

$username = "Kay";

echo isset($username) . "<br>"; // Returns "1" if true and nothing is displayed if false.

If(isset($username)){
    echo"This variable is SET" . "<br>";
}
else{
    echo"This variable NOT set" . "<br>";
}


//  2. When a variable is NULL:

$username = null;

echo isset($username) . "<br>"; // Nothing is displayed.

If(isset($username)){
    echo"This variable is SET" . "<br>";
}
else{
    echo"This variable NOT set" . "<br>";
}


//  3. When a variable is NOT DECLARED:

// $username = "Kay";

If(isset($username)){
    echo"This variable is SET" . "<br>";
}
else{
    echo"This variable NOT set" . "<br>";
}


//  4. When a variable is a Boolean- true:

$username = true;

If(isset($username)){
    echo"This variable is SET" . "<br>";
}
else{
    echo"This variable NOT set" . "<br>";
}


//  5. When a variable is a Boolean- false:

$username = false;

If(isset($username)){
    echo"This variable is SET" . "<br>";
}
else{
    echo"This variable NOT set" . "<br>";
}


//  6. When a variable is an empty string - "":

$username = "";

If(isset($username)){
    echo"This variable is SET" . "<br>";
}
else{
    echo"This variable NOT set" . "<br>";
}


//  B.  empty()  :

//  1. When a variable is DECLARED:

$username = "Kay";

echo empty($username) . "<br>"; // Returns "1" if true and nothing is displayed if false.

If(empty($username)){
    echo"This variable is EMPTY" . "<br>";
}
else{
    echo"This variable NOT empty" . "<br>";
}


//  2. When a variable is NULL:

$username = null;

echo empty($username) . "<br>"; // Returns "1" if true.

If(empty($username)){
    echo"This variable is EMPTY" . "<br>";
}
else{
    echo"This variable NOT empty" . "<br>";
}


//  3. When a variable is NOT DECLARED:

// $username = "Kay";

If(empty($username)){
    echo"This variable is EMPTY" . "<br>";
}
else{
    echo"This variable NOT empty" . "<br>";
}


//  4. When a variable is a Boolean- true:

$username = true;

If(empty($username)){
    echo"This variable is EMPTY" . "<br>";
}
else{
    echo"This variable NOT empty" . "<br>";
}


//  5. When a variable is a Boolean- false:

$username = false;

If(empty($username)){
    echo"This variable is EMPTY" . "<br>";
}
else{
    echo"This variable NOT empty" . "<br>";
}


//  6. When a variable is an empty string - "":

$username = "";

If(empty($username)){
    echo"This variable is EMPTY" . "<br>";
}
else{
    echo"This variable NOT empty" . "<br>";
}

?>
