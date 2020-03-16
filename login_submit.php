<?php require 'includes/common.php' ;

$email= mysqli_real_escape_string($con,$_POST['email']);
$pswrd= mysqli_real_escape_string($con,$_POST['password']);

$select_query= "select id,email,password FROM user where email='$email' ";
$select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows= mysqli_num_rows($select_query_result);
if($total_rows==0)
{ echo "No user Found"; }
else {
    $row= mysqli_fetch_array($select_query_result);
    
if ($row['password']== $pswrd)
{
$_SESSION['email']= $email;
$_SESSION['id']= $row['id'];

 if(isset ($_SESSION['email'])){
     header('location: product.php');
 }
}
else 
{echo "Incorrect Password";}
}
?>


