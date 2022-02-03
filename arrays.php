<?php

echo "<h3>Indexed Array</h3>";

$language= array("Javascript","Ruby","PHP","R");

print_r($language);

echo "<br>";

foreach ($language as $value){
    echo "$value <br>";
}

#sorting in ascending order
sort($language);
echo"<h3>This is in ascending order</h3>";
print_r($language);


echo "<br>";

#sorting in descending order
rsort($language);
echo"<h3>This is in descending order</h3>";
print_r($language);

echo "<br>";
echo "<hr>";

echo "<h3>Associative Array</h3>";


$marks = array("Peter"=>34, "Jane"=>67, "Henry"=>87 ,"Lucy"=>45);
echo "<br>";

print_r($marks);

echo"<h3>This is foreach loop</h3>";

foreach ($marks as $key => $value){
    echo "Your marks $key is $value <br>";
}

#sorting in ascending order by value
asort($marks);
print_r($marks);


echo "<br>";

#sorting in descending order value
arsort($marks);
print_r($marks);

echo "<br>";


#sorting in ascending order by key
ksort($marks);
print_r($marks);


echo "<br>";

#sorting in descending order value
krsort($marks);
print_r($marks);

echo "<br>";


echo "<hr>";

echo "<h3>Multidimensional Array</h3>";


$contants = array(

    array(
        "name"=> "Mary Jane",
        "email" => "jane@gmail.com",
        "pnumber" => "07352526262",
    ),

    array(
        "name"=> "Kelvin G",
        "email" => "kelvin@gmail.com",
        "pnumber" => "0799848383",
    ),
    array(
        "name"=> "Grace H",
        "email" => "grace@mail.com",
        "pnumber" => "0796940322",
    )


);


echo "Email address for Grace is ".$contants[2]["email"];

#print all the values (foreach/for)