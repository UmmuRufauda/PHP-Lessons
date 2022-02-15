<?php
include"connect.php";

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
    $rship=$_POST["rship"];
    $insuranceplan=$_POST["insuranceplan"];
    $planID= $_POST["planID"];
    $medicalnumber = $_POST["medicalnumber"];

    #query

    $sql = "INSERT INTO `patient`(`date`, `number`, `email`, `phonenumber`, `firt`, `datemax`, `location`, `gender`, `maritalstatus`, `membernumber`, `idnumber`, `kids`, `nextkin`, `rship`, `insuranceplan`, `planID`, `medicalnumber`) 
    VALUES ('$date','$number','$email',' $phonenumber','$firt','$datemax',' $location','$gender ','$maritalstatus','$membernumber','$idnumber','$kids',' $nextkin','$rship','$insuranceplan','$planID','$medicalnumber')";
  
  $result = mysqli_query($link, $sql);

if($result){
    echo"Record added successfully";
    header("location:selectpatien.php");
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
                <input type="text" class="input" name="firt" placeholder="Full Name" required autofocus><br>
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
            <fieldset>
                <legend>NHIF Details</legend>
                <label>Member number</label><label class="required">*</label>
                <input type="number" class="input" name="membernumber" placeholder="Member Number" required
                    autofocus><br>
                <label>National ID</label><label class="required">*</label>
                <input type="number" name="idnumber" class="input" placeholder="ID Number" required autofocus><br>
                <label>How many kids</label><label class="required">*</label>
                <input type="number" name="kids" class="input" placeholder="kids you have" required autofocus><br>
            </fieldset>
            <fieldset>
                <legend>Next of Kin Details</legend>
                <label>Next of Kin</label><label class="required">*</label>
                <input type="text" name="nextkin" class="input" placeholder="Next Of Kin" required autofocus><br>
                <label>Relationship</label><label class="required">*</label>
                <input type="text" name="rship" class="input" placeholder="Relationship" required autofocus><br>
            </fieldset>
            <fieldset>
                <legend>Insurance Details</legend>
                <label>Insurance Plan</label><label class="required">*</label>
                <input type="text" name="insuranceplan" class="input" placeholder="insurance plan" required
                    autofocus><br>
                <label>Plan ID/Group Number</label><label class="required">*</label>
                <input type="text" name="planID" class="input" placeholder="Relationship" required autofocus><br>
                <label>Medicare Number</label><label class="required">*</label>
                <input type="number" name="medicalnumber" class="input" placeholder="Medicare Number" required
                    autofocus><br>
            </fieldset>
            <input id="btnsubmit" name="submit" type="submit">
            <input id="btnrst" type="reset">
        </form>
    </div>

</body>

</html>