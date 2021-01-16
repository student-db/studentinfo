<?php
session_start();
?>
<?php
if (isset($_POST['save'])) {
$regno = $_POST['regno'];
$name = $_POST['name'];
$dept = $_POST['dept'];
$admissionno = $_POST['admissionno'];
$batch = $_POST['batch'];
$contactno = $_POST['contactno'];

$db =mysqli_connect("localhost","root","","studmanag");
$result = mysqli_query($con,"SELECT * FROM `student` WHERE `regno`='$regno' && `name`='$name'  && `dept`='$dept'  && `admissionno`='$admissionno' && `batch`='$batch' && `contactno`='$contactno'");
$count=mysqli_num_rows($result);
if($count==1){
    echo "WARNNING :   you already registered member....pls login using your username and password!!!!!!";
        
}
else{
    $reg =" INSERT INTO `student`( `regno`, `name`, `dept`, `admissionno`, `batch`, `contactno`)  VALUES ('{$regno}','{$name}','{$dept}','{$admissionno}','{$batch}','{$contactno}')";
	mysqli_query($db,$reg);
	
    
   
}
}
?>
