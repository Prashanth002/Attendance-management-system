<html>
<body>
<?php

 

$rollno = $_POST["rollno"];
$name = $_POST["name"];
$email = $_POST["email"];

echo $rollno;
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully to database";

	

$sql = "INSERT INTO 2018batch (rollno,name,email)
VALUES ('$rollno', '$name', '$email')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$sql = "INSERT INTO studentlist (rollno,name,email)
VALUES ('$rollno', '$name', '$email')";



if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}







?> 




</body>
</html> 