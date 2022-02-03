<?php

// <?php and shoud end in
#2. Every php statement ends in a semi-colon


/* Variable
store data.
Naming Conventions
- variable.
- a variable is declares with a dollar sign
- name must start with a letter or an _
- Cannot start a number
-Contain alphanumeric(a-z)(A-Z) , 0-9 , _
-cannot contain spaces
*/


$username = "";
$_userName="Mariam";
$user_name="Abdalla";
$username2="Ali";
$firstName="Ummu";


echo "<h3>Introduction to PHP </h3>";

#INTEGER

$a = 3453;

var_dump($a);
echo "<br>";


$b = -90;
var_dump($b);

#Floting Point

echo "<br>";
$c = 1.45890;
var_dump($c);

echo "<br>";
$d=10.2e3;
var_dump($d);

echo "<br>";

#var_dump just to tell you the details of the variable

#BOOLEAN

$e=true;
var_dump($e);

echo "<br>";
$f=false;
var_dump($f);

echo "<br>";


#ARRAYS
$colors = array("Red","Green","Yellow");
var_dump($colors);


echo "<br>";
#STRINGS

$grade = 'A';
var_dump($grade);
echo "<br>";


echo "<br>";

$sentensi = "The quick brown fox jumped over the lazy dog";

var_dump($sentensi);
echo "<br>";

// length of string
echo  strlen($sentensi);
echo "<br>";

//number of words
echo str_word_count($sentensi);
echo "<br>";

//reversing a string
echo strrev($sentensi);
echo "<br>";

echo strrev($firstName);
echo "<br>";