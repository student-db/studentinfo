<?php
include 'connection.php';

	if (isset($_POST['addatten'])) {
		$c=$_POST['cname'];
		//echo $c;
		$p=$_POST['ar'];
		$a=$_POST['ar2'];
		$d=date("Y-m-d");
		foreach ($p as $key) {
			$q1="SELECT `id`, `regno`, `name`, `dept`, `admissionno`, `contactno`, `batch`, `academicyear` FROM `student` WHERE `regno`='$key'";
			$e1=mysqli_query($con,$q1);
			foreach ($e1 as $k1) {
				$q11="INSERT INTO `attendence`(`rollno`, `name`, `attend`, `course_name`, `date`) VALUES ('$key','$k1[name]','Present','$c','$d')";
				$e11=mysqli_query($con,$q11);
			}
		}
		foreach ($a as $key) {
			$q1="SELECT `id`, `regno`, `name`, `dept`, `admissionno`, `contactno`, `batch`, `academicyear` FROM `student` WHERE `regno`='$key'";
			$e1=mysqli_query($con,$q1);
			foreach ($e1 as $k1) {
				$q11="INSERT INTO `attendence`(`rollno`, `name`, `attend`, `course_name`, `date`) VALUES ('$key','$k1[name]','Absent','$c','$d')";
				$e11=mysqli_query($con,$q11);
			}
		}
		echo "<script>alert('Attendance added');window.location.href='atten.php';</script>";
	}

?>