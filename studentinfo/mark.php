<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/c.css" rel="stylesheet" type="text/css">
</head>
<body>
	<style>
		.btn-primary{
			margin-left: 250px;
		}
		</style>
	<?php include('nav.php');?>
 <form action="mark.php" method="POST" style="padding-left: 10%">
<b>Batch:</b>
<select name="batch">
	<option>------Batch------</option>
	<option value="MCA2K19A">MCA2K19A</option>
	<option value="MCA2K19B">MCA2K19B</option>
</select>
<input type="submit" class = "btn btn-success"value="Find Students">
<th>
	<form action="" method="POST" 	style="padding-left: 15px" > 
<b>Register No:</b>
<input type="number" name= "search" placeholder="Enter roll number">
<th><button type="submit" name="reg" class = "btn btn-success"style="padding-left: 15px">Find Students</button></th>

<button onclick = "window.print()"  class ="btn btn-primary"> PRINT </button>
<a href="addmark.php" style="position: absolute;right: 50px" class="btn btn-success">Add Marks</a>
</form>
	</th>


</form>
<div>
	<div  style="padding-left: 10%;padding-top: 30px;padding-right: 10%;">
		<table style="width: 100%;table-layout: fixed;text-align: center;" class="table table-striped table-hover">
			
			<?php

			include('connection.php');
			    if(isset($_POST['batch']))
			    {
					?>
					<tr>
				<th>Roll No</th><th>Name</th><th> 121</th><th>301</th><th>303</th><th>305</th><th>365</th><th>Lab 1</th><th>Lab 2</th><th>total</th><th>Delete</th>
			</tr>
			<?php
				$a=$_POST['batch'];

				$q=("SELECT `id`, `rollno`, `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `lab1`, `lab2`,`tot` FROM `marks` WHERE `batch`='$a'");
            $e=mysqli_query($con,$q);
            foreach ($e as $key) {
            	echo "<tr><td>".$key['rollno']."</td><td>".$key['name']."</td><td>".$key['sub1']."</td><td>".$key['sub2']."</td><td>".$key['sub3']."</td><td>".$key['sub4']."</td><td>".$key['sub5']."</td><td>".$key['lab1']."</td><td>".$key['lab2']."</td><td>".$key['tot']."</td><td><a href='mark.php?del=".$key['rollno']."' class='btn btn-danger' style='color:white;'>Delete</a></td></tr>";
            }}
            else
            {
            	echo "<tr><td style colspan='11'><center><i>No records</i></center></td></tr>";
            }

			if(isset($_POST['reg'])){
			
				?>
			
				
				<?php
					$roll =$_POST['search'];
		
						$q=("SELECT `id`, `rollno`, `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `lab1`, `lab2`,`tot` FROM `marks` WHERE `rollno` = $roll");
					$e=mysqli_query($con,$q);
					if($e){
						
		
						foreach ($e as $key) {
							echo "<tr><td>".$key['rollno']."</td><td>".$key['name']."</td><td>".$key['sub1']."</td><td>".$key['sub2']."</td><td>".$key['sub3']."</td><td>".$key['sub4']."</td><td>".$key['sub5']."</td><td>".$key['lab1']."</td><td>".$key['lab2']."</td><td>".$key['tot']."</td><td><a href='mark.php?del=".$key['rollno']."' class='btn btn-danger' style='color:white;'>Delete</a></td></tr>";
							
						}
					}else{
						echo "<tr><td style colspan='11'><center><i>No records</i></center></td></tr>";
					}
			}
				?>



			
		</table>
	</div>
</div>

</body>
</html>

<?php 
if(isset($_GET['del'])){
	$a=$_GET['del'];
	$delq="DELETE FROM `marks` WHERE `rollno` =$a";
	$delQc=mysqli_query($con,$delq);
	if($delq){
		header("Location:mark.php");
	}else{
		echo "<script>alert('Marks Added');window.location.href='mark.php'</script>";
	}
}

?>


