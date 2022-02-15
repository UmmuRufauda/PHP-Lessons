<?php

include "connect.php";

if(isset($_POST["update"])){
// update code here

$id= $_POST["id"];

$up_firstname = $_POST["firstname"];
$up_secondname = $_POST["firstname"];
$up_email = $_POST["firstname"];
$up_phonenumber = $_POST["firstname"];


$up_sql = "UPDATE `details` SET `firstname`='$up_firstname',`secondname`='$up_secondname',`email`='$up_email',`phonenumber`='$up_phonenumber' WHERE id=$id";

$up_results= mysqli_query($link, $up_sql);

if($up_results){
    echo"Records have been updated";
    header("location:selectpatient.php");
}else{
    echo"Error executing query".mysqli_error($link);
}

}else{
    if(isset($_GET["id"])and !empty($_GET["id"])){
$id= $_GET["id"];

$sql = "SELECT * FROM `details` WHERE id=$id";
$result= mysqli_query($link, $sql);

if($result){
    $data = mysqli_num_rows($result);

    if($data==1){
        
        $row = mysqli_fetch_array($result);

    $id = $row['id'];
    $firstname = $row['firstname'];
    $secondname = $row['secondname'];
    $email = $row['email'];
    $phonenumber = $row['phonenumber'];

    }else{
        
        echo"No record is found";
    }

}else{
    
    echo"error executing query".mysqli_error($link);
}
    }else{
        echo"id value not picked";
    }
}

?>