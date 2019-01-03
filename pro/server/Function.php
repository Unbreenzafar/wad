<?php
require  "Database/Db_connection1.php";
function getproductCats()
{
    global $con;
    $getCatQuery="select * from product_category";
    $getCatResult=mysqli_query($con,$getCatQuery);
    while($row=mysqli_fetch_assoc($getCatResult))
    {
        $id=$row['Cat_id'];
        $title=$row['Cat_title'];
        echo  "<li><a class='nav-link' href='#'>$title</a></li>";
    }
}
function getProductBrand()
{
    global $con;
    $getCatQuery="select * from product_brand";
    $getCatResult=mysqli_query($con,$getCatQuery);
    while($row=mysqli_fetch_assoc($getCatResult))
    {
        $id=$row['pbrand_id'];
        $title=$row['pbrand_title'];
        echo  "<li><a class='nav-link' href='#'>$title</a></li>";
    }
}
function getproducts()
{
    global $con;
    $getCatQuery = "select * from products";
    $getCatResult = mysqli_query($con, $getCatQuery);
    while ($row = mysqli_fetch_assoc($getCatResult)) {
        $id = $row['p_id'];
        $title = $row['p_title'];
        echo "<li><a class='nav-link' href='#'>$title</a></li>";
    }
}
?>

