<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Current Stock</title>
    <link href="<?php echo base_url();?>Vendor_Main/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Vendor_Main/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Vendor_Main/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Vendor_Main/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Vendor_Main/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Vendor_Main/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Vendor_Main/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Vendor_Main/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Vendor_Main/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Vendor_Main/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url();?>images/logo.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <h2>Welcome</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
					<li><a href="<?php echo base_url();?>AMR_VendorController/Dashboard"><i class="fa fa-home"></i>Dashboard</a></li>
					<li><a href="<?php echo base_url();?>AMR_VendorController/Orders"><i class="fa fa-book"></i>Orders</a></li>
					<li><a href="<?php echo base_url();?>AMR_VendorController/ItemPackage"><i class="fa fa-book"></i>Item Package</a></li>
					<li><a href="<?php echo base_url();?>AMR_VendorController/Areas"><i class="fa fa-globe"></i>Delivery Areas</a></li>
					<li><a href="<?php echo base_url();?>AMR_VendorController/CurrentStock"><i class="fa fa-bar-chart"></i>Current Stock</a></li>
					<li><a href="<?php echo base_url();?>AMR_VendorController/PurchaseHistory"><i class="fa fa-book"></i>Purchase History</a></li>
					<li><a href="<?php echo base_url();?>AMR_VendorController/SaleHistory"><i class="fa fa-book"></i>Sale History</a></li>
					<li><a href="<?php echo base_url();?>AMR_VendorController/DamageStock"><i class="fa fa-trash"></i>Damage Stock</a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Settings
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Change Password</a></li>
                    <li><a href="<?php echo base_url();?>AMR_VendorController/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
			<div class="row">
              <div class="col-md-12 col-xs-12">
				<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
					<thead>
                     <tr>
                        <th>Serial No</th>
						<th>Item Name</th>
						<th>Quantity</th>
                    </tr>
					</thead>
					<tbody>
						<?php 
						$count=0;
						foreach($CurrentStock as $row)
						{
							$count++;
							?>
						<tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $row["ItemName"];?></td>
						<td><?php echo $row["Quantity"];?></td>
						</tr>
						<?php
						}
						?>
					</tbody>
                </table>
              </div>
            </div>
			</form>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           Powered by <a href="http://www.24techsoft.com">24 Tech Soft</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <script src="<?php echo base_url();?>Vendor_Main/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/fastclick/lib/fastclick.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/nprogress/nprogress.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/google-code-prettify/src/prettify.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/parsleyjs/dist/parsley.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/autosize/dist/autosize.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/starrr/dist/starrr.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/build/js/custom.min.js"></script>
	<script src="<?php echo base_url();?>Vendor_Main/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url();?>Vendor_Main/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>Vendor_Main/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url();?>Vendor_Main/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
	
  </body>
</html>
