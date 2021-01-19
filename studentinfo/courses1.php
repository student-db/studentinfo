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

<div style="float: left">
     <table style="width: 40%;table-layout: fixed;text-align: center;position: absolute;left: 20%" class="table table-striped table-hover">
     	<tr>
     		<th>Corse Code</th><th>Course Name</th>
     	</tr>
     	<?php include 'connection.php';

     	$q=("SELECT `c_id`, `course_name` FROM `course`");
        $e=mysqli_query($con,$q);
        foreach ($e as $key) {
            	echo "<tr><td>".$key['c_id']."</td><td>".$key['course_name']."</td></tr>";
            }

	?>

     </table></div>
     

    

</body>
</html>