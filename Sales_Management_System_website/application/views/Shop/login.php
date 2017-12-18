<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="Fruit Shop is new Html theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Html theme, with multiple versions for homepage and multiple templates for sub pages as well" />
	<meta name="keywords" content="Fruit,7uptheme" />
	<meta name="robots" content="noodp,index,follow" />
	<meta name='revisit-after' content='1 days' />
	<title> ABAD AGRO | LOGIN </title>
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon.png">
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
<div class="wrap">
	<header id="header">
		<div class="header">
			
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-12">
							<form class="search-form pull-left" method="post" action="<?php echo base_url();?>Shopping/search">
								<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Search this site" type="text" name="search">
								<input type="submit" value="" />
							</form>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div class="logo logo1">
								<a href="index.html"><img src="<?php echo base_url();?>Main/images/logo.png" alt="" /></a>
							</div>
						</div>
						<div class="col-md-5 col-sm-5 col-xs-12">

								<ul class="info-account list-inline-block pull-right">
								    <li>
									<div class="mini-cart-box mini-cart1 pull-right">
									<a class="mini-cart-link" href="cart.html">
										<span class="mini-cart-icon title18 color"><i class="fa fa-shopping-basket"></i></span>
										<span class="mini-cart-number" id="cartnumber">0 Item -<span class="color" >&#8377; 0.00</span></span>
								    </a>
									<div id="cartcount"></div>
									
												
									</div>
									</li>
									<li><a href="<?php echo base_url();?>Login_Controller"><i class="fa fa-key"></i></span>Login</a></li>
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
						   
                           <!--pin code ends-->	
							<li class="menu-item-has-children">
								<a href="<?php echo base_url();?>Shopping">Home</a>
							</li>
							
							<li class="has-mega-menu"><a href="<?php echo base_url();?>Shopping/products/0">Products</a></li>
							<li class="menu-item-has-children"><a href="#">Pages</a></li>
							<li class="menu-item-has-children">
								<a href="grid.html">Shop</a>
								<ul class="sub-menu">
									<li><a href="grid.html">Grid Shop</a></li>
									<li><a href="list.html">List Shop</a></li>
									<li class="menu-item-has-children">
										<a href="detail.html">Product Detail</a>
										<ul class="sub-menu">
											<li><a href="detail-fullwidth.html">Detail Fullwidth</a></li>
											<li><a href="detail-extra-link.html">Detail Extra Link</a></li>
											<li><a href="detail-group.html">Detail Group</a></li>
											<li><a href="detail-sidebar-right.html">Detail Sidebar Right</a></li>
										</ul>
									</li>
									<li><a href="cart.html">Cart</a></li>
									<li><a href="checkout.html">Check Out</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Blog</a>
								<ul class="sub-menu">
									<li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-masonry.html">Blog Masonry</a></li>
									<li><a href="blog-detail.html">Blog Detail</a></li>
								</ul>
							</li>
							<li><a href="about_us.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
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
					<a href="#" class="adv-thumb-link"><img src="<?php echo base_url();?>Main/images/cart-bannar.jpg" alt="" /></a>
					<div class="banner-info">
						<h2 class="title30 color">LOGIN</h2>
						<div class="bread-crumb white"><a href="#" class="white">Home</a><span>LOGIN</span></div>
					</div>
				</div>
				<!-- ENd Banner -->
				<div class="content-cart-checkout woocommerce">
					<h2 class="title30 font-bold text-uppercase text-center">Log In</h2>
					<div class="row">
						<div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
							<div class="row">
								<div class="col-sm-12">
					
									  <div class="col-sm-3"></div>
									  <div class="col-sm-6">
									  
									       <div class="login-main">
										   
											   
											   <div class="call">
											       <form>
												        <input type="text" id="username" placeholder="User Name">
														<input type="password" id="userpass" placeholder="Password">
														<a href="<?php echo base_url();?>Shopping/forgotpass">Forgot Password?</a>
														
														
												   </form>
												   
												   <a class="mini-cart-view shop-button" onclick="login();">Login</a>
											   
											   </div>
											   
											   <div class="neww">
											   
											       <a href="<?php echo base_url();?>Shopping/signup">New to ABAD? <a href="<?php echo base_url();?>Shopping/signup">Sign Up</a></a>
											   
											   </div>
										   
										   </div>
									     
										
										</div>
							
								</div>
								
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
									<a href="#"><img src="<?php echo base_url();?>Main/images/about.png" alt="" /></a>
									<p class="desc silver">Our products are freshly harvested, washed ready for box and finally </p>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-12">
							<div class="footer-box">
								<h2 class="title24 white">Information</h2>
								<ul class="list-none menu-footer">
									<li><a href="#" class="silver">New Products</a></li>
									<li><a href="#" class="silver">Top Sellers</a></li>
									<li><a href="#" class="silver">Our Blog</a></li>
									<li><a href="#" class="silver">About Our Shop</a></li>
									<li><a href="#" class="silver">About Us</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="footer-box">
								<h2 class="title24 white">Instagram</h2>
								<div class="list-instagram">
									<a href="#"><img class="grow" src="<?php echo base_url();?>Main/images/in1.png" alt=""></a>
									<a href="#"><img class="grow" src="<?php echo base_url();?>Main/images/in2.png" alt=""></a>
									<a href="#"><img class="grow" src="<?php echo base_url();?>Main/images/in3.png" alt=""></a>
									<a href="#"><img class="grow" src="<?php echo base_url();?>Main/images/in4.png" alt=""></a>
									<a href="#"><img class="grow" src="<?php echo base_url();?>Main/images/in5.png" alt=""></a>
									<a href="#"><img class="grow" src="<?php echo base_url();?>Main/images/in6.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="footer-box">
								<h2 class="title24 white">Contact Us</h2>
								<div class="contact-footer">
									<p class="desc silver"><span class="color"><i class="fa fa-home" aria-hidden="true"></i></span>Hatigoan Chariali, Pin-781038 , Guwahati </p>
									<p class="desc silver"><span class="color"><i class="fa fa-mobile" aria-hidden="true"></i></span>+91 0123 5678 00</p>
									<p class="desc silver"><span class="color"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#" class="silver">support@domain.com</a></p>
									<p class="desc silver none-padding">For Product Registration and general enquires please <a href="#" class="color">contact us</a></p>
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
											<a href="#" class="float-shadow"><img src="<?php echo base_url();?>Main/images/fb.png" alt="" /></a>
											<a href="#" class="float-shadow"><img src="<?php echo base_url();?>Main/images/tw.png" alt="" /></a>
											<a href="#" class="float-shadow"><img src="<?php echo base_url();?>Main/images/inst.png" alt="" /></a>
											<a href="#" class="float-shadow"><img src="<?php echo base_url();?>Main/images/gpls.png" alt="" /></a>
											<a href="#" class="float-shadow"><img src="<?php echo base_url();?>Main/images/pinst.png" alt="" /></a>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-6 col-sm06 col-xs-12">
								<ul class="list-inline-block text-right">
									<li><h2 class="title24 white">Payment Method</h2></li>
									<li>
										<div class="payment-method">
											<a href="#" class="wobble-top"><img src="<?php echo base_url();?>Main/images/pmt-1.png" alt=""></a>
											<a href="#" class="wobble-top"><img src="<?php echo base_url();?>Main/images/pmt-2.png" alt=""></a>
											<a href="#" class="wobble-top"><img src="<?php echo base_url();?>Main/images/pmt-3.png" alt=""></a>
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
							<p class="copyright silver text-left">Copyright © 2017 ABAD AGRO - All Rights Reserved.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
						   <p class=" silver text-right list-inline-block term-policy" >Design & Developed By <a class="colrr" href="http://24techsoft.com/" target="_blank">24TECHSOFT</a></p>
							
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
<script>
$(document).ready(function(){
	cartcount();
});
setInterval("cartcount()", 5000);
function cartcount(){
			var html="";
			var count=0.00;
			var html1="";
			var html2="";
			
			$.ajax({
				url:'<?php echo base_url();?>Shopping/cartcount',
				type:'ajax',
				dataType:'json',
				success:function(data){
					html +='<div class="mini-cart-content text-left">'+
							'<h2 class="title18 color">'+data.length+' ITEMS IN MY CART</h2>'+
							'<div class="list-mini-cart-item">';
							for(var i=0;i<data.length;i++){
								count=count+parseFloat(data[i].TotalPrice);
								html +='<div class="product-mini-cart table">'+
									'<div class="checkk">'+
										'<a href="<?php echo base_url();?>Shopping/productdetails/'+data[i].ItemID+'" class="checkk-link"><img alt="'+data[i].ItemName+'" src="<?php echo base_url();?>ItemPhoto/'+data[i].Photo+'"></a>'+
										'<a href="<?php echo base_url();?>Shopping/productdetails/'+data[i].ItemID+'" class="quickview-link"></a>'+
									'</div>'+
									'<div class="product-info">'+
										'<h3 class="product-title"><a href="#">'+data[i].ItemName+'</a></h3>'+
										'<div class="product-price">'+
											'<ins><span>&#8377; '+data[i].TotalPrice+'</span></ins>'+
										'</div>'+
										'<div class="product-rate">'+
											'<div class="product-rating" style="width:100%"></div>'+
										'</div>'+
									'</div>'+
								'</div>';
							}
							html +='</div>'+
							'<div class="mini-cart-total  clearfix">'+
								'<strong class="pull-left title18">TOTAL</strong>'+
								'<span class="pull-right color title18">&#8377; '+count+'</span>'+
							'</div>'+
							'<div class="mini-cart-button">'+
								'<a class="mini-cart-view shop-button" href="<?php echo base_url();?>Shopping/cart">View cart </a>'+
								'<a class="mini-cart-checkout shop-button" href="<?php echo base_url();?>Shopping/checkout">Checkout</a>'+
							'</div>'+
						'</div>';
						html1 +=data.length+' Item -<span class="color" >&#8377; '+count+'</span>';
						if(data.length!=0)
					{
						$('#cartcount').html('');
						$('#cartcount').html(html);
						$('#cartnumber').html(html1);
					}
				},
				error:function(){
				//	alert('Sorry count');
				}
			});
		}
		
		function login(){
			var username=$('#username').val();
			var password=$('#userpass').val();
			var url="<?php echo base_url();?>Login_Controller/login";
			$.ajax({
				url:url,
				type:'post',
				data:{
					'Name':username,
					'Password':password,
				},
				success:function(response){
					if(response==0){
						swal("Wrong UserID or Password!");
						$('#username').val("");
						$('#userpass').val("");
					}else if(response==1){
						window.location.href='<?php echo base_url();?>Shopping';
					}
				}
			});
		}
		function checkout(cid){
	if((cid==0)||(cid=="")||(cid==null)){
		swal("You need to login.")
		.then((value) => {
			window.location.href='<?php echo base_url();?>Login_Controller';
		});
		
	}
	else{
		//window.location.href='<?php echo base_url();?>Cart_Controller';
		window.location.href='<?php echo base_url();?>Cart_Controller/vendorcheckout';
	}
}
</script>

</body>
</html>