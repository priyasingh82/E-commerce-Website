<?php
require 'includes/common.php';
if (!isset($_SESSION['id']))
{header('location: login.php');
}
$user_id=$_SESSION['id'];
$user_products_query="select p.id,p.name,p.Price from user_product up inner join product p on p.id=up.product_id where up.user_id='$user_id'";
$user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
$no_of_user_products= mysqli_num_rows($user_products_result);
$sum=0;
if($no_of_user_products==0){
echo "Add items to cart first.";}
else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['Price']; 
       }
    }
    ?>
       

  <html>
    <head>
        <title> Cart Page</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style2.css" type="text/css" >
        
    </head>
    <body>
        <div>
        <?php 
               include 'includes/header.php';
            ?>
            <br><br><br><br><br><br><br>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['name']?></th><th><?php echo $row['Price']?></th>
                            <th><a href='cart_remove.php?id= <?php echo $row['id']?>'>Remove</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            <th></th><th>Total</th><th>Rs <?php echo $sum;?>/-</th><th><a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
       
      
         
       
           
        
        
        
        
        
        
        <?php  include 'includes/footer.php' ?> ;
        
    </body>
</html>
        
  
}

