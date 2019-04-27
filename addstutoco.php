<html>
<body>
<?php

 

$courseid = $_POST["courseid"];
$rollno = $_POST["rollno"];
$rollnum = $_POST["rollnum"];

 
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

	

$sql = "INSERT INTO studcourse (courseid,rollno)
VALUES ('$courseid', '$rollno')";


$sql = "SELECT name FROM studentlist WHERE rollno ='$rollno'" ;
$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$sname=$row["name"];


$sql = "SELECT facid FROM $courseid";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$facultyid=$row["facid"];


$sql = "INSERT INTO $courseid(rollno,facid,name,rollnum)
VALUES ('$rollno','$facultyid','$sname','$rollnum')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





?> 




</body>
</html> 