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
        <a class="linkprevious" href="Patient.html">Back</a>
    </div>


</body>

</html>