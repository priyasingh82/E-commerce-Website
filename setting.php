<?php require "includes/common.php"; 
if(!isset ($_SESSION['email']))
{ header('location:index.php');
}
?>

<html>
    <head>
        <title> Settings Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style2.css" type="text/css" >
        
    </head>
    <body>
       
       <?php include "includes/header.php"; ?>
        
        
        <form method='POST' action='setting_script'>
            <div class="container">
                <div class="row" style="margin-top:100px;">
                    <div class="col-xs-6 col-xs-offset-3">
                        <h3> Change Password </h3>
                         <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="op">
                        </div> 
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="np">
                        </div> 
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Re-type New Password" name="npw">
                        </div>  
                    <button type="submit" class="btn btn-primary"> Submit </button>
                    
                    </div>
                </div>
            </div>
        </form>
        
        
        <?php include "includes/footer.php"; ?>
  
  </body>
</html>
