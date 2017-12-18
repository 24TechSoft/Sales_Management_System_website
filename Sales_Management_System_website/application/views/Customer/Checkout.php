<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="Fruit Shop is new Html theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Html theme, with multiple versions for homepage and multiple templates for sub pages as well" />
	<meta name="keywords" content="Fruit,7uptheme" />
	<meta name="robots" content="noodp,index,follow" />
	<meta name='revisit-after' content='1 days' />
	<title>Abad Agro Organic Store | Check out</title>
	<link rel="shortcut icon" href="<?php echo base_url();?>Customer_Main/images/logo.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>Customer_Main/images/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/ionicons.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/jquery.fancybox.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/jquery-ui.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/owl.transitions.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/jquery.mCustomScrollbar.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/owl.theme.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/hover.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/color.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/theme.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/responsive.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Customer_Main/css/browser.css" media="all"/>
	<!--font awesome-->
    <script src="https://use.fontawesome.com/93f67c57ef.js"></script>
	
	

</head>
<body>
<div class="wrap">
	<header id="header">
		<div class="header">
			
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-12">

						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div class="logo logo1">
								<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>Customer_Main/images/logo.png" alt="" /></a>
							</div>
						</div>
						<div class="col-md-5 col-sm-5 col-xs-12">

								<ul class="info-account list-inline-block pull-right">
									<li><a href="<?php echo base_url();?>AMR_Customer/Profile"></span><?php echo $CustomerName;?></a></li>
									<li><a href="<?php echo base_url();?>AMR_Customer/Logout"><i class="fa fa-key"></i></span>Logout</a></li>
							   </ul>
								
								
						</div>
					</div>
				</div>
			</div>
			<!-- End Main Header -->
			<div class="nav-header bg-white header-ontop">
				<div class="container">
					<nav class="main-nav main-nav1">
						<ul>
						    <!--pin code starts-->
						   <li class="pin">

										
									</li>
						   
                           <!--pin code ends-->	
							<!--li class="current-menu-item menu-item-has-children">
								<a href="<?php echo base_url();?>">Home</a>
							</li>
							<li class="has-mega-menu"><a href="<?php echo base_url();?>AMR_Home/AboutUs">About Us</a></li>
							<li class="menu-item-has-children">
								<a href="#">Categories</a>
								<ul class="sub-menu">
									<li><a href="<?php echo base_url();?>AMR_Home/Products/1">Fruits</a></li>
									<li><a href="<?php echo base_url();?>AMR_Home/Products/2">Vegetables</a></li>
									<li><a href="<?php echo base_url();?>AMR_Home/Products/3">Rice</a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url();?>AMR_Home/ContactUs">Contact</a></li>
							<li><a href="<?php echo base_url();?>AMR_Home/HireUs">Hire Us</a></li-->
						</ul>
						<a href="#" class="toggle-mobile-menu"><span></span></a>
					</nav>
				</div>
			</div>
			<!-- End Nav Header -->
		</div>
	</header>
	<!-- End Header -->
	<div id="content">
		<div class="content-page">
			<div class="container">
				<div class="shop-banner banner-adv line-scale zoom-image">
					<a href="#" class="adv-thumb-link"><img src="<?php echo base_url();?>Customer_Main/images/cart-bannar.jpg" alt="" /></a>
					<div class="banner-info">
						<h2 class="title30 color">Check Out</h2>
						<div class="bread-crumb white"><a href="#" class="white">Home</a><span>Check Out</span></div>
					</div>
				</div>
				<!-- ENd Banner -->
				<div class="content-cart-checkout woocommerce">
					<h2 class="title30 font-bold text-uppercase text-center">Checkout</h2>
					<div class="row">
						<div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
							<div class="row">
								<form method="post" action="<?php echo base_url();?>AMR_OrderController/SaveOrderWebsite" onsubmit="return Validate();">
									<div class="col-md-6 col-sm-6 col-ms-12">
										<div class="check-billing">
										
											<h2 class="title title18 rale-font font-bold text-uppercase">Billing Details</h2>
											<p>
												<input type="text" name="FullName" id="FullName" value="Full Name *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" class="form-control" />
											</p>
											<p class="clearfix box-col2">
												<input type="text" name="Email" id="Email" value="Email *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" class="form-control" />
												<input type="text" name="MobileNo" id="MobileNo" value="Mobile Number *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" class="form-control" />
											</p>
											<p>
												<input type="text" placeholder="Location *" name="Location" id="Location" class="form-control">
											</p>
											<p>
												<input type="text" placeholder="State *" name="State" id="State" list="States" class="form-control">
												<datalist name="States" id="States">
													<option value="Andaman and Nicobar Islands"></option>
													<option value="Andhra Pradesh"></option>
													<option value="Arunachal Pradesh"></option>
													<option value="Assam"></option>
													<option value="Bihar"></option>
													<option value="Chandigarh"></option>
													<option value="Chhattisgarh"></option>
													<option value="Dadra and Nagar Haveli"></option>
													<option value="Daman and Diu"></option>
													<option value="Delhi"></option>
													<option value="Goa"></option>
													<option value="Gujarat"></option>
													<option value="Haryana"></option>
													<option value="Himachal Pradesh"></option>
													<option value="Jammu and Kashmir"></option>
													<option value="Jharkhand"></option>
													<option value="Karnataka"></option>
													<option value="Kerala"></option>
													<option value="Lakshadweep"></option>
													<option value="Madhya Pradesh"></option>
													<option value="Maharashtra"></option>
													<option value="Manipur"></option>
													<option value="Meghalaya"></option>
													<option value="Mizoram"></option>
													<option value="Nagaland"></option>
													<option value="Odisha"></option>
													<option value="Puducherry"></option>
													<option value="Punjab"></option>
													<option value="Rajasthan"></option>
													<option value="Sikkim"></option>
													<option value="Tamil Nadu"></option>
													<option value="Telangana"></option>
													<option value="Tripura"></option>
													<option value="Uttar Pradesh"></option>
													<option value="Uttarakhand"></option>
													<option value="West Bengal"></option>
												</datalist>
											</p>
											<p><input type="text" name="AddressLine1" id="AddressLine1" value="Address Line 1 *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" class="form-control" /></p>
											<p><input type="text" name="AddressLine2" id="AddressLine2" value="Address Line 2" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" class="form-control" /></p>
											<p class="clearfix box-col2">
												<input type="text" name="PinCode" id="PinCode" value="Poin Code *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" class="form-control" />
												<input type="text" name="City" id="City" value="Village / Town / City *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" class="form-control" />
											</p>
											<h4>Payment Method</h4>
											<ul class="payment_methods methods list-none">
												<li class="payment_method_cod">
													<input type="radio" checked="checked" data-order_button_text="" value="cod" name="PaymentMethod" class="input-radio" id="payment_method_cod">
													<label for="payment_method_cod">Cash on Delivery 	</label>
												</li>
												<li class="payment_method_cod">
													<input type="radio" data-order_button_text="" value="online" name="PaymentMethod" class="input-radio" id="payment_method_cod">
													<label for="payment_method_cod">Pay Now</label>
												</li>
											</ul>
											<h4>Shipping Method</h4>
											<ul class="list-none" id="shipping_method">
												<li>
													<input type="radio" checked="true" class="shipping_method" value="1" id="shipping_method_0_local_delivery" data-index="0" name="ShippingType">
													<label for="shipping_method_0_local_delivery">Home Delivery(Rs. 50 when Total is below 500)</label>
												</li>
												<li>
													<input type="radio" class="shipping_method" value="2" id="shipping_method_0_local_pickup" data-index="0" name="ShippingType">
													<label for="shipping_method_0_local_pickup">Self Pickup (Free)</label>
												</li>
											</ul>
											<button type="submit" class="btn btn-success">Place Order</button>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-ms-12">
										<div class="check-address">
											<p class="ship-address">
												<label for="address">Previous Addresses</label>
											</p>
											<?php
											foreach($Addresses as $row)
											{
											?>
											<div class="col-md-6">
											<a class="btn btn-primary"><input type="radio" name="AddressID" class="radio-primary" value="<?php echo $row["ID"];?>" onclick="SelectAddress(<?php echo $row["ID"];?>);" >Select Address</a>
											<p>
												<b><?php echo $row["ContactPerson"];?></b><br>
												<?php echo $row["AddressLine1"];?><br> 	
												<?php echo $row["AddressLine2"];?><br>
												Location: <?php echo $row["Location"];?><br>
												City/Town: <?php echo $row["City"];?><br>
												State: <?php echo $row["State"];?><br>
												Pin Code: <?php echo $row["PinCode"];?><br>
												Contact No: <?php echo $row["ContactNo"];?><br>
											</p>
											</div>
											<?php
											}
											?>
										</div>		
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!-- End Content Pages -->
	</div>
	<!-- End Content -->
	<footer id="footer">
		<div class="footer">
			<div class="main-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-8 col-xs-12">
							<div class="footer-box">
								<h2 class="title24 white">About Us</h2>
								<div class="about-footer">
									<a href="#"><img src="<?php echo base_url();?>Customer_Main/images/about.png" alt="" /></a>
									<p class="desc silver">Our products are freshly harvested, washed ready for box and finally </p>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<!--div class="footer-box">
								<h2 class="title24 white">Information</h2>
								<ul class="list-none menu-footer">
									<li><a href="#" class="silver">New Products</a></li>
									<li><a href="#" class="silver">Top Sellers</a></li>
									<li><a href="#" class="silver">Our Blog</a></li>
									<li><a href="#" class="silver">About Our Shop</a></li>
									<li><a href="#" class="silver">About Us</a></li>
								</ul>
							</div-->
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<!--div class="footer-box">
								<h2 class="title24 white">Instagram</h2>
								<div class="list-instagram">
									<a href="#"><img class="grow" src="<?php echo base_url();?>Customer_Main/images/in1.png" alt=""></a>
									<a href="#"><img class="grow" src="<?php echo base_url();?>Customer_Main/images/in2.png" alt=""></a>
									<a href="#"><img class="grow" src="<?php echo base_url();?>Customer_Main/images/in3.png" alt=""></a>
									<a href="#"><img class="grow" src="<?php echo base_url();?>Customer_Main/images/in4.png" alt=""></a>
									<a href="#"><img class="grow" src="<?php echo base_url();?>Customer_Main/images/in5.png" alt=""></a>
									<a href="#"><img class="grow" src="<?php echo base_url();?>Customer_Main/images/in6.png" alt=""></a>
								</div>
							</div-->
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="footer-box">
								<h2 class="title24 white">Contact Us</h2>
								<div class="contact-footer">
									<p class="desc silver"><span class="color"><i class="fa fa-home" aria-hidden="true"></i></span>Bazar Road, Tangla Chariali<br>
									Udalguri, BTAD, Assam-784521</p>
									<p class="desc silver"><span class="color"><i class="fa fa-mobile" aria-hidden="true"></i></span>+91-9508610420,7896072256</p>
									<p class="desc silver"><span class="color"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#" class="silver">support@abadagro.com</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="social-payment">
						<div class="row">
							<div class="col-md-6 col-sm06 col-xs-12">
								<ul class="list-inline-block text-left">
									<li><h2 class="title24 white">Follow us</h2></li>
									<li>
										<div class="social-network">
											<a href="#" class="float-shadow"><img src="<?php echo base_url();?>Customer_Main/images/fb.png" alt="" /></a>
											<a href="#" class="float-shadow"><img src="<?php echo base_url();?>Customer_Main/images/tw.png" alt="" /></a>
											<a href="#" class="float-shadow"><img src="<?php echo base_url();?>Customer_Main/images/inst.png" alt="" /></a>
											<a href="#" class="float-shadow"><img src="<?php echo base_url();?>Customer_Main/images/gpls.png" alt="" /></a>
											<a href="#" class="float-shadow"><img src="<?php echo base_url();?>Customer_Main/images/pinst.png" alt="" /></a>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-6 col-sm06 col-xs-12">
								<ul class="list-inline-block text-right">
									<li><h2 class="title24 white">Payment Method</h2></li>
									<li>
										<div class="payment-method">
											<a href="#" class="wobble-top"><img src="<?php echo base_url();?>Customer_Main/images/pmt-1.png" alt=""></a>
											<a href="#" class="wobble-top"><img src="<?php echo base_url();?>Customer_Main/images/pmt-2.png" alt=""></a>
											<a href="#" class="wobble-top"><img src="<?php echo base_url();?>Customer_Main/images/pmt-3.png" alt=""></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Main Footer -->
			<div class="bottom-fotter">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<p class="copyright silver text-left">Copyright © 2017 ABAD AGRO ORGANIC STORE- All Rights Reserved.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
						   <p class=" silver text-right list-inline-block term-policy" >Design & Developed By <a class="colrr" href="http://24techsoft.com/" target="_blank">24 TECH SOFT</a></p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	<a href="#" class="scroll-top round"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
	
	<!-- End Newsletter Popup -->
	<div class="wishlist-mask">
		<div class="wishlist-popup">
			<span class="popup-icon color"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
			<p class="wishlist-alert">"Fruit Product" was added to wishlist</p>
			<div class="wishlist-button">
				<a href="#">Continue Shopping (<span class="wishlist-countdown">10</span>)</a>
				<a href="#">Go To Shopping Cart</a>
			</div>
		</div>
	</div>
	<!-- End Wishlist Mask -->
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_four"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_one"></div>
			</div>
		</div>
	</div>
	<!-- End Preload -->
