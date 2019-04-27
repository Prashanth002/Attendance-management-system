<?php
session_start();

$password='admin';
$username='admin';
$user=$_POST["uname"];
$pass=$_POST['pass'];
/*if($user==$username && $pass==$password){
	
	$_SESSION['user']=$username;
	
	echo "<script>window.location='afteradminlogin.php';</script>";
	
	die();
}
*/
//echo $sub;
	if(strcmp($password,$pass)==0){
		if(strcmp($username,$user)==0){
			$_SESSION['uname']=$user;
			echo "<script>";
			echo "window.location='afteradminlogin.php';";
			echo "</script>";
			die();
							}
		else{
			echo "<script>";
			echo "window.location='login2.php';";
			echo "</script>";
				die();
			
		}
}else{
	echo "<script>";
	echo "window.location='login2.php';";
	echo "</script>";
	die();
}


?> 

