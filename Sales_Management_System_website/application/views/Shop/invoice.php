<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="Fruit Shop is new Html theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Html theme, with multiple versions for homepage and multiple templates for sub pages as well" />
	<meta name="keywords" content="Fruit,7uptheme" />
	<meta name="robots" content="noodp,index,follow" />
	<meta name='revisit-after' content='1 days' />
	<title> ABAD AGRO | INVOICE </title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/ionicons.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/jquery.fancybox.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/jquery-ui.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/owl.transitions.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/jquery.mCustomScrollbar.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/owl.theme.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/hover.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/color.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/theme.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/responsive.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/css/browser.css" media="all"/>
	<!---sweetalert-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Main/dist/sweetalert.css" media="all"/>
	<!--font awesome-->
    <script src="https://use.fontawesome.com/93f67c57ef.js"></script>
	
	

</head>
<body>
<div class="wrap" >
	<header id="header">
		<div class="header">
			
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-12">
							
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							
						</div>
						<div class="col-md-5 col-sm-5 col-xs-12">
						</div>
					</div>
				</div>
			</div>
			<!-- End Main Header -->
			<div class="nav-header bg-white header-ontop">
				<div class="container">
				</div>
			</div>
			<!-- End Nav Header -->
		</div>
	</header>
	<!-- End Header -->
	<section id="invoice-content">
		<div class="container" >
			<div class="content-page">
				<h2 class="title24 text-uppercase text-center">Invoice</h2>
				<div class="content-cart-checkout woocommerce">
					<div class="container invoicedet">
						<?php foreach($Bill as $bill){?> 
						<div class="row" id="pdf">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<label>Order Number: <?php echo $bill["OrderCode"];?></label></br>
								<label>Order Date: <?php echo $bill["OrderDate"];?></label>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<label>Invoice Number: <?php echo $bill["ID"];?></label></br>
								<label>Invoice Date: <?php echo $bill["BillDate"];?></label>
							</div>
						</div>
						<?php } ?>
						<div class="row">
						<?php foreach($Vendor as $ven){?>
							<div class="col-md-6 col-sm-6 col-xs-12">
							<label>Shipping Address:</label>
								<p><strong><?php echo $ven["Name"];?></strong></br>
								<?php echo $ven["Address1"];?></br>
								<?php echo $ven["Address2"];?></br>
								City: <?php echo $ven["City"];?>  &nbsp; State: <?php echo $ven["State"];?> </br>
								PinCode: <?php echo $ven["PinCode"];?></p>
							</div>
						<?php } ?>
						</div>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Sl No</th>
										<th>Item</th>
										<th>Quantity</th>
										<th>Amount</th>
									</tr> 
								</thead>
								
								<tbody>
								<?php $count=0; foreach($Item as $item){ $count++;?>
									<tr>
										<td><?php echo $count;?></td>
										<td><?php echo $item["ItemName"];?></td>
										<td><?php echo ($item["TotalQuantity"]/1000);?> kg</td>
										<td><?php echo $item["TotalPrice"];?></td>
									</tr>
									<?php } ?>
									<tr>
										<td colspan="3"><strong>Total</strong></td>
										<td><?php echo $TotalAmount;?></td>
									</tr>
									<tr>
										<td colspan="3"><strong>Amount In Text</strong></td>
										<td><?php echo $AmountText;?></td>
									</tr>
								</tbody>
								
							</table>
							
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- End Content Pages -->
	</section>
	
	<!-- End Content -->
	<footer id="footer">
		<div class="footer">
			<!-- End Main Footer -->
			<div class="bottom-fotter">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<p class="copyright silver text-left">Copyright © 2017 ABAD AGRO - All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<!-- End Preload -->
</div>
<script type="text/javascript" src="<?php echo base_url();?>Main/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Main/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Main/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Main/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Main/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Main/js/jquery.jcarousellite.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Main/js/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Main/js/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Main/js/slick.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Main/js/popup.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Main/js/timecircles.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Main/js/wow.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Main/js/theme.js"></script>

<!--sweet alert-->
<script type="text/javascript" src="<?php echo base_url();?>Main/dist/sweetalert-dev.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Main/dist/sweetalert.min.js"></script>
<!------>

</body>
</html>