 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}


session_start();
if( !isset( $_SESSION['facid'] ) ) {
    echo "<script>window.location='main.php';</script>";
}

?> 


 <!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
</head>

<body>
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
//print_r($_POST);

$sub=$_POST["sublist"][0];
$_SESSION['courseid']=$sub;
$i=0;
$sql = "SELECT rollnum, name FROM $sub";
$result = $conn->query($sql);

while($db_row = mysqli_fetch_array($result)) {
?>

<form action="aftermark.php" method="post">

<input type="checkbox" name="studentslist[]" value="<?php echo $db_row["rollnum"]; ?>">&nbsp;&nbsp;<label><?php echo $db_row["rollnum"]; ?>&nbsp;&nbsp;<?php echo $db_row["name"]; ?></label><br> 
<?php
$i++;
}
?>
</div>
<input type="date" name="bday">
<input type="submit" value="mark" />
</div>
</form>


</body>
</html> 

