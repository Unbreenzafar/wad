<?php
require "Function1.php";
if(isset($_POST['insert_pro']))
{

    $title = $_POST['pro_title'];
    $cat = $_POST['pro_cat'];
    $brand = $_POST['pro_brand'];
    $price = $_POST['pro_price'];
    $des = $_POST['pro_desc'];
    $keywords = $_POST['pro_kw'];
    $insertQuery = "insert into products(p_title,p_cat,p_brand,p_price,p_des,p_keywords) values('$title','$cat','$brand','$price','$des','$keywords');";
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
    <title>Insert Product</title>
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
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Product </h1>
    <form action="insert_product.php" method="POST">
        <div class="row">
            <div cclass="col-lg-2 col-md-4 col-sm-3 d-none d-sm-block col-xl-2">
                <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Title:</label>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-9 col-xl-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_title" name="pro_title" placeholder="Enter Product Title" >
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 d-none d-sm-block col-xl-2">
                <label for="pro_cat" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Category:</label>
            </div>
            <div class=" col-lg-3 col-md-6 col-sm-9 col-xl-3 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-list-alt"></i></div>
                    </div>
                    <select class="form-control" id="pro_cat" name="pro_cat">

                       <option>Select Category</option>
                        <?php getproductCats();?>
                        <!--<option>Mobile</option>
                        <option>Laptop</option>
                        <option>Tablet</option>
                        <option>Watch</option>
                        <option>Camera</option>-->
                    </select>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-2 col-md-4 col-sm-3 d-none d-sm-block col-xl-2">
                <label for="pro_brand" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Brand:</label>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-9 col-xl-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-stamp"></i></div>
                    </div>
                    <select class="form-control" id="pro_brand" name="pro_brand">
                        <option>Select Brand</option>
                        <?php getProductBrand();?>
<!--                        <option>Apple</option>-->
<!--                        <option>Samsung</option>-->
<!--                        <option>Oppo</option>-->
<!--                        <option>Dell</option>-->
<!--                        <option>HP</option>-->
<!--                        <option>Sony</option>-->
                    </select>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xl-2 d-none d-sm-block">
                <label for="pro_img" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Image:</label>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-9 col-xl-3 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-image"></i></div>
                    </div>
                    <input class="form-control" type="file" id="pro_img" name="pro_img">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-2 col-md-4 col-sm-3 col-xl-2 d-none d-sm-block">
                <label for="pro_price" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Price:</label>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-9 col-xl-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-money-bill"></i></div>
                    </div>
                    <input class="form-control" id="pro_price" name="pro_price" placeholder="Enter Product Price">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 d-none d-sm-block col-xl-2">
                <label for="pro_kw" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Keyword:</label>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-9 col-xl-3 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                    </div>
                    <input class="form-control" type="text" id="pro_kw" name="pro_kw" placeholder="Enter Product Keywords">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-2 col-md-4 col-sm-3 col-xl-2 d-none d-sm-block">
                <label for="pro_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Detail:</label>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-9 col-xl-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                    </div>
                    <textarea class="form-control" type="file" id="pro_desc" name="pro_desc" placeholder="Enter Product Detail"></textarea>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-2 col-md-4 col-sm-3 col-xl-2 d-none d-sm-block"></div>
            <div class="col-lg-3 col-md-6 col-sm-9 col-xl-3">
                <button type="submit" name="insert_pro" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>