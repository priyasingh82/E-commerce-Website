<?php require 'includes/common.php' ?>


<html>
    <head>
        <title>Login Page </title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styling.css" type="text/css" >
        
    </head>
    <body>
       
      <?php include 'includes/header.php'; ?>
        
        
        
        
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-5 col-xs-offset-3">
                    <form method="POST" action="login_submit.php">
                    <div class="panel panel-primary" >
                        
                        <div class="panel-heading"> LOGIN </div>
                        
                        <div class="panel-body" >
                            <p class='text-warning'> Login to make a purchase </p> 
                            
                            <div class='form-group'>
                            <input type='email' placeholder="Email" name='email' class='form-control'>
                            </div>
                        
                             <div class='form-group'>
                            <input type='password' placeholder="Password" name='password' class='form-control'>
                            </div>
                        
                            <a href="productpage.php">  <button class='btn btn-primary'>Login </button></a>
                        </div>
                        
                        <div class="panel-footer">
                             Don't have an account? <a href='signup.php'> Register </a>
                        </div>
                    </div>
                    </form>    
                </div>
            </div>
                 
        </div>
        
        
    
          <?php include 'includes/footer.php' ?> 
        
       
  </body>
   
</html>

