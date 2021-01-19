<?php 
	session_start();

	$regno = "";
	$name = "";
    $dept= "";
    $admissionno ="";
	$batch ="";
	$contactno ="";
	$acdemicyear ="";
	$id = 1;
	$edit_state = false;
	$db = mysqli_connect('localhost', 'root', '', 'studmanag');
	
    
	if (isset($_POST['save'])) {
		$regno = $_POST['regno'];
        $name = $_POST['name'];
        $dept = $_POST['dept'];
		$admissionno = $_POST['admissionno'];
		$batch = $_POST['batch'];
		$contactno = $_POST['contactno'];
        $academicyear = $_POST['academicyear'];

		$query = " INSERT INTO `student`( `regno`, `name`, `dept`, `admissionno`, `batch`, `contactno`, `academicyear`)  VALUES ('{$regno}','{$name}','{$dept}','{$admissionno}','{$batch}','{$contactno}','{$academicyear}')";
		$db = mysqli_connect('localhost', 'root', '', 'studmanag');
		mysqli_query($db,$query);
		$_SESSION['msg'] = "Address saved"; 
		header('location: student.php');
	
	}
	
	if (isset($_GET['del'])) {
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

		$_SESSION['msg'] = "Address update"; 
		header('location: student.php');
	
    }
    
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM student WHERE id=$id");
		$_SESSION['msg'] = "Address deleted"; 
		header('location: student.php');
	}

	$results = mysqli_query($db,"SELECT * FROM STUDENT ");
?>
