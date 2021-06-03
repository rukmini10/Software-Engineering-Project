<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $ID = $_GET['Del'];
            $query = " delete from record where Lab_ID = '".$ID."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:view.php");
        }

?>