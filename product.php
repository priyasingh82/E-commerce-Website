
<html>
    <head>
        <title> Product Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style2.css" type="text/css" >
        
    </head>
    <body>
       
       <?php
       
      require "includes/common.php";
      require "includes/header.php";
       include "includes/checkifadded.php";
        
       ?>  
        
        <div class="container" >
            <div class="row" style="margin-top:80px;">
                <div class="col-xs-12">
            <div class="jumbotron" style="background-color: #DFD7D7">
                <h1> Welcome to our Lifestyle Store! </h1>
                <p style="color: grey"> We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place</p>
            </div>
            </div>        
        </div>
        </div>   
        
        <div class="container">
            <div class="row text-center">
                         <div class="col-md-3 col-sm-6">
                         <div class="thumbnail">
                             <img src="images/5.jpg" alt="image" class="image-responsive">
                         <div class="caption">
                            <h3> Cannon EOS </h3>
                            <p> Price:Rs 36000.00 </p>
                            
                            <?php if (!isset($_SESSION['email'])) { ?> 
                            <p> <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php               
                             } else {          
                                
                                 if (check_if_added_to_cart(1)) { ?>
                                     <p> <a href="product.php" class="btn btn-block btn-success disabled" >Added to cart</a>;  
                                    <?php } else {                          
                                         ?>                         
                            <a href="cart-add.php?id=1" name="add"  class="btn btn-block btn-primary">Add to cart</a>        
                             <?php                             
                             }                        
                             }                        
                             ?> 
                            
                        </div>
                        </div>
                        </div>
                
                        <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/2.jpg" alt="image" class="image-responsive">
                        <div class="caption">
                            <h3> Sony DSLR </h3>
                            <p> Price:Rs 40000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p> <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php               
                             } else {          
                                
                                 if (check_if_added_to_cart(2)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                     } else {                          
                                         ?>                         
                            <a href="cart-add.php?id=2" name="add"  class="btn btn-block btn-primary">Add to cart</a>        
                             <?php                             
                             }                        
                             }                        
                             ?> 
                           
                        </div>
                        </div>
                        </div>
                
                       <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">                
                       <img src="images/3.jpg" alt="image" class="image-responsive">
                        <div class="caption">
                            <h3> Sony DSLR </h3>
                            <p> Price:Rs 50000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p> <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php               
                             } else {          
                                
                                 if (check_if_added_to_cart(3)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                     } else {                          
                                         ?>                         
                            <a href="cart-add.php?id=3" name="add"  class="btn btn-block btn-primary">Add to cart</a>        
                             <?php                             
                             }                        
                             }                        
                             ?> 
                            
                        </div>
                       </div>
                       </div>
                
                        <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/4.jpg" alt="image" class="image-responsive">
                        <div class="caption">
                            <h3> Olympus DSLR </h3>
                            <p> Price:Rs 80000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p> <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php               
                             } else {          
                                
                                 if (check_if_added_to_cart(4)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                     } else {                          
                                         ?>                         
                            <a href="cart-add.php?id=4" name="add"  class="btn btn-block btn-primary">Add to cart</a>        
                             <?php                             
                             }                        
                             }                        
                             ?> 
                            
                        </div>
                        </div>
                        </div>
                   </div>
            
            
            
                 <div class="row text-center">
                         <div class="col-md-3 col-sm-6">
                         <div class="thumbnail">
                         <img src="images/9.jpg" alt="image" class="image-responsive">
                         <div class="caption">
                            <h3> Titan Model #301 </h3>
                            <p> Price:Rs 13000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p> <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php               
                             } else {          
                                
                                 if (check_if_added_to_cart(5)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                     } else {                          
                                         ?>                         
                            <a href="cart-add.php?id=5" name="add"  class="btn btn-block btn-primary">Add to cart</a>        
                             <?php                             
                             }                        
                             }                        
                             ?> 
                           
                        </div>
                        </div>
                        </div>
                
                        <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/10.jpg" alt="image" class="image-responsive">
                        <div class="caption">
                            <h3> Titan Model #201 </h3>
                            <p> Price:Rs 3000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p> <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php               
                             } else {          
                                
                                 if (check_if_added_to_cart(6)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                      
                                    } else {                          
                                         ?>                         
                            <a href="cart-add.php?id=6" name="add"  class="btn btn-block btn-primary">Add to cart</a>        
                             <?php                             
                             }                        
                             }                        
                             ?> 
                           
                        </div>
                        </div>
                        </div>
                
                       <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">                
                       <img src="images/11.jpg" alt="image" class="image-responsive">
                        <div class="caption">
                            <h3> HMT Milan </h3>
                            <p> Price:Rs 8000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p> <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php               
                             } else {          
                                
                                 if (check_if_added_to_cart(7)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                     } else {                          
                                         ?>                         
                            <a href="cart-add.php?id=7" name="add"  class="btn btn-block btn-primary">Add to cart</a>        
                             <?php                             
                             }                        
                             }                        
                             ?> 
                          
                        </div>
                       </div>
                       </div>
                
                        <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/12.jpg" alt="image" class="image-responsive">
                        <div class="caption">
                            <h3> Faber Luba #111 </h3>
                            <p> Price:Rs 18000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p> <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php               
                             } else {          
                                
                                 if (check_if_added_to_cart(8)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                     } else {                          
                                         ?>                         
                            <a href="cart-add.php?id=8" name="add"  class="btn btn-block btn-primary">Add to cart</a>        
                             <?php                             
                             }                        
                             }                        
                             ?> 
                           
                        </div>
                        </div>
                        </div>
                
                    </div>
            
                    <div class="row text-center" style="margin-bottom: 45px">
                         <div class="col-md-3 col-sm-6">
                         <div class="thumbnail">
                         <img src="images/8.jpg" alt="image" class="image-responsive">
                         <div class="caption">
                            <h3> H&W </h3>
                            <p> Price:Rs 800.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p> <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php               
                             } else {          
                                
                                 if (check_if_added_to_cart(9)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                     } else {                          
                                         ?>                         
                            <a href="cart-add.php?id=9" name="add"  class="btn btn-block btn-primary">Add to cart</a>        
                             <?php                             
                             }                        
                             }                        
                             ?> 
                           
                        </div>
                        </div>
                        </div>
                
                        <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/6.jpg" alt="image" class="image-responsive">
                        <div class="caption">
                            <h3> Luis Phil </h3>
                            <p> Price:Rs 1000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p> <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php               
                             } else {          
                                
                                 if (check_if_added_to_cart(10)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                     } else {                          
                                         ?>                         
                            <a href="cart-add.php?id=10" name="add"  class="btn btn-block btn-primary">Add to cart</a>        
                             <?php                             
                             }                        
                             }                        
                             ?> 
                            
                        </div>
                        </div>
                        </div>
                
                       <div class="col-md-3 col-sm-6">
                       <div class="thumbnail">                
                       <img src="images/13.jpg" alt="image" class="image-responsive">
                        <div class="caption">
                            <h3> John Zok </h3>
                            <p> Price:Rs 1500.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p> <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php               
                             } else {          
                                
                                 if (check_if_added_to_cart(11)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                     } else {                          
                                         ?>                         
                            <a href="cart-add.php?id=11" name="add"  class="btn btn-block btn-primary">Add to cart</a>        
                             <?php                             
                             }                        
                             }                        
                             ?> 
                            
                        </div>
                       </div>
                       </div>
                
                        <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                        <img src="images/14.jpg" alt="image" class="image-responsive">
                        <div class="caption">
                            <h3> Jhalsani </h3>
                            <p> Price:Rs 1300.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?> 
                            <p> <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>    
                             <?php               
                             } else {          
                                
                                 if (check_if_added_to_cart(12)) { 
                                     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                                     } else {                          
                                         ?>                         
                            <a href="cart-add.php?id=12" name="add"  class="btn btn-block btn-primary">Add to cart</a>        
                             <?php                             
                             }                        
                             }                        
                             ?> 
                            
                        </div>
                        </div>
                        </div>
                
                    </div>
          </div>
            
       
        
        
        
        
            <div class="footer">
            <div class="container">
                <center>
                    <p style="padding-top: 10px;">
                         Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000
                    </p>
                </center>
            </div>
        </div>
        
    </body>
</html>
        
        

