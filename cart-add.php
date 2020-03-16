<?php
require 'includes/common.php';
$user_id = $_SESSION['id'];
$product_id= $_GET['id'];
$insert_query= "INSERT INTO user_product(user_id,product_id,status) VALUES ('$user_id', '$product_id', 'Added to Cart')";
$insert_query_submit = mysqli_query($con,$insert_query) or die (mysqli_error($con));
if(isset ($_SESSION['email']))
{
    header('location: product.php');
}

