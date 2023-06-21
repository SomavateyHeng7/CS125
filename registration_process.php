

<?php

// PHP process
// Open Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolmanagement";

// open connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {

    //echo "Connected successfully";
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$citizenship = $_POST['citizenship'];
$nationality = $_POST['nationality'];
$gender= $_POST['gender'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$currentaddress = $_POST['newadd'];
$emergencycontactname = $_POST['emcontactname'];
$emergencycontactemail = $_POST['emcontactemail'];
$emergencycontactrelationship = $_POST['engcontactrela'];
$emergencycontactphonenumber = $_POST['engcontactnum'];
$emergencycontactaddress = $_POST['emcontactadd'];
$highschoolname = $_POST['hsname'];
$englishproficiency = $_POST['engpro'];
$preferredmajor = $_POST['pmajor'];
$graduationyear = $_POST['gyear'];
$email = $_POST['email'];
$phonenumber = $_POST['phnumber'];
$message = $_POST['Message'];
$submit = $_POST['submit'];

if ($submit == 'submit') {
    $sql = "INSERT INTO `Registration`( `Firstname`, `Lastname`,`citizenship`,`nationality`,`gender`,`day`
    ,`month`,`year`,`newadd`,`emcontactname`,`emcontactemail`
    ,`engcontactrela`,`engcontactnum`,`emcontactadd`,`hsname`,`engpro`,`pmajor`,`gyear`,`engpro`,`engpro`,
     `Email`, `Phonenumber`, `Message`) 
    VALUES (NULL,'" . $firstname . "','" . $lastname . "','" . $email . "','" . $phonenumber . "','" . $message . "')";

    $conn->query($sql);
    echo '<script>alert("Register Successfully!")</script>';
    header("refresh:0.3; url=registration.php");
}


?>




