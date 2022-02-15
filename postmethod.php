<?php
include "connect.php";

if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $secondname = $_POST["secondname"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];

#query

$sql = "INSERT INTO `details`(`firstname`, `secondname`, `email`, `phonenumber`) 
VALUES ('$firstname','$secondname','$email','$phonenumber')";

#execute the query

$result = mysqli_query($link, $sql);

if($result){
    echo"Record added successfully";
    header("location:select.php");
}
else{
    echo"error there is an error $sql".mysqli_error($link);
}

}
else{
    echo"<h3>Please fill in the Form</h3>";
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
    <form action="postmethod.php" method="post">
        <div class="input">
            <label>First Name</label>
            <input type="text" name="firstname" placeholder="First Name" required>
        </div>
        <div class="input">
            <label>Second Name</label>
            <input type="text" name="secondname" placeholder="Second Name" required>
        </div>
        <div class="input">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input">
            <label>Phone Number</label>
            <input type="number" name="phonenumber" placeholder="phonenumber" required>
        </div>
        <div class="submit">
            <input type="submit" name="submit">
        </div>

    </form>
</body>

</html>