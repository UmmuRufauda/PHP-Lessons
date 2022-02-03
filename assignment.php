<?php

// create an if else php code, that grades students

$marks= 89;


if ( $marks>=80 && $marks<=100 ){
    print "You are excellent got an A";
}elseif ($marks>60 && $marks<80){
    print "You are at passed got a B";
    }elseif ($marks>50 && $marks<=39){
    print "You Average got a C ";
}elseif ($marks>0 && $marks<=39){
    print "You failed got a D";
} else{
    print "No such marks exists";

}

/*
$salary = 100000;
BS.<= 10000, Medical Allowance -20%, House Allowance =50% , Tax - 10%
BS.<=20000, Medical Allowance -25%, House Allowance =60% , Tax - 10%
BS.<=30000, Medical Allowance -30%, House Allowance =65% , Tax - 12%
BS.>40000, Medical Allowance -40%%, House Allowance =70% , Tax - 12%
*/
$marks=90;

echo"<hr>";

$salary = 1000;
if($salary<=10000 && $salary<=20000){
$netSalary = $salary + (0.2 +0.5) - 0.1*$salary;
print"your salary is $netSalary";
}
elseif($salary<=20000 && $salary<=30000){
$netSalary = $salary + (0.25 +0.6) - 0.1*$salary;
print"your salary is $netSalary";
}
elseif($salary<=20000 && $salary<=30000){
$netSalary = $salary + (0.3 +0.65) - 0.12*$salary;
print"your salary is $netSalary";
}
elseif($salary<=20000 && $salary<=30000){
$netSalary = $salary + (0.4 +0.7) - 0.12*$salary;
print"your salary is $netSalary";
}
else{
    print"You Are the not calculated one";

}

echo"<hr>";

# using php , a loop prints even numbers between 0-50
# using php , a loop prints odd numbers between 0-50
#print this pattern using a loop
/*
*
**
***
****
*****
******
*******
 */

echo"<h4> The Even numbers</h4>";
$d=0;
 
for ($d=2;$d<=50; $d+=2){
    echo "The value of d is $d <br>";
}

echo"<h4> The odd numbers</h4>";
$d=1;
 
for ($d=1;$d<=50; $d+=2){
    echo "The value of d is $d <br>";
}


echo"<h4> The Pattern</h4>";
$e=7;
$i=0;
$j=0;
for($i=0;$i<$e;$i++)
{
    for($j=0;$j<=$i;$j++){
        echo"*";
    }
    echo"<br>";
}
 

#print all the values (foreach/for)

echo"<h3>Array and foreach</h3>";



$details = array(

    array(
        "name"=> "Maryam",
        "email" => "maryam@gmail.com",
        "pnumber" => "07356786262",
    ),

    array(
        "name"=> "Rufaidah",
        "email" => "rufaidah@gmail.com",
        "pnumber" => "0745821383",
    ),
    array(
        "name"=> "Latifa",
        "email" => "latifa@mail.com",
        "pnumber" => "07998763322",
    )


);

echo "Email address for Maryam is ".$deatils[0]["email"];
echo "Email address for Rufaidah is ".$deatils[1]["email"];
echo "Email address for Latifa is ".$deatils[2]["email"];

/*foreach ($details as $key => $value){
    echo "Your details are $key is $value <br>";
}*/