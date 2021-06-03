<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>RESERVATION</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<style>
    body{
        background-image: url('https://images.unsplash.com/photo-1543157145-f78c636d023d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTB8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80') ;
           background-size: 1600px 800px;
           background-repeat: no-repeat;
  background-attachment: fixed;


    }
</style>
<body class="bg-dark" ><br><br><br><br><br>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-primary text-black text-center py-3"> BOOK A HALL </h3>
                        </div>
                        <div class="card-body">

                            <form action="insert.php" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Name " name="category">
                                <input type="text" class="form-control mb-2" placeholder=" Type of hall " name="qhaving">
                                <input type="text" class="form-control mb-2" placeholder=" Date " name="qwant">
                                <button class="btn btn-primary" name="submit">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>