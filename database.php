<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siuhostel";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $conn->real_escape_string($_REQUEST['name']);
$email = $conn->real_escape_string($_REQUEST['email']);
$phone = $conn->real_escape_string($_REQUEST['phone']);
$regi = $conn->real_escape_string($_REQUEST['regi']);
$hostel = $conn->real_escape_string($_REQUEST['hostel']);
$password = $conn->real_escape_string($_REQUEST['password']);



$student = "INSERT INTO student_details(
			name,
				email,
				phone,
				regi,hostel,password) VALUES ('$name','$email','$phone','$regi','$hostel','password')";

				 if ($conn->query($student)  === TRUE)
  {
      header("Location: login.php?msg=".urlencode('New record created successfully'));
            exit();
} 
else 
{
    echo "Error: " . $student . "<br>" . $conn->error;
    
    
}


$conn->close();
?>