<?php

if(isset($_GET["submit"])){
    $firstname = $_GET["firstname"];
    $secondname = $_GET["secondname"];

    echo"The First Name is $firstname <br>";
    echo"The Second Name is $secondname";

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
    <title>GET Method</title>
</head>

<body>
    <form action="getmethod.php" method="get">
        <div class="input">
            <label>First Name</label>
            <input type="text" name="firstname" placeholder="First Name" required>
        </div>
        <div class="input">
            <label>Second Name</label>
            <input type="text" name="secondname" placeholder="Second Name" required>
        </div>
        <div class="submit">
            <input type="submit" name="submit">
        </div>

    </form>
</body>

</html>