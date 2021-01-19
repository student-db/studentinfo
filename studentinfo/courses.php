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
		.course {
			margin-right:220px;
			padding-top : 200px;
		}
		
	</style>
</head>
<body>
	<?php include 'nav.php';?>
<div style="float: left">
     <table style="width: 40%;table-layout: fixed;text-align: center;position: absolute;left: 20%" class="table table-striped table-hover">
     	<tr>
     		<th>Corse Code</th><th>Course Name</th><th>Actions</th>
     	</tr>
     	<?php include 'connection.php';

     	$q=("SELECT `c_id`, `course_name` FROM `course`");
        $e=mysqli_query($con,$q);
        foreach ($e as $key) {
				echo "<tr><td>".$key['c_id']."</td><td>".$key['course_name']."</td></tr>";
				
            }

	?>

     </table></div>
     <form action="coursesadd.php" method="POST">
     <div style="width: 40%;table-layout: fixed;text-align: center;position: absolute;left: 20%;float: right;padding-top: 15%" >
	 <br>
	 <br>
	 <div class = "course">
	
     <table class="table table-striped table-hover">
     	<tr>
     		<th>Course Code</th>
            <td><input type="text" name="c_id"></td>
     	</tr>
     	<tr>
     		<th>Course Name</th>
     		<td><input type="text" name="course_name"></td>
     	</tr>
     	<tr>
     		<th></th>
     		<td><input type="submit" value="Add Course" class="btn btn-success"></td>
     	</tr>
	 </table>
	 </div>
 </div></form>

    

</body>
</html>