<?php
require "Db_connection2.php";

function getproductCats()
{
    global $con;
    $getCatQuery="select * from product_category";
    $getCatResult=mysqli_query($con,$getCatQuery);
    while($row=mysqli_fetch_assoc($getCatResult))
    {
        $id=$row['Cat_id'];
        $title=$row['Cat_title'];
        echo  "<option value='$id'>$title</option>";
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
        echo  "<option value='$id'>$title</option>";
    }
}
?>