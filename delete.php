<?php
include "connect.php";

if(isset($_POST["submit"])and !empty($_POST["id"]))
{
    $id=$_POST["id"];
    $sql = "DELETE FROM `details` WHERE id=$id";
    $result = mysqli_query($link, $sql);

    if($result){
        echo"Record deleted successfully";
        header("location:select.php");
    }

}else
{
    echo"Try deleting a record";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>

<body>
    <div>
        <form action="delete.php" method="post">
            <div>

                <label>Are you sure you want to delete this record</label><br>
                <input type="text" name="id" value="<?php echo $_GET['id']; ?>">
            </div>
            <input type="submit" name="submit" value="Yes">
            <a href="select.php">No</a>
        </form>
    </div>
</body>

</html>