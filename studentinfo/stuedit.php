<?php
include 'connection.php';

	//echo "string";
	    $regno = $_POST['regno'];
        $name = $_POST['name'];
        $dept = $_POST['dept'];
		$admissionno = $_POST['admissionno'];
		$batch = $_POST['batch'];
		$contactno = $_POST['contactno'];
        $academicyear = $_POST['academicyear'];
        $q = "UPDATE `student` SET `regno`='$regno',`name`='$name',`dept`='$dept',`admissionno`='$admissionno',`contactno`='$contactno' WHERE`regno`='$regno'";
        
        $e=mysqli_query($con,$q);
        if ($e) {
        	echo "<script>alert('Updated');window.location.href='student.php';</script>";
        }


?>