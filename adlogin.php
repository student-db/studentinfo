<?php
$ad_name = $_POST["ad_name"];
$ad_pass = $_POST["ad_pass"];
$con =mysqli_connect("localhost","root","","studmanag");
$result = mysqli_query($con,"SELECT * FROM `adminlogin` WHERE `ad_name`='$ad_name' && `ad_pass`='$ad_pass'");
$count=mysqli_num_rows($result);
if($count==1){
    header("location:Dashboard.php");
        
}
else{
    echo"incorrect username and password!!!!!!!!!";
   
}

?>