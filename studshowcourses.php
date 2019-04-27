 <?php
 session_start();
if( !isset( $_SESSION['uname'] ) ) {
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
<title> Retrive data</title>
</head>

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
<h2>courses undertaking </h2>

</style>

<?php	

$rullno=$_SESSION['rollno'];
	
$i=0;
$sql = "SELECT courseid FROM studcourse WHERE rollno='$rullno'";
$result = $conn->query($sql);

while($db_row = mysqli_fetch_array($result)) {
?>

<form action="showattedance.php" method="post">

<input type="checkbox" name="courselist[]" value="<?php echo $db_row["courseid"]; ?>">&nbsp;&nbsp;<label><?php echo $db_row["courseid"]; ?>&nbsp;&nbsp;</label><br> 
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

