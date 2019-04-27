<?php

$sub=$_POST["uname"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password,facid FROM facultylogin WHERE username='$sub'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    // output data of each row
    $row = $result->fetch_assoc();
	if(strcmp($row["password"],$_POST["pass"])==0){
	echo "<script>";
	echo "window.location='afteradminlogin.php';";
	echo "</script>";
	die();
}else{
	echo "<script>";
	echo "window.location='login1.php';";
	echo "</script>";
	die();
}}else{
	echo "<script>";
	echo "window.location='login1.php';";
	echo "</script>";
	die();
} 
$conn->close();
?> 






<?php


//
?>