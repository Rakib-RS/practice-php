<?php
use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
/*function __autoload($classname) {
    //echo $classname . " ";
    $lastSlash = strpos($classname, '\\') + 1;
    //echo $lastSlash . "\n ";
    $classname = substr($classname, $lastSlash);
    //echo $classname ." ";
    $directory = str_replace('\\', '/', $classname);
    //echo $directory."           ";
    $filename = __DIR__ . '/src/' . $directory . '.php';
   // echo $filename;
    require_once($filename);
    
}*/// autoload
function autoloader($classname) {
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/src/' . $directory . '.php';
    require_once($filename);
}
spl_autoload_register('autoloader');
$book1 = new Book("1984", "George Orwell", 9785267006323, 12);
$customer1 = new Customer(5, 'John', 'Doe', 'johndoe@mail.com');
?>