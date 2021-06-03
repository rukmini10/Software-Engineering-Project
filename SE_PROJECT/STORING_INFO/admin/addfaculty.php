<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<?php include('admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3 class="text-center">INSERT FACULTY DETAILS</h3>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				      <input type="text" class="form-control" name="rollno" placeholder="Enter ID" >
				  </div>
				  <div class="form-group">
				    
				    <input type="text" class="form-control" name="fullname" placeholder="Enter full name" required>
				  </div>
				  <div class="form-group">
				    
				    <input type="text" class="form-control" name="city" placeholder="Enter City" required>
				  </div>
				  <div class="form-group">
				    
				    <input type="text" class="form-control" name="pphone" placeholder="Enter MobileNo" required>
				  </div>
				  <div class="form-group">
				    
				    <input type="text" class="form-control" name="dept" placeholder="Enter Department" required>
				  </div>

				   <div class="form-group">
				    
				    <input type="text" class="form-control" name="mailid" placeholder="Enter Mail Id" required>
				  </div>
				   <div class="form-group">
				    
				   <input type="text" class="form-control" name="edu" placeholder="Enter Education" required>
				  </div>
				  <div class="form-group">
				    
				   <input type="text" class="form-control" name="profession" placeholder="Enter Profession" required>
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
		
			include ('../dbcon1.php');
			$rollno=$_POST['rollno'];
			$name=$_POST['fullname'];
			$city=$_POST['city'];
			$pphone=$_POST['pphone'];
			$dept=$_POST['dept'];
			$mailid=$_POST['mailid'];
			$edu=$_POST['edu'];
			$profession=$_POST['profession'];
			
			

			$sql = "INSERT INTO `faculty`( `rollno`, `name`, `city`, `pcontact`, `dept`,`mailid`,`edu`,`profession`) VALUES ('$rollno','$name','$city','$pphone','$dept','$mailid','$edu','$profession')";

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








