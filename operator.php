<?php

echo "<h3>Arithmetic Operations</h3>";

$num1 = 34; $num2 = 45;

$sum = $num1 + $num2 ;
$sub = $num1 -$num2 ;
$prod = $num1 * $num2;
$div = $num2 / $num1;
$mod = $num2 % $num1;


echo "The sum of $num1 & $num2 is $sum";
echo "<br>";
echo "The diff of $num1 & $num2 is $sub";
echo "<br>";
echo "The product of $num1 & $num2 is $prod";
echo "<br>";
echo "The div of $num1 & $num2 is $div";
echo "<br>";
echo "The mod of $num1 & $num2 is $mod";

echo "<hr>";

echo "<h3>Assignment Operations</h3>";
echo "<h3>Just Print Value of a</h3>";
$a = 10;

print "$a";
echo "<br>";
echo "<h3> a+=10</h3>";
$a +=10;
print "The new value of a is $a";
echo "<br>";

echo "<h3> from up value 20*=10</h3>";
$a *=10;
print "The new value of a is $a";
echo "<br>";

echo "<h3> from up value 200-=10</h3>";
$a -=10;
print "The new value of a is $a";
echo "<br>";

echo "<h3> from up value /=2</h3>";
$a /=2;
print "The new value of a is $a";
echo "<br>";

echo "<h3>from up value %=2</h3>";
$a %=2;
print "The new value of a is $a";
echo "<br>";


echo "<hr>";

echo "<h3> Decrement/Increment Operations</h3>";

$b=50;

echo "value of b is $b";
echo "<br>";

$b++;
print "The new value of b is $b";
echo "<br>";

++$b;
print "The new value of b is $b";
echo "<br>";

$b--;
print "The new value of b is $b";
echo "<br>";

--$b;
print "The new value of b is $b";
echo "<br>";

echo "<hr>";

echo "<h3> Compare Operations</h3>";

$age =-3;

if ($age>108){
    print "You are an adult";
}else{
    print "You are a child";
}

echo "<hr>";

if ($age>18){
    print "You are an adult";
}elseif ($age>12){
    print "You are a teenager";
}else{
    print "You are a child";
}

echo "<hr>";

echo"<h3>Logical operator</h3>";

if ( $age>=18 and $age<=100 ){
    print "You are an adult";
}elseif ($age>12 and $age<18){
    print "You are a teenager";
}elseif ($age>0 and $age<=12){
    print "You are a child";
} else{
    print "No such age is allowed";
}

// create an if else php code, that grades students

$marks= 89;

/*
$salary = 100000;
BS.<= 10000, Medical Allowance -20%, House Allowance =50% , Tax - 10%
BS.<=20000, Medical Allowance -25%, House Allowance =60% , Tax - 10%
BS.<=30000, Medical Allowance -30%, House Allowance =65% , Tax - 12%
BS.>40000, Medical Allowance -40%%, House Allowance =70% , Tax - 12%
*/