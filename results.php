<?php
$active='Shop';
 include('includes/header.php');
?>
   <div id="content"><!--content start-->
       <div class="container">
           <div class="col-md-12">
               <ul class="breadcrumb">
                   <li><a href="index.php">Home</a></li>
                   <li>
                       Shop
                   </li>
               </ul>
           </div>
           <div class="col-md-3">
              <?php 
    include("includes/sidebar.php");
    ?>
 </div>
      <div class="col-md-9"><!--colo-md-9 begin-->
         
          <div class="row">
             <?php
              if(isset($_GET['search'])){
                  $search_user=$_GET['user_query'];
                $per_page = 6;
                  if(isset($_GET['page'])){
                      $page = $_GET['page'];
                  }
                  else{
                      $page =1;
                  }
                  $start_from = ($page-1)*$per_page;
                  $get_products = "select * from products where product_title like '%$search_user%' OR product_keywords like '%$search_user%'";
                  $run_products = mysqli_query($con,$get_products);
                   $count = mysqli_num_rows($run_products);
         if($count==0){
             echo"<div class='box'> <h1 align='center'style='color:#FF4C4C;'>NO,Such Result Found! </h1></div>";
         }
               else{   mysqli_query($con,"update products set view = view +1");
                  while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        
        $pro_title = $row_products['product_title'];
        
        $pro_price = $row_products['product_price'];
        
        $pro_img1 = $row_products['product_img1'];
        
        echo "
        
        <div class='col-md-4 col-sm-6 single'>
        
            <div class='product' style='height:400px;width:100%'>
            
                <a href='details.php?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='admin_area/product_images/$pro_img1' style='height:200px;width:100%'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                        $ $pro_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                            View Details

                        </a>
                    
                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
        
        ";
        
    }
                  }
                  ?>
          </div>
         <?php } ?>
              <?php 
              getcatpro();
              ?>
          
      </div>
       </div>
   </div><!--content finish-->
   <div style="text-align:center;">
   <?php 
    include("includes/footer.php");
    ?>
</div>
   <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <?php 

    include("chat.php");
?>
    
    </body>
</html>
