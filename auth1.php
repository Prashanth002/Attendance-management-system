<?php
session_start();




$sub=$_POST['uname'];

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
	$_SESSION['facid']=$row["facid"]; 
	echo $_SESSION['facid'];
	if(strcmp($row["password"],$_POST["pass"])==0){
	$_SESSION['uname']=$sub;
	echo "<script>";
	echo "window.location='showsubfac.php';";
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


