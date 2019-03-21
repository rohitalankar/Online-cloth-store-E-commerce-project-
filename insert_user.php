<body>
      <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           
           
         
   
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> Create  a new Admin account </h2>
                           
                       </center><!-- center Finish -->
                       
                       <form action="" method="post" enctype="multipart/form-data"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Admin email</label>
                               
                               <input type="email" class="form-control" name="admin_name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Admin Password</label>
                               
                               <input type="Password" class="form-control" name="admin_pass" required>
                               
                           </div><!-- form-group Finish -->
                           
                           
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="register" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Create Admin
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   
    


<?php 

if(isset($_POST['register'])){
    
    $admin_email = $_POST['admin_name'];
    
    $admin_pass = $_POST['admin_pass'];
    
   
    $insert_admin = "insert into admins (admin_email,admin_pass) values ('$admin_email','$admin_pass')";
    
    $run_admin = mysqli_query($con,$insert_admin);
    
    
    
    if($run_admin){
        
        /// If register have items in cart ///
        
        
        
        echo "<script>alert('You have been created new admins account')</script>";
        
        echo "<script>window.open('dashboard.php','_self')</script>";
        
    }
    
}

?>