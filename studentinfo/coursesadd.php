<?php
include 'connection.php';
	$a=$_POST['c_id'];
	$b=$_POST['course_name'];

	$q="INSERT INTO `course`(`c_id`, `course_name`) VALUES ('$a','$b')";
	$e=mysqli_query($con,$q);
	if ($e) {
		header('location:courses.php');
	}
?>