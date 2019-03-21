<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Payments
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Payments
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Payment Id </th>
                                <th>Invoice No </th>
                                <th> Amount </th>
                                <th> Reference No </th>
                                <th> Code</th>
                                <th> Payment Date </th>
                                <th> Delete: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                
                            
                                $get_c = "select * from payments";
                                
                                $run_c = mysqli_query($con,$get_c);
          
                                while($row_c=mysqli_fetch_array($run_c)){
                                    
                                    $p_id = $row_c['payment_id'];
                                    
                                    $p_invoice = $row_c['invoice_no'];
                                    
                                    $ref_no = $row_c['ref_no'];
                                    $amount = $row_c['amount'];
                                    
                                    $code = $row_c['code'];
                                    
                                    $p_date = $row_c['payment_date'];
                                    
                                    
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $p_id; ?> </td>
                                <td> <?php echo $p_invoice; ?> </td>
                                <td> <?php echo $amount; ?> </td>
                                
                                <td> <?php echo $ref_no; ?> </td>
                                <td> <?php echo $code; ?></td>
                                <td> <?php echo $p_date; ?> </td>
                                
                                <td> 
                                     
                                     <a href="index.php?delete_payment=<?php echo $p_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>