<html>
<body>
<?php

 

$courseid = $_POST["courseid"];
$facid = $_POST["facid"];
$coursename = $_POST["coursename"];

//echo $rollno;
 
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

	

$sql = "INSERT INTO courses (courseid,facid,coursename)
VALUES ('$courseid', '$facid', '$coursename')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}





?> 




</body>
</html> 