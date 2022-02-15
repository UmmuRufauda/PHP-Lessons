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
    header("location:select.php");
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>Post Method</title>
</head>

<body>
    <h3>Update Record</h3>
    <form action="update.php" method="post">
        <div class="input">
            <label>First Name</label>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="First Name" required>
        </div>
        <div class="input">
            <label>Second Name</label>
            <input type="text" name="secondname" value="<?php echo $secondname; ?>" placeholder="Second Name" required>
        </div>
        <div class="input">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email" required>
        </div>
        <div class="input">
            <label>Phone Number</label>
            <input type="number" name="phonenumber" value="<?php echo $phonenumber; ?>" placeholder="phonenumber"
                required>
        </div>
        <div class="input">
            <label>ID</label>
            <input type="number" name="id" value="<?php echo $_GET["id"];?> placeholder=" phonenumber" required>
        </div>
        <div class="submit">
            <input type="submit" name="update" value="UPDATE">
        </div>

    </form>
</body>

</html>