</div>
<script type="text/javascript" src="<?php echo base_url();?>Customer_Main/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Customer_Main/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Customer_Main/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Customer_Main/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Customer_Main/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Customer_Main/js/jquery.jcarousellite.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Customer_Main/js/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Customer_Main/js/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Customer_Main/js/slick.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Customer_Main/js/popup.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Customer_Main/js/timecircles.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Customer_Main/js/wow.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>Customer_Main/js/theme.js"></script>
<script>
function SelectAddress(ID)
{
	var url="<?php echo base_url();?>AMR_Customer/GetAddressByID?AddressID="+ID.toString();
	$.ajax({
		url: url,
		dataType:'json',
		success: function(res)
		{
			document.getElementById("FullName").value=res[0].ContactPerson;
			document.getElementById("MobileNo").value=res[0].ContactNo;
			document.getElementById("AddressLine1").value=res[0].AddressLine1;
			document.getElementById("AddressLine2").value=res[0].AddressLine2;
			document.getElementById("Location").value=res[0].Location;
			document.getElementById("City").value=res[0].City;
			document.getElementById("State").value=res[0].State;
			document.getElementById("PinCode").value=res[0].PinCode;
		},
		error: function()
		{
			
		}
	});
}
function Validate()
{
	var FullName=document.getElementById("FullName").value;
	if(FullName=="")
	{
		alert("Please enter full name");
		return false;
	}
	
	var MobileNo=document.getElementById("MobileNo").value;
	if(MobileNo=="")
	{
		alert("Please enter mobile number");
		return false;
	}
	var Location=document.getElementById("Location").value;
	if(Location=="")
	{
		alert("Please enter location");
		return false;
	}
	var State=document.getElementById("State").value;
	if(State=="")
	{
		alert("Please enter State");
		return false;
	}
	var AddressLine1=document.getElementById("AddressLine1").value;
	if(AddressLine1=="")
	{
		alert("Please enter Address Line 1");
		return false;
	}
	
	var PinCode=document.getElementById("PinCode").value;
	if(PinCode=="")
	{
		alert("Please enter Pin Code");
		return false;
	}
	var City=document.getElementById("City").value;
	if(PinCode=="")
	{
		alert("Please enter City");
		return false;
	}
	return true;
}
</script>
</body>
</html>