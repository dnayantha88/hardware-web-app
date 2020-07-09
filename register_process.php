<?php
session_start();

$connect = mysql_connect('localhost','root','');
$database = mysql_select_db('kgd');

$username = $_POST['un'];

if(isset($username)){
$mysql_get_users = mysql_query("SELECT * FROM admin where myusername='$username'");

$get_rows = mysql_affected_rows($connect);

if($get_rows >=1){

header("location:register.php?msg=Invalid User Name");

}



else{


			$fname = $_POST['fn'];
		  	$lname = $_POST['ln'];
		  	$email = $_POST['email']; 
		  	$user= $_POST['un'];
		  	$password= $_POST['pw'];

	  	$query = "INSERT INTO user (fname,lname,email,username,password) VALUES ('$fname', '$lname','$email','$user', '$password')"; 
	  	$data = mysql_query ($query)or die(mysql_error()); 

	  	header("location:login.php");
        }

		
	}



?>