<?php
header('Content-type: text/plain');
    $firstName = 'david';
    $lastName = 'john';
    echo 'hi ' . $firstName . ' '. $lastName . '!';
    /* The difference is that within single quotes, a string is exactly as it is
represented, but within double quotes, some rules are applied before showing the
final result. There are two elements that double quotes treat differently than single
quotes: escape characters and variable expansions. */
$firstname = 'Hiro';
$surname = 'Nakamura';
echo "My name is $firstname $surname.\nI am a master of time and space. \"huuuuh!\"";

?>