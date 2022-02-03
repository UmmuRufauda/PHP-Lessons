<?php


$day= "Mon";

switch ($day){

    case "Mon":
        echo "Today is Monday, Read a book";
        break;
    case "Tue":
        echo  "Today is Tuesday, Learn Javascript";
        break;
    case "Wed":
        echo "Today is wednesday, Learn PHP";
        break;
    case "Thur":
        echo  "Today is Thursday, Go swimming";
        break;
    default:
        echo "Rest, its the weekend";
        break;
}


echo  "<h3>Loops </h3>";


$a=1;

  while ($a<=10 ){
      $a++;
      echo  "The value of a is $a <br>";
  }

  echo "<hr>";

  $b = 1;
  do{
      $b++;
      echo "The value of b is $b <br>";
  } while($b<=10);

echo "<hr>";

for ($c=1;$c<=8; $c++){
    echo "The value of c is $c <br>";
}

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


for ($row=1;$row<=7;$row++){
    for ($star=1; $star<$row;$star++){
        print "*";
    }
    echo "<br>";
}