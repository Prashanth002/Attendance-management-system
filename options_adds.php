<html>
<body>
<style>

form input[type="submit"]{

height:0.5px;
border:none;
border-bottom:;
background-color:white;
outline:none;
height:40px;
opacity:0.6;
text-align:center;

display:inline-block;
position: relative;
left=50%;

}
form{
	float:right;
	padding:5px 500px;
	
}
body{
	background-image:url("img31.jpg");
}

</style>
<
<h> <marquee>Add students in batchwise</marquee></h><br><br><br><br><br><br>
<div id="form">

<form action="Add stud.php" method="post">
<?php
 
$buttonName = "add 2015 student";
?>

4th year:<input type="submit" value="<?php echo $buttonName; ?>" />
</form>

<form action="addstud1.php" method="post">

<?php 
$buttonName = "add 2016 student";
?>

3rd year:<input type="submit" value="<?php echo $buttonName; ?>" />


</form>

<form action="addstud2.php" method="post">

<?php 
$buttonName = "add 2017 student";
?>

2nd year:<input type="submit" value="<?php echo $buttonName; ?>" />


</form>

<form action="addstud3.php" method="post">

<?php 
$buttonName = "add 2018 student";
?>

1st year:<input type="submit" value="<?php echo $buttonName; ?>" />
</form>
</div>
</form>
</style>

</body>


</html>