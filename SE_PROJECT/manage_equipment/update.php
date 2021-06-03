<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $ID = $_GET['ID'];
        $Category = $_POST['category'];
        $QuantityHaving = $_POST['qhaving'];
        $QuantityWant = $_POST['qwant'];

        $query = " update record set Lab_Category = '".$Category."', Lab_Quantity_Having='".$QuantityHaving."',Lab_Quantity_Want='".$QuantityWant."' where Lab_ID='".$ID."'";
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