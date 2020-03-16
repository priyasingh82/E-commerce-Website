<?php 
require 'includes/common.php';
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <title> Lifestyle Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styling.css" type="text/css" >
     
        
    </head>
    <body>
        <?php
        if(isset($_SESSION['email'])){
        header('location: product.php');}
        ?>
        
        <?php  include 'includes/header.php'; ?>
        
         <div id="banner-image"> 
                         <div class="container">
                            <div id="banner-content" class="col-lg-offset-2">
                                <h1> We sell lifestyle. </h1>
                                <p> Flat 40% OFF on premium brands <p><br><br>
                                    <a href="product.php"> <button class="button btn-danger btn-lg "> Shop Now </button> </a>
                                
                                
                            </div>
                       </div>   
                    </div>
            
             
         <div class="container "> 
            
             <div class ="row" style="margin-bottom: 45px">
                 <div class="col-xs-4 ">
                    <div class="thumbnail ">
                        <img src="images/1.jpg" alt="">
                        <div class="caption" >
                        <h2> Cameras </h2>
                        <p> Choose among the best available in the world. </p>
                        </div>
                    </div>
                </div>    
            
           
            
            <div class ="col-xs-4">
                    <div class="thumbnail">
                     <img src="images/7.jpg" alt=""  >
                      <div class="caption" >
                        <h2> Watches </h2>
                        <p> Original watches from the best brand. </p>
                      </div>
                    </div>
            </div>
                
                
             <div class ="col-xs-4">
                    <div class="thumbnail">
                    <img  src="images/8.jpg" alt="">
                    <div class="caption" >
                        <h2> Shirts </h2>
                        <p> Our exquisite collection of shirts. </p>
                    </div>
                    </div>
            </div>
                 
           </div>
         </div>
        
        <?php include 'includes/footer1.php'; ?>
    </body>
</html>
