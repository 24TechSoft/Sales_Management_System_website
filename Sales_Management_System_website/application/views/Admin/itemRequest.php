<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="text/javascript" src="/agriculture-food/js/jquery-1.7.1.min.js"></script>
    <title> Item Request  </title>

  
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
       
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Item Request</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
			
            <div class="row">
			
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
				  <h2>Item Request</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
				  <?php foreach($Requests as $row) { ?>
                  <div class="x_content">
                    <br />
					
                   <h2>
				   <?php
					if($row["Status"]==0){
				    echo $row["FromWarehouse"];?> has requested <?php echo $row["ItemName"];?> of <?php echo $row["Quantity"];?> kg from <?php echo $row["ToWarehouse"];?>&nbsp;&nbsp;
				   
				   
				   <a href="<?php echo base_url();?>WarehouseMaster/approveRequest/<?php echo $row["ID"];?>/<?php echo $row["Quantity"];?>/<?php echo $row["FWarehouseID"]; ?>/<?php echo $row["ItemID"];?>">Approve</a>&nbsp;&nbsp;<a href="<?php echo base_url();?>WarehouseMaster/declineRequest/<?php echo $row["ID"];?>/<?php echo $row["FWarehouseID"]; ?>">Decline</a>
					<?php } 
					
					else if($row["Status"]==1){
				    echo $row["ToWarehouse"];?> has approved requests of <?php echo $row["ItemName"];?>( Quantity: <?php echo $row["Quantity"];?> ) from <?php echo $row["FromWarehouse"];
					} 					
					else if($row["Status"]==2){
					echo $row["ToWarehouse"];?> has declined requests  of <?php echo $row["ItemName"];?>( Quantity:<?php echo $row["Quantity"];?> ) from <?php echo $row["FromWarehouse"]; } 	
					
					?>
				   </h2>
				   
				   
                    
                  </div>
				  <?php } ?>
                </div>
              </div>
			  
		
            </div>
			
			

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             Design & Develop By <a href="http://24techsoft.com" target="_blank">24TECHSOFT</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>Admin/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>Admin/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>Admin/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>Admin/js/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>Admin/js/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>Admin/js/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>Admin/js/moment.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url();?>Admin/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url();?>Admin/js/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url();?>Admin/js/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url();?>Admin/js/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url();?>Admin/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url();?>Admin/js/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url();?>Admin/js/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url();?>Admin/js/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?php echo base_url();?>Admin/js/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>Admin/js/custom.min.js"></script>
	
	<!-- Datatables -->
    <script src="<?php echo base_url();?>Admin/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>Admin/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/jszip.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>Admin/js/vfs_fonts.js"></script>
	<script>
	
	</script>
	
  </body>
</html>
