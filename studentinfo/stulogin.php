<?php

$stud_name = $_POST["stud_name"];
$stud_pass = $_POST["stud_pass"];

$con =mysqli_connect("localhost","root","","studmanag");
$res = mysqli_query($con,"SELECT * FROM `stulogin` WHERE `stud_name`='$stud_name' && `stud_pass`='$stud_pass'");
$count=mysqli_num_rows($res);
if($count==1){
   
    header("location:stu1.php");
        
}
else{
  
   
    echo"incorrect username and password!!!!!!!!!";
}

?>