<?php
    function value($a){
        $a = 2*$a;
    }
    function ref(&$a){
        $a = 2 * $a;
    }
    $a = 5;
    print_r($a. " ");
    value($a);//call by value
    print_r($a . " ");
    ref($a);// call by reference
    print_r($a);

?>