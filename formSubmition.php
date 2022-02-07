<?php
if(isset($_POST["submit"])){
    $date = $_POST["date"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $firt = $_POST["firt"];
    $datemax = $_POST["datemax"];
    $location = $_POST["location"];
    $gender = $_POST["gender"];
    $maritalstatus = $_POST["maritalstatus"];
    $membernumber = $_POST["membernumber"];
    $idnumber = $_POST["idnumber"];
    $kids = $_POST["kids"];
    $nextkin = $_POST["nextkin"];
    $idnumber = $_POST["idnumber"];
    $kids = $_POST["kids"];
    $rship=$_POST["rship"];
    $insuranceplan=$_POST["insuranceplan"];
    $planID= $_POST["planID"];
    $medicalnumber = $_POST["medicalnumber"];

    

    
    echo" The date is $date<br>";
    echo" The number is $number<br>";
    echo" The Email is $email<br>";
    echo" The Phone Number is $phonenumber<br>";
    echo" The First Name is $firt<br>";
    echo" The Second Name is $datemax<br>";
    echo" The location is $location<br>";
    echo" The gender is $gender<br>";
    echo" The Marital Status is $maritalstatus<br>";
    echo" The Member Number is $membernumber<br>";
    echo" The ID Number is $idnumber<br>";
    echo" I have $kids kids<br>";
    echo" The Name Next of kin is $nextkin<br>";
    echo" He/She is my $rship<br>";
    echo" The Insurance plan is $insuranceplan<br>";
    echo" The Plan ID is $planID<br>";
    echo" The Medical Number is $medicalnumber<br>";   
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Admission</title>
    <link rel="stylesheet" href="css/submission.css">
</head>

<body>
    <img class="logo" src="images/logo.png" width="150" height="100">
    <h2 class="hd2">Patient Registration Form</h2>
    <div class="formdiv">
        <form action="formSubmition.php" method="post">
            <fieldset>
                <legend>Contact Details</legend>
                <label>Today's Date</label><label class="required">*</label>
                <input type="date" class="input" placeholder="Today's date" required autofocus><br>
                <label>Phone Number</label><label class="required">*</label>
                <input type="number" class="input" placeholder="Phone Number" required autofocus><br>
                <label>Email Address</label><label class="required">*</label>
                <input type="email" class="input" placeholder="Email Address" required autofocus><br>
            </fieldset>
            <fieldset>
                <legend>Personal Details</legend>
                <label>Full Name</label><label class="required">*</label>
                <input type="text" class="input" name="firt" placeholder="First Name" required autofocus><br>
                <label for="datemax">Date of birth</label><label class="required">*</label>
                <input type="date" class="input" name="datemax" max="1999-12-31" placeholder="Date of Birth" required
                    autofocus><br>
                <label>Location</label><label class="required">*</label>
                <select class="input" name="location">
                    <option>Select Location</option>
                    <option>Kisauni</option>
                    <option>Nyali</option>
                    <option>Mtopanga</option>
                    <option>Kadzandani</option>
                    <option>Bondeni</option>
                    <option>Kizingo</option>
                    <option>Mtwapa</option>
                </select><br>
                <label>Gender</label>
                <input type="radio" name="gender" value="male">
                <label>Male</label>
                <input type="radio" name="gender" value="female">
                <label>Female</label><br>

                <label>MaritalStatus</label>
                <input type="radio" name="maritalstatus" value="Single">
                <label>Single</label>
                <input type="radio" name="maritalstatus" value="Married">
                <label>Married</label>
                <input type="radio" name="maritalstatus" value="Divorced">
                <label>Divorced</label>
                <input type="radio" name="maritalstatus" value="Widow">
                <label>Widow</label>
            </fieldset>
        </form>
        <a class="linknext" href="formSubnext.php">Next</a>
    </div>

</body>

</html>