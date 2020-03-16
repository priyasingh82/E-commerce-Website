<?php
    
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update user_product set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
?>
<html>
    <head>
        <title>Success Page </title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styling.css" type="text/css" >
        
    </head>
<body>
       
      <?php include 'includes/header.php'; ?>
 <br><br> <br> <br>
            <div class="container">
                <div class="row " >
                    <br><br><br><br><br><br>
                    <div class="col-xs-7 col-xs-offset-2">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h5><b> Successful <b></h5>
                            </div>
                            <div class="panel-body">
                                <p>Your order is confirmed. Thank you for shopping with us. <a href="product.php">Click here</a> to purchase any other item.</p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>  

 <br> <br> <br> <br> <br>
 <?php include 'includes/footer.php' ?> 
    </body>
</html>    