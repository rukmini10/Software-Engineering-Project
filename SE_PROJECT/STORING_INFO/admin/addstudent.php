<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<?php include('admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3 class="text-center">INSERT STUDENT DETAILS</h3>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				      <input type="text" class="form-control" name="roll" placeholder="Enter Roll No" >
				  </div>
				  <div class="form-group">
				    
				    <input type="text" class="form-control" name="fullname" placeholder="Enter full name" required>
				  </div>
				  <div class="form-group">
				    
				    <input type="text" class="form-control" name="city" placeholder="Enter City" required>
				  </div>
				  <div class="form-group">
				    
				    <input type="text" class="form-control" name="pphone" placeholder="Enter Student MobileNo" required>
				  </div>
				  <div class="form-group">
				    
				    <input type="text" class="form-control" name="section" placeholder="Enter Section" required>
				  </div>

				   <div class="form-group">
				    
				    <input type="text" class="form-control" name="record" placeholder="Enter whether record has submitted or not" required>
				  </div>
				   <div class="form-group">
				    
				   <input type="number" class="form-control" name="marks" placeholder="Enter Lab Marks" required>
				  </div>
				  <div class="form-group">
				    
				   <input type="number" class="form-control" name="percentage" placeholder="Enter Total Percentage" required>
				  </div>

				  <button type="submit" name="submit" class="btn btn-success btn-lg">INSERT</button>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['roll']) && !empty($_POST['fullname'])) {
		
			include ('../dbcon.php');
			$roll=$_POST['roll'];
			$name=$_POST['fullname'];
			$city=$_POST['city'];
			$pphone=$_POST['pphone'];
			$section=$_POST['section'];
			$record=$_POST['record'];
			$marks=$_POST['marks'];
			$percentage=$_POST['percentage'];
			
			

			$sql = "INSERT INTO `student`( `rollno`, `name`, `city`, `pcontact`, `section`,`record`,`marks`,`percentage`) VALUES ('$roll','$name','$city','$pphone','$section','$record','$marks','$percentage')";

			$run = mysqli_query($conn,$sql);

			if ($run == true) {
				
				?>
				<script>
					alert("Data Inserted Successfully");
				</script>
				<?php
			} else {
				echo "Error : ".$sql."<br>". mysqli_error($conn); 
			}
		} else {
				?>
				<script>
					alert("Please insert atleast roll no. and fullname");
				</script>
				<?php
		}


	}

 ?>








