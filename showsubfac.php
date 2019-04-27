<?php
 session_start();
if( !isset( $_SESSION['facid'] ) ) {
    echo "<script>window.location='main.php';</script>";
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
?> 


 <!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: green;
	padding-left:px;
	width: 2000px;
    height: 90px;
	
}
li{
	float:right;
}

</style>
<title> Retrive data</title>
<ul>

</style>
</head>
<div id="logo">
<img src="logo.jpg" height="80px" width="200px" /></div>
<!--<div class ="LOGIN" style="position:absolute;top:10%;right:15%;">
//<form action="main.php" method="post">
	<input type="submit" name="submit" value="Logout" />
	</form>-->
    
</ul>
</head>

<body>
<h2>list of courses</h2>
<style>


</style>

<?php


$sub=$_SESSION['facid'];
$i=0;
$sql = "SELECT courseid	, coursename FROM courses WHERE facid='$sub'";
$result = $conn->query($sql);

while($db_row = mysqli_fetch_array($result)) {
?>

<form action="sub1show.php" method="post">

<input type="checkbox" name="sublist[]" value="<?php echo $db_row["courseid"]; ?>">&nbsp;&nbsp;<label><?php echo $db_row["courseid"]; ?>&nbsp;&nbsp;<?php echo $db_row["coursename"]; ?></label><br> 
<?php
$i++;
}
?>
</div>

<input type="submit" value="go" />
</div>
</form>


</body>
</html> 

