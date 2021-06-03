

<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['category']) || empty($_POST['qhaving']) || empty($_POST['qwant']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $Category = $_POST['category'];
            $QuantityHaving = $_POST['qhaving'];
            $QuantityWant = $_POST['qwant'];

            $query = " insert into record (Lab_Category, Lab_Quantity_Having,Lab_Quantity_Want) values('$Category','$QuantityHaving','$QuantityWant')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>