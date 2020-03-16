
<?php 
require 'includes/common.php' ;
if(isset($_SESSION['email']))
{ header('location:product.php') ;
}
?>
<html>
    <head>
        <title>SignUp Page </title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style2.css" type="text/css" >
        
    </head>
    <body>
       
       <?php include 'includes/header.php'; ?>  
        
    
           
            <div class="container">
                <div class="row" style="margin-top:100px;">
                    <div class="col-xs-6 col-xs-offset-3">
                         <form method="POST" action="signup_script.php"> 
                            <h1> SIGN UP </h1>
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" required >
                            </div> 
                            <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required >
                            </div>
                            <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required >
                            </div>  
                            <div class="form-group">
                            <input type="number" class="form-control" placeholder="Contact" name="contact" >
                            </div> 
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="City" name="city">
                            </div> 
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" name="address">
                            </div> 
                            <button type="submit" class="btn btn-primary"> Submit </button>
                       </form>
                    </div>
                </div>
            </div>
       <?php
        include 'includes/footer.php';
        ?>
        
     </body>
</html>



