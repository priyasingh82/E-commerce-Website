<?php 
require "includes/common.php" ;
$email= mysqli_real_escape_string($con,$_POST['email']);
$name= mysqli_real_escape_string($con,$_POST['name']);
$password= mysqli_real_escape_string($con,$_POST['password']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$contact= mysqli_real_escape_string($con,$_POST['contact']);
$address= mysqli_real_escape_string($con,$_POST['address']);



$select_query="SELECT id FROM user WHERE email= '$email' ";
$select_query_result= mysqli_query($con,$select_query) or die (mysqli_error($con));
$total_rows= mysqli_num_rows($select_query_result);
if ($total_rows > 0)
{
    echo "email-id already exist";
}
else {

$user_registration_query= "insert into user (email,name,password,city,address,contact) values ('$email','$name','$pswd','$city','$address','$contact')";  
$user_reg_submit= mysqli_query($con,$user_registration_query) or die (mysqli_error($con));
echo "User Registered successfully";

$user_id= mysqli_insert_id($con);
$_SESSION['email']=$email;
$_SESSION['id']= $user_id;

}
 if(isset ($_SESSION['email'])){
     header('location: product.php');
 }
?>



