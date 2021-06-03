<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php 

	include('../dbcon.php');
	$update_record = isset($_GET['Update']) ? $_GET['Update'] : '';
	//$update_record= $_GET['Update'];
	$sql = "select * from student where id = '$update_record'";
	$result = mysqli_query($conn,$sql);

	while ($data_row = mysqli_fetch_assoc($result)) {
		$update_id = $data_row['id']; 
		$Roll = $data_row['rollno'];
		$Name = $data_row['name'];
		$City = $data_row['city'];
		$Pcontact = $data_row['pcontact'];
		$section=$data_row['section'];
		$record=$data_row['record'];
		$marks=$data_row['marks'];
		$percentage=$data_row['percentage'];
		

	}

 ?>

<?php include('../header.php') ?>

<?php include('admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3 class="text-center">UPDATE STUDENT DETAIL</h3>
			<form action="UpdateRecord.php?update_id=<?php echo $update_id;?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				      Roll No:<input type="text" class="form-control" name="roll" value="<?php if(isset($Roll)) echo $Roll;?>" >
				  </div>
				  <div class="form-group">
				    
				    Full Name:<input type="text" class="form-control" name="fullname" value="<?php echo (isset($Name)) ? $Name : ''; ?>" placeholder="full name" required>
				  </div>
				  <div class="form-group">
				      City: <input type="text" class="form-control" name="city" value="<?php echo $City;?>"  required>
				  </div>
				  <div class="form-group">
				    
				     Student MobileNo:<input type="text" class="form-control" name="pphone" value="<?php echo $Pcontact;?>" required>
				  </div>
				  <div class="form-group">
				    
				    Section<input type="text" class="form-control" name="section" value="<?php echo $section;?>" required>
				  </div>

				  <div class="form-group">
				    
				    Record Submitted<input type="text" class="form-control" name="record" value="<?php echo $record;?>" required>
				  </div>
				   <div class="form-group">
				    
				   Lab Marks<input type="number" class="form-control" name="marks" value="<?php echo $marks;?>" required>
				  </div>
				  <div class="form-group">
				    
				   Total Percentage<input type="number" class="form-control" name="percentage" value="<?php echo $percentage;?>" required>
				  </div>

				  <button type="submit" name="submit" class="btn btn-success btn-lg">UPDATE</button>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>


<?php 
//This php code block is for editing the data that we got after clicking on update button
	if (isset($_POST['submit'])) {
		if (!empty($_POST['roll']) && !empty($_POST['fullname'])) {
		
			include ('../dbcon.php');
			$id = $_GET['update_id'];
			$roll=$_POST['roll'];
			$name=$_POST['fullname'];
			$city=$_POST['city'];
			$pphone=$_POST['pphone'];
			$section=$_POST['section'];
			$record=$_POST['record'];
			$marks=$_POST['marks'];
			$percentage=$_POST['percentage'];

			$sql = "UPDATE student SET rollno = '$roll', name = '$name', city='$city', pcontact = '$pphone', section = '$section' , record = '$record', marks = '$marks', percentage = '$percentage' WHERE id = '$id'";

			$Execute = mysqli_query($conn,$sql);

			if ($Execute) {
				 $_SESSION['SuccessMessage'] = " Data Updated Successfully";
                Redirect_to("updatestudent.php");

			}


		}

	}

 ?>