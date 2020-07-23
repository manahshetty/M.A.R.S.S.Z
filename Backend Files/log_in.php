<?php

// Grab User submitted information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST["email"];
$pass = $_POST["psw"];

// Connect to the database
$con = mysqli_connect("localhost","root","","edu");

// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use


$result = mysqli_query($con,"SELECT s_email, password FROM student WHERE s_email ="."'".$email."'");
$resul = mysqli_query($con,"SELECT t_email, password FROM teacher WHERE t_email ="."'".$email."'");
// echo "SELECT s_email, password FROM student WHERE s_email =".$email;
// echo $result;
if($result){
	$row = mysqli_fetch_row ($result );
	if($row[0]==$email && $row[1]==$pass)
 	   echo "hello".$email."<br>You are a validated student.";
 	session_start();
 	$_SESSION['email']=$email;
    header("Location:index.php");
}
else if($resul)
{	
	$ro = mysqli_fetch_row ($resul );
	if($ro[0]==$email && $ro[1]==$pass)
   	 echo "Hello".$email."<br>You are a validated teacher.";
   	session_start();
 	$_SESSION['email']=$email;

}
else
    echo"Sorry, your credentials are not valid, Please try again.";

}
?>