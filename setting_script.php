<?php require "includes/common.php" ;
if(!isset ($_SESSION['email']))
{ header('location:index.php');
}
$email=$_SESSION['email'];
$old_pswrd = mysqli_real_escape_string($con,$_POST['op']);
$new_pswrd = mysqli_real_escape_string($con,$_POST['np']);
$retype_pswrd =mysqli_real_escape_string($con,$_POST['npw']);



$select_query= "SELECT Password FROM user WHERE email= '$email' ";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
$row= mysqli_fetch_array($select_query_result);

 if ($row['Password'] != $old_pswrd)
{
echo "Incorrect old password";
    
}
else if($old_pswrd == $new_pswrd)
{
    echo "Reset a new password";
}

else if ($new_pswrd == $retype_pswrd)
{$update_query = "UPDATE user SET Password='$new_pswrd' where email= '$email' " ;
    $update_query_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
    echo "Password Updated";
}
else{

echo "Password mismatch";

} 

?>
