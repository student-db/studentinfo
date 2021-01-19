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
	</style>
	<link href="css/c.css" rel="stylesheet" type="text/css">
</head>
<body>
	
 <form action="mark1.php" method="POST" style="padding-left: 10%">
<b>Batch:</b>
<select name="batch">
	<option>------Batch------</option>
	<option value="MCA2K19A">MCA2K19A</option>
	<option value="MCA2K19B">MCA2K19B</option>
</select>
<input type="submit" value="Find Students">

</form>
<div>
	<div  style="padding-left: 10%;padding-top: 30px;padding-right: 10%;">
		<table style="width: 100%;table-layout: fixed;text-align: center;" class="table table-striped table-hover">
		<tr>
				<th>Roll No</th><th>Name</th><th> 121</th><th>301</th><th>303</th><th>305</th><th>365</th><th>Lab 1</th><th>Lab 2</th>
			</tr>
			<?php

			include('connection.php');
			    if(isset($_POST['batch']))
			    {$a=$_POST['batch'];

				$q=("SELECT `id`, `rollno`, `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `lab1`, `lab2` FROM `marks` WHERE `batch`='$a'");
            $e=mysqli_query($con,$q);
            foreach ($e as $key) {
            	echo "<tr><td>".$key['rollno']."</td><td>".$key['name']."</td><td>".$key['sub1']."</td><td>".$key['sub2']."</td><td>".$key['sub3']."</td><td>".$key['sub4']."</td><td>".$key['sub5']."</td><td>".$key['lab1']."</td><td>".$key['lab2']."</td></tr>";
            }}
            else
            {
            	echo "<tr><td style colspan='11'><center><i>No records</i></center></td></tr>";
            }

 	        



			?>
		</table>
	</div>
</div>
</body>
</html>


