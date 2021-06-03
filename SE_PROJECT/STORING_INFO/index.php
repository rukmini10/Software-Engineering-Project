
<?php
//include header part of html
 include('header.php')
  ?>
            
<!--
btn-lg   for extra large buttons
md   mixed mobile and desktop
--> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 jumbotron" style="background-color: #212120">
                            <h2 style="text-align: center;color: white">
                              
                                <span style="float: right;"><a href="login.php" class="btn btn-primary btn-lg">Admin Login</a></span>
                            </h2>
                    </div>
                </div>
            </div>

            <div class="student-info text-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 jumbotron">
                            <h3>Search Here For Students Info</h3>
                            <form action="index.php" method="post">
                <input type="text" name="roll" placeholder="Enter Roll Number" style="width: 240px;height: 35px;"><span>  OR<span>
                 <select name="section" class="btn" >
                                    <option>SELECT SECTION</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                </select>
                  <input type="submit" name="show" value="SHOW INFO" class="btn btn-success text-center" style="margin-left: 30px;" >  
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<table class="table table-striped table-bordered table-responsive text-center">
    <tr >
        <th class="text-center">Roll No</th>
        <th class="text-center">Section</th>
        <th class="text-center">Full Name</th>
        <th class="text-center">City</th>
        <th class="text-center">Student MobileNo</th>
        <th class="text-center">Record Submitted</th>
        <th class="text-center">Lab Marks</th>
        <th class="text-center">Total Percentage</th>
    </tr>
<?php 
    include('dbcon.php');
    if (isset($_POST['show'])) {

        $Section = $_POST['section'];
        $RollNo = $_POST['roll'];

        $sql = "SELECT * FROM `student` WHERE `section` = '$Section' OR `rollno`='$RollNo'";

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
                <tr>
                    <td><?php echo $RollNo;?></td>
                    <td><?php echo $Section;?></td>
                    <td><?php echo $Name; ?></td>
                    <td><?php echo $City; ?></td>
                    <td><?php echo $Pcontact; ?></td>
                    <td><?php echo $RSubmited; ?></td>
                    <td><?php echo $Lmarks; ?></td>
                    <td><?php echo $TPercentage; ?></td>
                </tr>
                <?php
                
            }
            
        } else {
            echo "<tr><td colspan ='7' class='text-center'>No Record Found</td></tr>";
        }
    }

 ?>
    


<!--include header part of html-->
<?php include('footer.php') ?>

