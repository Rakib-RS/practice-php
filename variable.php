<?php
    $number = 123;
    //echo $number;
    //var_dump($number);
    $number = 'abc';
    var_dump($number);//type juggling
    $a = "ahj12";
    $b = 5;
    var_dump($a+$b);//17
    var_dump($a.$b);
    var_dump(1<=>2);//-1;
    var_dump(2<=>1) ;//1;
    var_dump(1<=>1) ;//0
    $c = 3;
    $d = '3';
    var_dump($c==$d);//true;
    var_dump($c===$d);//false;
    var_dump($c!=$d);//false;
    var_dump(c!==$d);//true
?>