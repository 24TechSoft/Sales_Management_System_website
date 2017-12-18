<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="Fruit Shop is new Html theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Html theme, with multiple versions for homepage and multiple templates for sub pages as well" />
	<meta name="keywords" content="Fruit,7uptheme" />
	<meta name="robots" content="noodp,index,follow" />
	<meta name='revisit-after' content='1 days' />
	<title>Abad Agro Organic Store | <?php echo $ItemDetail[0]["Name"];?></title>
	<link rel="shortcut icon" href="<?php echo base_url();?>Customer_Main/images/logo.png" />
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
<body class="preload">
<div class="wrap">
	<header id="header">
		<div class="header">
			
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-12">
							<form class="search-form pull-left" method="get" action="<?php echo base_url();?>AMR_Home/Search">
								<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Search this site" type="text" name="SearchText">
								<input type="submit" value="" />
							</form>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div class="logo logo1">
								<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>Customer_Main/images/logo.png" alt="" /></a>
							</div>
						</div>
						<div class="col-md-5 col-sm-5 col-xs-12">

								<ul class="info-account list-inline-block pull-right">
								    <li>
									<div class="mini-cart-box mini-cart1 pull-right">
									<a class="mini-cart-link" href="<?php echo base_url();?>AMR_Home/ShoppingCart">
										<span class="mini-cart-icon title18 color"><i class="fa fa-shopping-basket"></i></span>
										<span class="mini-cart-number"><span id="ItemCount1">0</span> Item(s) - <span class="color">&#8377; <span id="TotalAmount1">0.000</span></span></span>
								    </a>
									
												<div class="mini-cart-content text-left">
												<h2 class="title18 color">(<span id="ItemCount2">0</span>) ITEMS IN MY CART</h2>
												<div class="list-mini-cart-item" id="CartItems">
													<div class="product-mini-cart table">
														<div class="product-thumb">
															<a href="detail.html" class="product-thumb-link"><img alt="" src="<?php echo base_url();?>Customer_Main/images/img-1.jpg"></a>
															<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
														<div class="product-info">
															<h3 class="product-title"><a href="#">Aurore Grape</a></h3>
															<div class="product-price">
																<ins><span>&#8377; 400.00</span></ins>
																<del><span>&#8377; 520.00</span></del>
															</div>
															<div class="product-rate">
																<div class="product-rating" style="width:100%"></div>
															</div>
														</div>
													</div>
													<div class="product-mini-cart table">
														<div class="product-thumb">
															<a href="detail.html" class="product-thumb-link"><img alt="" src="<?php echo base_url();?>Customer_Main/images/img-3.jpg"></a>
															<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
														</div>
														<div class="product-info">
															<h3 class="product-title"><a href="#">Conconut Chips</a></h3>
															<div class="product-price">
																<ins><span>&#8377; 400.00</span></ins>
																<del><span>&#8377; 520.00</span></del>
															</div>
															<div class="product-rate">
																<div class="product-rating" style="width:100%"></div>
															</div>
														</div>
													</div>
												</div>
												<div class="mini-cart-total  clearfix">
													<strong class="pull-left title18">TOTAL</strong>
													<span class="pull-right color title18">&#8377; <span id="TotalAmount2">0.000</span></span>
												</div>
												<div class="mini-cart-button">
													<a class="mini-cart-view shop-button" href="<?php echo base_url();?>AMR_Home/ShoppingCart">View cart </a>
													<a class="mini-cart-checkout shop-button" href="<?php echo base_url();?>AMR_Home/CheckOut">Checkout</a>
												</div>
											</div>
										</div>
										
									</li>
									<?php
									if($CustomerID=="" || $CustomerID==null)
									{
									?>
									<li><a href="<?php echo base_url();?>AMR_Home/LoginPage"><i class="fa fa-key"></i></span>Login</a></li>
									<?php
									}
									else
									{
									?>
									<li><a href="<?php echo base_url();?>AMR_Customer/Profile"></span><?php echo $CustomerName;?></a></li>
									<li><a href="<?php echo base_url();?>AMR_Customer/Logout"><i class="fa fa-key"></i></span>Logout</a></li>
									<?php
									}
									?>
									<!--<li><a href="#"><i class="fa fa-check-circle-o"></i></span>Checkout</a></li>-->
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
						   <!--li class="pin">
							   <div class="mini-cart-box mini-cart1 pull-right">
									<a class="mini-cart-link">
										<span class="mini-cart-icon title18 color"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
										<span class="mini-cart-number"><span class="color"><?php echo $Location."(".$PinCode.")";?></span></span>
								     </a>
									
												<div class="mini-cart-content text-left">
												
												<div class="code">
												  
													<input type="text" placeholder="Enter your Pin code" id="txtPinCode" value="<?php echo $PinCode?>">
													
												</div>
												
												<div class="mini-cart-button">
													
													<button class="mini-cart-checkout shop-button" onclick="ChangeLocation();">Search</button>
												</div>
											</div>
										</div>
										
									</li-->
						   
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
	<section id="content">
		<div class="container">
			<div class="shop-banner banner-adv line-scale zoom-image">
				<a href="#" class="adv-thumb-link"><img src="images/product-details.jpg" alt="" /></a>
				<div class="banner-info">
					<!--h2 class="title30 color">Shop</h2>
					<div class="bread-crumb white"><a href="#" class="white">Home</a><span>Product Detail</span></div-->
				</div>
			</div>
			<!-- ENd Banner -->
			<div class="content-shop">
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="sidebar-left sidebar-shop">
							<div class="widget widget-search">
								<form class="search-form">
									<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Search..." type="text">
									<input type="submit" value="">
								</form>
							</div>
							<!-- End Widget -->
							<div class="widget widget-category">
								<h2 class="title18 title-widget font-bold">Categories</h2>
								<ul class="list-none wg-list-cat">
									<?php foreach($Categories as $row)
									{
										?>
									<li><a href="<?php echo base_url();?>AMR_Home/Products/<?php echo $row["ID"];?>"><?php echo $row["Category"];?></a><span class="color"><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
									<?php
									}
									?>
								</ul>
							</div>
							<!-- ENd Widget -->


							
						</div>
					</div>
					<div class="col-md-9 col-sm-8 col-xs-12">
						<div class="product-detail">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="detail-gallery">
										<div class="mid">
											<img src="<?php echo base_url();?>ItemPhoto/<?php echo $ItemDetail[0]["Photo"];?>" alt=""/>
										</div>
									</div>
									<!-- End Gallery -->
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="detail-info">
										<h2 class="title30 font-bold"><?php echo $ItemDetail[0]["Name"];?></h2>
										<!--div class="product-price">
											<ins class="color"><span>&#8377; 450.000</span></ins>
										</div-->
										<div class="product-rate">
											<div class="product-rating" style="width:100%"></div>
										</div>
										
										<p class="desc"><?php echo $ItemDetail[0]["ItemDescription"];?></p>
										
										<!--p class="desc">
										<div class="form-group">
										<label>Vendor</label>
										<select name="Vendor" id="Vendor" onchange="getPackages();" class="form-control">
											<option value="0">--Select a vendor--</option>
											<?php
											foreach($VendorList as $row)
											{
											?>
											<option value="<?php echo json_encode($row);?>"><?php echo $row["Name"];?></option>
											<?php
											}
											?>
										</select>
										</div>
										</p-->
										<hr/>
										<p class="desc">
										<div class="form-group">
										<label>Packages</label>
										<select name="Package" class="form-control" id="Package">
											<?php
											foreach($VendorList[0]["Packages"] as $row)
											{
											?>
											<option value='<?php echo json_encode($row);?>'><?php echo $row["PackageName"];?>(&#8377;<?php echo $row["Price"];?>)</option>
											<?php
											}
											?>
										</select>
										</div>
										</p>
										<ul class="list-inline-block wrap-qty-extra">
											<li>
												<div class="detail-qty">
													<a href="#" class="qty-down silver"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
													<span class="qty-val" id="Quantity">1</span>
													<a href="#" class="qty-up silver"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
												</div>
											</li>
											<li>
												<div class="product-extra-link">
													<a href="#" class="addcart-link" onclick="AddToCart();">Add to cart</a>
													<!--a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
													<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a-->
												</div>
											</li>
										</ul>
										<!--p class="desc info-extra">
											<label>Category:</label><a href="#" class="color">Fruits Fresh</a>
										</p>
										<p class="desc info-extra">
											<label>ID Product:</label><span class="color">UK15800PNT</span>
										</p>
										<p class="desc info-extra">
											<label>Share:</label>
											<a href="#" class="silver"><i class="fa fa-facebook"></i></a>
											<a href="#" class="silver"><i class="fa fa-twitter"></i></a>
											<a href="#" class="silver"><i class="fa fa-instagram"></i></a>
										</p-->
									</div>			
								</div>
							</div>
						</div>
						<!-- End Product Detail -->
						<!--div class="detail-tabs">
							<div class="title-tab-detail">
								<ul class="title-tab1 list-inline-block">
									<li class="active"><a href="#tab1" class="title14" data-toggle="tab" aria-expanded="true">Description</a></li>
									<li class=""><a href="#tab2" class="title14" data-toggle="tab" aria-expanded="false">Additional</a></li>
									<li class=""><a href="#tab3" class="title14" data-toggle="tab" aria-expanded="false">Reviews(5)</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<div id="tab1" class="tab-pane active">
									<div class="detail-descript">
										<h2 class="title30 color">Product Description</h2>
										<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel maximus lacus. Duis ut mauris eget justo dictum tempus sed vel tellus. Vestibulum sit amet maximus turpis. </p>
										<p class="desc">Cras suscipit placerat dignissim. Morbi cursus, mauris sed placerat rutrum, ante risus dictum elit, dictum feugiat lectus lacus eget felis. Suspendisse nec ipsum in sapien faucibus convallis nec sit amet metus. Phasellus at lacus non libero molestie euismod non ut ligula. Etiam nec turpis eget odio laoreet elementum et vitae risus.</p>
									</div>
								</div>
								<div id="tab2" class="tab-pane">
									<div class="detail-addition">
										<table class="table table-bordered table-striped">
											<tbody>
												<tr>
													<td><p class="desc">Frame Material: Wood</p></td>
													<td><p class="desc">Seat Material: Wood</p></td>
												</tr>
												<tr>
													<td><p class="desc">Adjustable Height: No</p></td>
													<td><p class="desc">Seat Style: Saddle</p></td>
												</tr>
												<tr>
													<td><p class="desc">Distressed: No</p></td>
													<td><p class="desc">Custom Made: No</p></td>
												</tr>
												<tr>
													<td><p class="desc">Number of Items Included: 1</p></td>
													<td><p class="desc">Folding: No</p></td>
												</tr>
												<tr>
													<td><p class="desc">Stackable: No</p></td>
													<td><p class="desc">Cushions Included: No</p></td>
												</tr>
												<tr>
													<td><p class="desc">Arms Included: No</p></td>
													<td>
														<div class="product-more-info">
															<p class="desc">Legs Included: Yes</p>
															<ul class="list-none">
																<li><a href="#">Leg Material: Wood</a></li>
																<li><a href="#">Number of Legs: 4</a></li>
															</ul>
														</div>
													</td>
												</tr>
												<tr>
													<td><p class="desc">Footrest Included: Yes</p>	</td>
													<td><p class="desc">Casters Included: No</p></td>
												</tr>
												<tr>
													<td><p class="desc">Nailhead Trim: No</p></td>
													<td><p class="desc">Weight Capacity: 225 Kilogramm</p></td>
												</tr>
												<tr>
													<td><p class="desc">Commercial Use: No</p></td>
													<td><p class="desc">Country of Manufacture: Vietnam</p></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div id="tab3" class="tab-pane">
									<div class="content-tags-detail">
										<h3 class="title14">2 Review for "Fresh Meal Kit"</h3>
										<ul class="list-none list-tags-review">
											<li>
												<div class="review-author">
													<a href="#"><img src="<?php echo base_url();?>Vendor_Main/images/shop/author1.jpg" alt=""></a>
												</div>
												<div class="review-info">
													<p class="review-header"><a href="#"><strong>7up-theme</strong></a> – March 30, 2017:</p>
													<div class="product-rate">
														<div class="product-rating" style="width:100%"></div>
													</div>
													<p class="desc">Really a nice stool. It was better than I expected in quality. The color is a rich, honey brown and looks a little lighter than pictured but still a great stool for the money.</p>
												</div>
											</li>
											<li>
												<div class="review-author">
													<a href="#"><img src="<?php echo base_url();?>Customer_Main/images/shop/author2.jpg" alt=""></a>
												</div>
												<div class="review-info">
													<p class="review-header"><a href="#"><strong>7up-theme</strong></a> – March 30, 2017:</p>
													<div class="product-rate">
														<div class="product-rating" style="width:100%"></div>
													</div>
													<p class="desc">Really a nice stool. It was better than I expected in quality. The color is a rich, honey brown and looks a little lighter than pictured but still a great stool for the money.</p>
												</div>
											</li>
										</ul>
										<div class="add-review-form">
											<h3 class="title14">Add a Review</h3>
											<p>Your email address will not be published. Required fields are marked *</p>
											<form class="review-form">
												<div>
													<label>Name *</label>
													<input name="name" id="name" type="text">
												</div>
												<div>
													<label>Email *</label>
													<input name="email" id="email" type="text">
												</div>
												<div>
													<label>Your Rating</label>
													<div class="product-rate">
														<div class="product-rating" style="width:100%"></div>
													</div>
												</div>
												<div>
													<label>Your Review *</label>
													<textarea name="messasge" id="message" cols="30" rows="10"></textarea>
												</div>
												<div>
													<input class="shop-button radius4" value="Submit" type="submit">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div-->
						<!-- End Tabs Detail -->
					
					</div>
				</div>
			</div>
			<!-- End Content Shop -->
		</div>
	</section>
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
<!-- Sweet Alert-->
<link rel="stylesheet" href="<?php echo base_url();?>Sweetalert/sweetalert.css" type="text/css"></script>
<script src="<?php echo base_url();?>Sweetalert/sweetalert-dev.js"></script>
<script src="<?php echo base_url();?>Sweetalert/sweetalert.min.js"></script>
<!-- Sweet Alert-->	
<script>
var counter=setInterval(ReadCart, 1000);
$(document).ready(function(){
	ReadCart();
});
function ReadCart()
{
	$.ajax({
		url:"<?php echo base_url();?>AMR_OrderController/GetCartItems",
		type:"post",
		data:{},
		dataType:"json",
		success:function(result)
		{
			var Total=0.00;
			var html="";
			for(var i=0;i<result.length;i++)
			{
				
				Total=Total+parseFloat(result[i].TotalPrice);
				//alert(Total);
				html+='<div class="product-mini-cart table">';
				html+='<div class="product-thumb">';
				html+='<a href="<?php echo base_url();?>AMR_Home/ProductDetail/'+result[0]["ItemID"]+'" class="product-thumb-link">';
				html+='<img alt="" src="<?php echo base_url();?>ItemPhoto/'+result[i].Photo+'">';
				html+='</a>';
				html+='<a href="<?php echo base_url();?>AMR_Home/ProductDetail/'+result[0]["ItemID"]+'" class="quickview-link">';
				html+='<i class="fa fa-search" aria-hidden="true"></i></a>';
				html+='</div>';
				html+='<div class="product-info">';
				html+='<p><a href="<?php echo base_url();?>AMR_Home/ProductDetail/'+result[0]["ItemID"]+'">'+result[i].ItemName+'-'+result[i].ItemPackage+'</a></p>';
				html+='<div class="product-price">';
				html+='<ins><span>&#8377; '+result[i].Price+' x '+result[i].PackageQuantity+'</span></ins>';
				html+='</div>';
				html+='<div class="product-rate">';
				html+='<div class="product-rating" style="width:100%"></div>';
				html+='</div>';
				html+='</div>';
				html+='</div>';
				//alert(html);
			}
			document.getElementById("ItemCount1").innerHTML=result.length;
			document.getElementById("ItemCount2").innerHTML=result.length;
			document.getElementById("TotalAmount1").innerHTML=Total;
			document.getElementById("TotalAmount2").innerHTML=Total;
			document.getElementById("CartItems").innerHTML="";
			document.getElementById("CartItems").innerHTML=html;
		},
		error:function()
		{
			//swal("Error","Error","error");
		}
	});
}
function ChangeLocation()
{
	var PinCode=document.getElementById("txtPinCode").value;
	if(PinCode=="" || PinCode.length!=6)
	{
		swal("Error", "Please enter a valid pin code", "error"); 
		return false;
	}
	else
	{
		var url="<?php echo base_url();?>AMR_Home/CheckLocation";
		$.ajax({
			url: url,
			type: 'post',
			data: {'PinCode':PinCode},
			dataType: 'json',
			success: function(result)
			{
				if(result.length>0)
				{
					document.cookie = "PinCode="+result[0].Pincode;
					window.location="<?php echo base_url();?>AMR_Home/ProductDetail/<?php echo $ItemDetail[0]["ID"];?>";
				}
				else
				{
					swal("Error", "Sorry. Your location is not currently in our reach", "error");
				}
			},
			error: function()
			{
				
			}
		});
	}
}
function AddToCart()
{
	var ItemID=<?php echo $ItemDetail[0]["ID"];?>;
	var ItemName='<?php echo $ItemDetail[0]["Name"];?>';
	var Package=JSON.parse(document.getElementById("Package").value);
	var Quantity=document.getElementById("Quantity").innerHTML;
	var PackageName=Package.PackageName;
	var PackageQuantity=Package.Quantity;
	var Price=Package.Price;
	var TotalPrice=Price*Quantity;
	var TotalQuantity=PackageQuantity*Quantity;
	var data={"ItemID":ItemID,
			"ItemName":ItemName,
			"ItemPackage":PackageName,
			"PackageQuantity":Quantity,
			"Quantity":TotalQuantity,
			"Price":Price,
			"TotalPrice":TotalPrice};
	var url="<?php echo base_url();?>AMR_OrderController/AddToCart";
	$.ajax({
		url:url,
		type:"post",
		data:data,
		dataType:"json",
		success:function(result){
			swal("Success",result,"success");
		},
		error:function(){
			swal("Error","Cannot be added","error");
		}
	});
}
</script>
</body>
</html>