<?php 

    require_once("connection.php");
    $query = " select * from record ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>VIEW UPDATE DELETE </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<style type="text/css">
     body{
        background-image: url('https://jooinn.com/images/flower-background-22.jpg') ;
           background-size: 1600px 800px;
           background-repeat: no-repeat;
  background-attachment: fixed;


    }
   
</style>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td>  ID </td>
                                <td> Name </td>
                                <td> Type of hall </td>
                                <td> Date </td>
                                <td> Update Reservation  </td>
                                <td> Delete Reservation </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $ID = $row['Lab_ID'];
                                        $Category = $row['Lab_Category'];
                                        $QuantityHaving = $row['Lab_Quantity_Having'];
                                        $QuantityWant = $row['Lab_Quantity_Want'];
                            ?>
                                    <tr>
                                        <td><?php echo $ID ?></td>
                                        <td><?php echo $Category ?></td>
                                        <td><?php echo $QuantityHaving ?></td>
                                        <td><?php echo $QuantityWant ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $ID ?>">Update</a></td>
                                        <td><a href="delete.php?Del=<?php echo $ID ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>