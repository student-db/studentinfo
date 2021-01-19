<?php include'nav.php'?>
<?php  include('stuserver.php');
if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$edit_state = true;
		$rec = mysqli_query($db, "SELECT * FROM student WHERE id=$id");
	   $record = mysqli_fetch_array($rec);
	    
     $regno = $record['regno'];
     $name = $record['name'];
     $dept = $record['dept'];
 $admissionno = $record['admissionno'];
 $batch = $record['batch'];
 $contactno = $record['contactno'];
     $academicyear = $record['academicyear'];
}
?>
<!doctype html>
<html>
  <head>
  </head>
  
     <body>
     
	<div class="modal-dialog">
		<div class="modal-content">
        <form method ="POST" action ="stuedit.php">
				<div class="modal-header">						
					<h4 class="modal-title">Fill the Students Details</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
                <div class="form-group">
						<label>regno</label>
						<input type="text" class="form-control" name = "regno" required value ="<?php echo $regno;?>">
						<input type ="text" hidden name = "id" value ="<?php echo $id;?>">
                    </div>				
                <div class="form-group">
						<label>student name</label>
						<input type="text" class="form-control" name = "name" required value ="<?php echo $name;?>" >
                    </div>
                    <div class="form-group">
						<label>department</label>
						<input type="text" class="form-control" name= "dept" required value ="<?php echo $dept;?>">
					</div>
					<div class="form-group">
						<label>admission no</label>
						<input type="number" class="form-control" name= "admissionno" required value ="<?php echo $admissionno;?>" >
					</div>
					<div class="form-group">
						<label>batch</label>
						<input type="text" class="form-control" name = "batch" required value ="<?php echo $batch;?>" >
					</div>
					<div class="form-group">
						<label>contact no</label>
						<input type="number" class="form-control" name = "contactno" required value ="<?php echo $contactno;?>">
					</div>
					<div class="form-group">
						<label>academic year</label>
						<input type="text" class="form-control" name ="academicyear" required >
					</div>					
				</div>
				
				<div class="modal-footer">
                <?php if ($edit_state == false): ?>
                    <input type="submit" class="btn btn-default" value="update" name="update">
                   
                    <?php else:?>
                      
                        <input type="submit" class="btn btn-success" name = "save" value="Add">
                    <?php endif ?>
				</div>
			</form>
		</div>
	</div>
</div>
   
            </body>
</html>



