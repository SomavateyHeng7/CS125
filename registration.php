<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolmanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$register = json_decode($_POST['registrationData'], true);
$sql = "INSERT INTO registration (firstname, lastname, citizenship, nationality, gender, birthdate, email, phone, address,emer_name ,emer_phone, emer_email,emer_relation, school, grad, tests, major, emer_address)
VALUES ('".$register['firstname']."', '".$register['lastname']."', '".$register['citizenship']."', '".$register['nationality']."', '".$register['gender']."', '".$register['birthdate']."', '".$register['email']."', '".$register['phone']."', '".$register['address']."', '".$register['emer_name']."', '".$register['emer_phone']."', '".$register['emer_email']."', '".$register['emer_relation']."', '".$register['school']."', '".$register['grad']."', '".$register['tests']."', '".$register['major']."', '".$register['emer_address']."')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array('success' => 1));
} else {
  echo json_encode(array('success' => 0));
}
$conn->close();
?>