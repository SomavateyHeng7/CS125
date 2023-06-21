

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
$email = $_POST['email'];
$phonenumber = $_POST['phnumber'];
$message = $_POST['Message'];
$submit = $_POST['submit'];

if ($submit == 'submit') {
    $sql = "INSERT INTO `contact`(`ID`, `Firstname`, `Lastname`, `Email`, `Phonenumber`, `Message`) 
    VALUES (NULL,'" . $firstname . "','" . $lastname . "','" . $email . "','" . $phonenumber . "','" . $message . "')";

    $conn->query($sql);
    echo '<script>alert("Register Successfully!")</script>';
    header("refresh:0.3; url=contact.php");
}


?>


