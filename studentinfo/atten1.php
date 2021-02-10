<?php include 'stunav.php';
ob_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
.text-center{
	margin-left: 850px;
}
th, td {
  padding: 15px;text-align: center;
}td,th{border: 1px solid black}
		th{width: 30px}
	</style>
    <link href="css/c.css" rel = "spreadsheet">
</head>
<body>
	
 <form action="atten1.php" method="POST" style="padding-left: 10%">
 	<b>Course:</b>
 <select name="course">
 	<option>-----Select-----</option>
 	<?php 
 	include('connection.php');
 	
 $q=("SELECT `course_name`  FROM `course`");

 $e=mysqli_query($con,$q);
 

foreach ($e as $data)
        {
            echo "<option value='". $data[course_name] ."'>" .$data[course_name] ."</option>";  // displaying data in option menu
        }

 ?>
 </select>
<b>Date:</b>
<input type="date" name="day">
<input type="submit" value="Search" class="btn btn-success">
<div class = "text-center">
<button onclick = "window.print()"  class ="btn btn-primary"> PRINT </button>

</div>

</form>

<div>
	<div  style="padding-left: 10%;padding-top: 30px;padding-right: 10%;">
		<table style="width: 100%;table-layout: fixed;text-align: center;"class="table table-striped table-hover" >
			<tr>
				<th>RegNo</th><th>Name</th><th>Attendance</th>
			</tr>
			<?php

			include('connection.php');
			    if(isset($_POST['course']))
			    {$a=$_POST['course'];
				$b=$_POST['day'];

				$q=("SELECT `id`, `rollno`, `name`, `attend`, `course_name`, `date` FROM `attendence` WHERE `course_name`='$a' AND `date`='$b'");
            $e=mysqli_query($con,$q);
            foreach ($e as $key) {
            	echo "<tr><td>".$key['rollno']."</td><td>".$key['name']."</td><td>".$key['attend']."</td></tr>";
            }}
            else
            {
            	echo "<tr><td style colspan='3'><center><i>No records</i></center></td></tr>";
            }

 	        



			?>
		</table>
	</div>
</div>

</body>
</html>


