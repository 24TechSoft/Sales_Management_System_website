<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Orders</title>
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
				<div class="col-md-2 col-xs-12">
					<label>Order Code: </label><?php echo $OrderDetail[0]["VOrderCode"];?>
				</div>
				<div class="col-md-2 col-xs-12">
					<label>Order Value: </label><?php echo $OrderDetail[0]["TotalOrderValue"];?>
				</div>
				<div class="col-md-2 col-xs-12">
					<label>Delivery Charge: </label><?php echo $OrderDetail[0]["DeliveryCharge"];?>
				</div>
				<div class="col-md-2 col-xs-12">
					<label>Discount Amount: </label><?php echo $OrderDetail[0]["DiscountAmount"];?>
				</div>
				<div class="col-md-2 col-xs-12">
					<label>Grand Total: </label><?php echo $OrderDetail[0]["GrandTotal"];?>
				</div>
				<div class="col-md-2 col-xs-12">
					<label>Payment Status: </label><?php if($OrderDetail[0]["PaymentStatus"]==1){echo "Paid";}else{echo "Unpaid";}?>
				</div>
				<form method="post" action="<?php echo base_url();?>AMR_VendorController/UpdateOrderStatus/<?php echo $OrderDetail[0]["ID"];?>">
					<div class="col-md-3 col-xs-12">
						<label>Address:</label>
						<p>
							Contact Person: <?php echo $DeliveryAddress[0]["ContactPerson"];?><br>
							Contact No: <?php echo $DeliveryAddress[0]["ContactNo"];?><br>
							Address: <br><?php echo nl2br($DeliveryAddress[0]["AddressLine1"])."<br>".nl2br($DeliveryAddress[0]["AddressLine2"]);?>
						</p>
					</div>
					<div class="col-md-3 col-xs-12">
						<p><br>
							Location: <?php echo $DeliveryAddress[0]["Location"];?><br>
							City: <?php echo $DeliveryAddress[0]["City"];?><br>
							State: <?php echo $DeliveryAddress[0]["State"];?><br>
							Pin Code: <?php echo $DeliveryAddress[0]["PinCode"];?>
						</p>
					</div>
					<div class="col-md-3 col-xs-12">
						<select class="form-control" name="Status">
							<option value="0" <?php if($OrderDetail[0]["Status"]==0) echo "selected='selected'";?>>Pending</option>
							<option value="1" <?php if($OrderDetail[0]["Status"]==1) echo "selected='selected'";?>>Confirm</option>
							<option value="2" <?php if($OrderDetail[0]["Status"]==2) echo "selected='selected'";?>>Dispatched</option>
							<option value="3" <?php if($OrderDetail[0]["Status"]==3) echo "selected='selected'";?>>Delivered</option>
							<option value="4" <?php if($OrderDetail[0]["Status"]==4) echo "selected='selected'";?>>Cancelled</option>
						</select>
					</div>
					<div class="col-md-3 col-xs-12">
						<button type="submit" class="btn btn-default">Update</button>
					</div>
				</form>
            </div>
			<div class="row">
			 <!-- ID 	OrderID 	ItemID 	ItemName 	PackageName  PackageQuantity	Quantity 	Price 	TotalPrice 	VendorID -->
			 <div class="col-md-12 col-xs-12">
				<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap">
					<thead>
                     <tr>
                        <th>Item Name</th>
						<th>Package Name</th>
						<th>Package Quantity</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Total Price</th>
						<th>Settings</th>
                    </tr>
					</thead>
					<tbody>
						<?php foreach($OrderItems as $row)
						{
							?>
						<tr>
						<td><?php echo $row["ItemName"];?></td>
						<td><?php echo $row["PackageName"];?></td>
						<td><?php echo $row["PackageQuantity"];?></td>
						<td><?php echo $row["Quantity"];?></td>
						<td><?php echo $row["Price"];?></td>
						<td><?php echo $row["TotalPrice"];?></td>
						<td><a href="<?php echo base_url();?>AMR_VendorController/DeleteOrderItem/<?php echo $row["ID"];?>" class="btn btn-info">Delete</a></td>
						</tr>
						<?php
						}
						?>
					</tbody>
                </table>
              </div>
			</div>
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
