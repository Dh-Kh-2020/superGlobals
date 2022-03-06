<?php 
$x = 75;
$y = 25; 

// $GLOBALS : is a PHP super global variable which is used to access global 
            //variables from anywhere in the PHP script (also from within functions or methods).
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z.'<hr>';