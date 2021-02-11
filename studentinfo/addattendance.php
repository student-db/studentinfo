<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;text-align: center;
}td,th{border: 1px solid black}
		th{width: 30px}
	</style>
</head>
<body>
	<?php include('nav.php');?>
	<form action="#" method="POST" style="padding-left: 10%">
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
<b>Batch:</b>
<select name="batch">
	<option>------Batch------</option>
	<option value="MCA2K19A">MCA2K19A</option>
	<option value="MCA2K19B">MCA2K19B</option>
</select>
<input type="submit" class="btn btn-success" value="Find Students">
<input type="submit" class="btn btn-success" value="Add Attendance" name="addatten" style="position: absolute;right: 50px">
</form>
<div>
	<form action="addatten.php?" method="POST" style="padding-left: 10%;padding-top: 30px;padding-right: 10%;">
		<table style="width: 100%;table-layout: fixed;text-align: center;">
			<tr>
				<th>RegNo</th><th>Name</th><th>Attendance</th>
			</tr>
			<?php

			include('connection.php');
			    if(isset($_POST['course']))
			    {
			    $a=$_POST['course'];
				$b=$_POST['batch'];
				echo $a;
				echo $b;

				$q=("SELECT `id`, `regno`, `name`, `dept`, `admissionno`, `contactno`, `batch`, `academicyear` FROM `student` WHERE `batch`='$b'");
            $e=mysqli_query($con,$q);
            foreach ($e as $key) {
            	echo "<tr>
            <td name='regno[]' value='".$key['regno']."'>".$key['regno']."</td>
            <td name='name[]' value='".$key['name']."'>".$key['name']."</td>
            <td >
            Present<input type='checkbox' checked name='ar[]' value='".$key['regno']."'>
            Absent<input type='checkbox' name='ar2[]' value='".$key['regno']."'>

            </td>
            <input type='hidden' name='cname' value='$a'></tr>";
            }} 
            else
            {
            	echo "<tr><td style colspan='3'><center><i>No records</i></center></td></tr>";
            }

 	        



			?>
		</table>
		
	</form>
</div>

</body>
</html>