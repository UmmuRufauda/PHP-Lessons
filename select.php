<?php
include"connect.php";
$sql = "SELECT * FROM `details` ORDER BY `details`.`id` DESC";

#execute quer
$result = mysqli_query($link, $sql);

#check
if($result){
$data = mysqli_num_rows($result);
#is there data here

if($data>0){
    echo"<h3>Data here<h3>";
    echo"<table>";
    echo"<tr>";
    echo"<th>First Name</th>";
    echo"<th>Second Name</th>";
    echo"<th>Email</th>";
    echo"<th>Phone Number</th>";
    echo"<th>Action</th>";
    echo"<th></th>";

   /* $row = mysqli_fetch_array($result);

    echo $id = $row['id'];
    echo $firstname = $row['firstname'];
    echo $secondname = $row['secondname'];
    echo $email = $row['email'];
    echo $phonenumber = $row['phonenumber'];
*/

while($row = mysqli_fetch_array($result)){

    echo"<tr>";
    echo $id = $row['id'];
    echo"<td>" .$firstname = $row['firstname']."</td>";
    echo" <td>" .$secondname = $row['secondname']."</td>";
    echo"<td>" .$email = $row['email'];
    echo" <td>" .$phonenumber = $row['phonenumber']."</td>";
    echo"<td> <a href='delete.php?id=".$id."'><button>Delete</button></a></td>";
    echo"<td> <a href='update.php?id=".$id."'><button>Update</button></a></td>";
    echo"</tr>";
    echo"</table>";
}

}else{
    echo"no record were found in your database!";
}
}
else{
echo"Error executeing query $sql" .mysqli_error($link);
}
?>