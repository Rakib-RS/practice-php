<?php 

$names = ['Rohim','karim','john'];//list or odered key map
$namme1 = array('abc','cde','def');
// var_dump($names);
// var_dump($namme1);
$names2 =[
    'firstname'=>'john',
    'lastname' => 'Doe'
];
// var_dump($names2);


//contains two arrays map
$books = [
   '1984' =>[
       'writter'=>'karim',
       'year' => '2016',
       'rating' =>9.6
   ],
   'the jungle' => [
       'writer' => 'David',
       'year' => 2017,
       'rating' => 8.0
   ]
];
/**print_r . It does something similar to var_
dump , just without the type and size of each value. */
// print_r($books['1984']);


$names = ['Harry', 'Ron', 'Hermione'];
$status = [
'name' => 'James Potter',
'status' => 'dead'
];
$names[] = 'Neville';
$status['age'] = 32;
// print_r($names);
// print_r($status);

$status = [
'name' => 'James Potter',
'status' => 'dead'
];
unset($status['status']);
// print_r ($status);
//The new $status array contains the key name only.



//accessing arrays
$names = ['rahim','karim','dulal'];
$names['name'] = 'abc';
$names[8] = 'eight';
$names[] = 'nine';
// print_r($names);



//empty and isset function

$string = '';
$array = [];
$names = ['Harry', 'Ron', 'Hermione'];
// var_dump(empty($string)); // true
// var_dump(empty($array)); // true
// var_dump(empty($names)); // false
// var_dump(isset($names[2])); // true
// var_dump(isset($names[3])); // false


//searching for element in an array
$string = '';
$array = [];
$names = ['Harry', 'Ron', 'Hermione'];
// var_dump(empty($string)); // true
// var_dump(empty($array)); // true
// var_dump(empty($names)); // false
// var_dump(isset($names[2])); // true
// var_dump(isset($names[3])); // false


//sorting

$properties = [
    'firstname' => 'Tom',
    'surname' => 'Riddle',
    'house' => 'Slytherin'
    ];
    $properties1 = $properties2 = $properties3 = $properties;
    sort($properties1);
   print_r($properties1);//[0]=riddle,[1]=sly.. ,[2]=tom
    asort($properties3);
   print_r($properties3);//[surname] = riddle,[house] = sly.. ,[firstname] = 'tom'
    ksort($properties2);
   print_r($properties2);//[firstname] = Tom,[house] = Sly.. ,[surname] = riddle
?>