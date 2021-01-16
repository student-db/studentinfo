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
	if (isset($_POST['update'])) {
	
		$regno = mysqli_real_escape_string($db,$_POST['regno']);
        $name = mysqli_real_escape_string($db,$_POST['name']);
        $dep = mysqli_real_escape_string($db,$_POST['dep']);
        $admissionno = mysqli_real_escape_string($db,$_POST['admissionno']);
		$batch = mysqli_real_escape_string($db,$_POST['batch']);
		$contactno = mysqli_real_escape_string($db,$_POST['contactno']);
		$academicyear = mysqli_real_escape_string($db,$_POST['academicyear']);
		$id = mysqli_real_escape_string($db,$_POST['id']);
		
		$query = mysqli_query($db," UPDATE `student` SET `regno`='$regno',`name`='$name',`dep`='$dep',`admissionno`='$admissionno',`contactno`='$contactno',`batch`= '$batch',`academicyear`= '$academic_year' WHERE `id` = $id");
	
		$_SESSION['msg'] = "Address update"; 
		header('location: student.php');
	
    }
    
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM student WHERE id=$id");
		$_SESSION['msg'] = "Address deleted"; 
		header('location: student.php');
	}

	$results = mysqli_query($db,"SELECT * FROM STUDENT");
?>