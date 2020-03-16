<?php
    session_start();
    session_unset();
    session_destroy();
?>
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
 <br><br><br><br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <br><br>
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h4> LOGOUT </h4>
                            </div>
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  <br><br><br><br><br><br>
    <?php include 'includes/footer.php' ?> 
        
       
  </body>
   
</html>


