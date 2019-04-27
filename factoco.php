 <?php
session_start();
if( !isset( $_SESSION['uname'] ) ) {
      echo "<script>window.location='main.php';</script>";
   }
?>
 <html>
<body>

<style>
body{
	background-color:pink;
	
	
}
form
{
	padding:50px 30px;
top:50%;
left:50%;
width:320px;
height:290px;
background-color:white;
box-sizing:border-box;
position:absolute;
transform:translate(-50%,-50%);
opacity:0.6;;
}
form input[type="text"],input[type="password"]{
	border:none;
border-bottom:1px solid black;
background:transparent;
outline:none;
height:40px;


}
form input[type="submit"]{
width:150px;
height:30px;
background-color:grey;
margin:0;
text-align:center;
padding-left:14px;
}
</style>
<div id="form">
<marquee> Add Student</marquee><br>
<form action="addfactoco.php" method="post">
courseid: <input type="text" name="courseid"/></br></br>
facid: <input type="text" name="facid"/></br></br>
coursename: <input type="text" name="coursename"/></br></br>
<input type="submit" value="submit"/>
</form>

 
 

</body>
</html> 
