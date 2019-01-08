<?php
require "Db_connection2.php";
if(isset($_POST['insert_Brand']))
{

    $title = $_POST['pbrand_title'];
    $insertQuery = "insert into product_brand(pbrand_title) values('$title');";
    $result = mysqli_query($con , $insertQuery);
    //echo $insertQuery;
    if (!$result)
    {
        echo "not executed";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Brand</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Brand </h1>
    <form action="insert_brand.php" method="post">
        <div class="row my-3">
            <div class="col-lg-2 col-md-4 col-sm-3 col-xl-2 d-none d-sm-block">
                <label for="pro_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Brand </span> Title:</label>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-9 col-xl-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                    </div>
                    <textarea class="form-control" type="file" id="pbrand_title" name="pbrand_title" placeholder="Enter Brand Title"></textarea>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-2 col-md-4 col-sm-3 col-xl-2 d-none d-sm-block"></div>
            <div class="col-lg-3 col-md-6 col-sm-9 col-xl-3">
                <button type="submit" name="insert_Brand" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>