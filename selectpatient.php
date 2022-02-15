<?php
include"connect.php";
$sql = "SELECT * FROM `patient` ORDER BY `patient`.`id` DESC";


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
    echo "<th>date</th>";
    echo "<th>number</th>";
    echo "<th>email</th>";
    echo "<th>phonenumber</th>";
    echo " <th>First Name</th>";
    echo "<th>datemax</th>";
    echo "<th>location</th>";
    echo "<th>gender</th>";
    echo "<th>maritalstatus</th>";
    echo "<th>membernumber</th>";
    echo "<th>idnumber</th>";
    echo "<th>kids</th>";
    echo "<th>nextkin</th>";
    echo "<th>rship</th>";
    echo "<th>insuranceplan</th>";
    echo "<th>planID</th>";
    echo "<th>medicalnumber</th>";
    echo"<th>Action</th>";
    echo"<th></th>";

  
while($row = mysqli_fetch_array($result)){

    echo"<tr>";
    echo $id = $row['id'];
    echo "<td>" .$date = $row["date"]."</td>";
    echo "<td>" .$number = $row["number"]."</td>";
    echo "<td>" .$email = $row["email"]."</td>";
    echo "<td>" .$phonenumber = $row["phonenumber"]."</td>";
    echo "<td>" .$firt = $row["firt"]."</td>";
    echo "<td>" .$datemax = $row["datemax"]."</td>";
    echo "<td>" .$location = $row["location"]."</td>";
    echo "<td>" .$gender = $row["gender"]."</td>";
    echo "<td>" .$maritalstatus = $row["maritalstatus"]."</td>";
    echo "<td>" .$membernumber = $row["membernumber"]."</td>";
    echo "<td>" .$idnumber = $row["idnumber"]."</td>";
    echo "<td>" .$kids = $row["kids"]."</td>";
    echo "<td>" .$nextkin = $row["nextkin"]."</td>";
    echo "<td>" .$rship=$row["rship"]."</td>";
    echo "<td>" .$insuranceplan=$row["insuranceplan"]."</td>";
    echo "<td>" .$planID= $row["planID"]."</td>";
    echo "<td>" .$medicalnumber = $row["medicalnumber"]."</td>";
    echo"<td> <a href='deletepatient.php?id=".$id."'><button>Delete</button></td>";
    echo"<td><a href='updatepatient.php?id=".$id."'><button>Update</button></td>";
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