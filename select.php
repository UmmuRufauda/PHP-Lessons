<?php
include"connect.php";
$sql = "SELECT * FROM `details` WHERE id=1";

#execute quer
$result = mysqli_query($link, $sql);

#check
if($result){
$data = mysqli_num_rows($result);
#is there data here

if($data>0){
    
    echo"<h3>Data here<h3>";

   /* $row = mysqli_fetch_array($result);

    echo $id = $row['id'];
    echo $firstname = $row['firstname'];
    echo $secondname = $row['secondname'];
    echo $email = $row['email'];
    echo $phonenumber = $row['phonenumber'];
*/

while($row = mysqli_fetch_array($result)){


    echo $id = $row['id'];
    echo"  " .$firstname = $row['firstname'];
    echo"  " .$secondname = $row['secondname'];
    echo"  " .$email = $row['email'];
    echo"  " .$phonenumber = $row['phonenumber'];
    echo"<hr>";
}


}else{
    echo"no record were found in your database!";
}
}
else{
echo"Error executeing query $sql" .mysqli_error($link);
}
?>