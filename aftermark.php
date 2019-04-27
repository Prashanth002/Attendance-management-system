<html>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: green;
	padding-left:px;
	
}
</style>
<title> Retrive data</title>
<ul>

</style>
</head>
<div id="logo"><img src="logo.jpg" height="80px" width="200px" /></div>

</ul>
</head>

<body>
<h2>Students </h2>




<?php
session_start();
$couid=$_SESSION['courseid'];
$couid=$couid."attendance";
//echo $couid;
if(isset($_POST['studentslist'])){
	//print_r($_POST['studentslist']);
	$str="";
if(!empty($_POST['studentslist'])){
	
	foreach($_POST['studentslist'] as $selected){
	//echo $selected."</br>";
	$str=$selected.",".$str;
	}
	//echo $str;
}
}
$pushstr=$str;

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

	
$date=$_POST["bday"];
$sql = "INSERT INTO $couid (date,presentrollnos) VALUES ('$date','$pushstr')";


if (mysqli_query($conn, $sql)) {
    echo "record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?> 

</html>
