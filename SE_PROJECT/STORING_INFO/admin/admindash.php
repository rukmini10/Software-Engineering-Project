<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<div class="header-section jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-12"  style="background-color: #212120">
				<h2 class="text-center" style="color:white">
					HELLO ADMIN!!!!
					<span><a href="logout.php" class="btn btn-warning" style="float: right;">LOGOUT</a><span>
				</h2>	
			</div>
		</div>
	</div>
</div>

<div class="admin-dashboard text-center">
        <div class="container">
        	
            <div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 jumbotron" >
                        <a href="addstudent.php" class="btn btn-primary btn-lg">ADD STUDENT DETAILS</a><br><br>
                        <a href="updatestudent.php" class="btn btn-primary btn-lg">UPDATE STUDENT DETAILS</a><br><br>
                        <a href="addfaculty.php" class="btn btn-primary btn-lg">ADD FACULTY DETAILS</a><br><br>
                          
                    </div>
                </div>
            </div>
        </div>
</div>



<?php include('../footer.php') ?>
