<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>
<?php include('admin.header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3  jumbotron ">
			<div  style="text-align: center;">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" >
				Choose Section: <select name="section" class="btn" style="margin-right: 30px;">					<option>Select</option>
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
									<option>E</option>
								</select>
				<input type="submit" name="search" value="SEARCH" class="btn btn-success">
			</form>
			</div>
		</div>
	</div>

<?php
    echo  ErrorMessage();
    echo  SuccessMessage();
 ?>
<table class="table table-bordered table-striped table-responsive">
	<h3 class="text-center">Update Student's Information</h3><br>
	<tr class="text-center">
		<th>Roll No</th>
		<th>Section</th>
		<th>Full Name</th>
		<th>City</th>
		<th>Student MobileNo</th>
		<th>Record Submitted</th>
		<th>Lab Marks</th>
		<th>Total Percentage</th>
	</tr>
<?php 
	include('../dbcon.php');
	if (isset($_POST['search'])) {

		$section = $_POST['section'];

		$sql = "SELECT * FROM `student` WHERE `section` = '$section' ";

		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($DataRows = mysqli_fetch_assoc($result)) {
				$Id = $DataRows['id'];
				$RollNo = $DataRows['rollno'];
				$Name = $DataRows['name'];
				$City = $DataRows['city'];
				$Pcontact = $DataRows['pcontact'];
				$Section = $DataRows['section'];
                $RSubmited = $DataRows['record'];
                $Lmarks = $DataRows['marks'];
                $TPercentage = $DataRows['percentage'];

				?>
				<tr class="text-center">
					<td><?php echo $RollNo;?></td>
					<td><?php echo $Section;?></td>
					<td><?php echo $Name; ?></td>
					<td><?php echo $City; ?></td>
					<td><?php echo $Pcontact; ?></td>
					<td><?php echo $RSubmited; ?></td>
                    <td><?php echo $Lmarks; ?></td>
                    <td><?php echo $TPercentage; ?></td>
						
						
						
					<td><a href="UpdateRecord.php?Update=<?php echo $Id; ?>" class="btn btn-warning">UPDATE</a></td>
				</tr>
				<?php
				
			}
			
		} else {
			echo "<tr><td colspan ='7' class='text-center'>No Record Found</td></tr>";
		}
	}

 ?>
	

</table>
</div>
<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2><?php echo @$_GET['updated']; ?></h2>
			</div>
		</div>
	</div>	



<?php include('../footer.php');?>