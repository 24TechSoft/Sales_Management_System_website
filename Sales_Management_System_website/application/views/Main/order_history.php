<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">



<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="key, words"/>	

	<meta name="description" content="Website description"/>

	<meta name="robots" content="noindex, nofollow"/><!-- change into index, follow -->

	<meta name="format-detection" content="telephone=no" />

	<!-- font awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	<!-- Mobile Specific Metas ================================================== -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>



	<title>Order History</title>



	<link rel="stylesheet" href="<?php echo base_url();?>MainFiles/styles/layout.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url();?>MainFiles/fonts/fonts.css" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <script type="text/javascript" src="<?php echo base_url();?>MainFiles/js/jquery-1.7.1.min.js"></script>

	<!--popup script-->

	

	

	<!--dropdown menu script-->

	

			<script>

		/* When the user clicks on the button, 

		toggle between hiding and showing the dropdown content */

		function myFunction() {

			document.getElementById("myDropdown").classList.toggle("show");

		}



		// Close the dropdown if the user clicks outside of it

		window.onclick = function(event) {

		  if (!event.target.matches('.dropbtn')) {



			var dropdowns = document.getElementsByClassName("dropdown-content");

			var i;

			for (i = 0; i < dropdowns.length; i++) {

			  var openDropdown = dropdowns[i];

			  if (openDropdown.classList.contains('show')) {

				openDropdown.classList.remove('show');

			  }

			}

		  }

		}

		</script>

	

	<!--dropdown menu script-->



</head>



<body>



<!-- begin section -->

<div id="section">



    <a href="javascript:void(0)" class="toggle"><img src="<?php echo base_url();?>MainFiles/images/toggle.png" alt="" /></a>

	<div class="nav">

    

    	<ul>

        	<li><a href="<?php echo base_url();?>Shopping_Controller">HOME</a></li>

            <li><a href="<?php echo base_url();?>Login_Controller/about">About Us</a></li>

            <li><a href="#">Features</a></li>

            <li><a href="#">News & Blog</a>

			<li><img src="<?php echo base_url();?>MainFiles/images/addto.png" alt=""/></li>

            	

        </ul>    

    

    </div>

 

  

	<!-- begin page-wrap -->

	<div id="page-wrap">

		

		<!-- begin header -->

		<div id="header-wrap">



			<!--starts header bar-->

			

			<div class="header-bar">

			

			     <div class="head">

				 

				      <div class="centering">

					  

					        <div class="top">

							

							      <div class="logo">

								  

								     <a href="#"> <img src="<?php echo base_url();?>MainFiles/images/logo-1.png" alt=""/></a>

								  

								  </div>

								  

								  <div class="right">

								  

								        <div class="pnnav">

										

										    <ul>

											 

											     <li><a href="<?php echo base_url();?>Shopping_Sontroller">Home</a></li>

												 <li><a href="<?php echo base_url();?>Login_Controller/about">About Us</a></li>

												 <li><a href="#">Features</a></li>

												 <li><a href="#">Gallary</a></li>

												 <li><a href="#">News & Blog</a></li>

											 </ul>

										

										</div>

										

										<div class="sett">

										

										      <div class="att">

											    <a href="<?php echo base_url();?>Shopping_Controller/cart"><img src="<?php echo base_url();?>MainFiles/images/addto.png" alt=""/>

												

												<div class="binn">

												

												    <label id="cartcount">  </label>

												   

												 </div>

												 

												</a>

											 

											 </div>

											 

											 <div class="log">

											 

											  <div class="dropdown">

													<button onclick="myFunction()" class="dropbtn"><img src="<?php echo base_url();?>MainFiles/images/lgg.png" alt=""/></button>

													

													  <div id="myDropdown" class="dropdown-content">

													  

													  <?php if(($CustomerID!=0)||($CustomerID!=null)||($CustomerID!="")){?>

													  <a id="myBtn"></a>

													  <a href="<?php echo base_url();?>OrderMaster_Controller/order_history">Orders History</a>

														<a href="<?php echo base_url();?>Login_Controller/logout">Logout</a>

													  <?php } else {?>

													  	<a id="myBtn">Quick Log In</a>

														<a href="<?php echo base_url()?>Login_Controller">Login</a>

														

													  <?php } ?>

														<!-- Login form -->

														

														<div id="myModal" class="modal">



														  <!-- Modal content -->

														  <div class="modal-content">

															<span class="close">&times;</span>

															

															  <h2>Login</h2>

															  

															  <!--form stars-->

															  

															<form id="loginform" method="post"  enctype="data/multipart">

								

															  <table width="470px" style="background:rgba(255,255,255,.8);">

															  

															   <tr><td><label>User Name : </label></td><td><input type="text" placeholder="Name" name="Name" id="Name" ></td></tr>

															   

															    <tr><td><label>Password:</label></td><td><input type="password" placeholder="Password" name="Password"></td></tr>



															</table>

															

															 <div class="mbnn">

																<button form="nameform" onclick="login();" >Submit</button>

															</div>

															

															</form>



									                     <!--form ends-->

													   

														  </div>



														</div>

														

														<!--login form end-->

														

													  </div>

													</div>

											 

											 

											 </div>

										

										</div>

								  

								  </div>

							

							</div>

					  

					  </div>

				 

				 </div>

				 <!--about banner block starts-->

				 

				    <div class="about">

					

						

						   <div class="centering">

						   

							  

							      <h2>Order History</h2>



						</div>

					

					</div>

				 

				 <!--about banner block ends-->

				

			</div>

			

			<!--finish header bar-->



		</div>

		<!-- finish header -->

		

		<!-- begin content -->

		<div id="content-wrap">

			

			<!-- begin centerwrap -->

			<div id="center-wrap">

			

			   <!--how we work bar starts-->

			   

			     <div class="derr-bar">

				 

				     <div class="orryy">

					 

					   <div class="centering">

					   

					   

					        <div class="ixnt">

							

							    

								<!--left side starts-->

								<?php $open=0;

								$open1=0;

								$prevorder="";

								foreach($CusOrders as $roworder){

									if($prevorder!=$roworder["OrderCode"]){

									$prevorder=$roworder["OrderCode"];

										if($open1==1){

											echo "</div>";

											$open1=0;

										}

										if($open==1){

											echo "</div>";

											$open=0;

										}

										?>

								 <div class="mhiss">

								 

									<?php

									

									 $open1=1;

									

									?>

									

								    <div class="top">

										

									    <!--left side-->

										<?php

									

											 $open=1;

										

									?>

										<div class="leftty">

										

										

										     <h4>Order Placed</h4>

											 <p><?php echo $roworder["OrderDate"];?></p>

										   

										

										</div>

										

										<!--right side-->

										

										<div class="righttty">

										

										    <!--sub left-->

											<div class="oortt">

											

											     <h4>Total</h4>

												 <p><i class="fa fa-rupee"></i> <?php echo $roworder["GrandTotal"];?></p>

											

											</div>

											

											<!--sub right-->

											

											<div class="plllyyu">

											

											 <div class="lrrgghht">

											 

											 

											     <h4>Status</h4>

												 <p><?php if($roworder["Status"]==0){?> Order Pending <?php } else if($roworder["Status"]==1) {?> Order Confirmed <?php } else if($roworder["Status"]==2) {?> Order Delivered <?php } else if($roworder["Status"]==3) {?>Order Cancelled <?php } else if($roworder["Status"]==4) {?>Order Returned <?php } ?></p>

											 

											 

											 </div>



											<div class="pprtt">

											

											

											     <!--sub sub left-->

												 <div class="uurr">

												 

												 

												    <h4> Order No</h4>

													<p><?php echo $roworder["OrderCode"];?></p>

												 

												 

												 </div>

												 

												 <!--sub sub right-->

												 <div class="yyrr">

												 

												    

													<h4> Track your order</h4>
													<?php if($roworder["Status"]==0){ ?>
													<p>Your order is yet to be confirmed.</p>
													<?php } else{?>

													<a href="<?php echo base_url();?>Cart_Controller/trackorder/<?php echo $roworder["ID"]; ?>">Tracking Details</a>

												 	<?php } ?>

												 

												 </div>

											

											

											</div>

											

											</div>

										

										

										</div>

									    

									<!--/div-->

									<?php  if($open==1) {echo "</div>"; $open=0;} } ?>

									<!--repeat-->

									

									<div class="bottom">

									

									   <!--left-->

									

									    <div class="leftr">

										

										

										    <img src="<?php echo base_url();?>ItemPhoto/<?php echo $roworder["ItemPhoto"];?>" alt=""/>

										

										

										</div>
										

										<!--right-->

										<div class="rihttu">

										

										

										     <!--sub left-->

											 <div class="kknn">

											 

											    <h5>Product Name:</h5>

											 

											    <p><?php echo $roworder["ItemName"];?></p>

											 

											 

											 </div>

											 

											 <!--sub right-->

											 <div class="llrrn">

											 

											 

											    <h5>Delivered Date</h5>

												<p>20/05/2017</p>

												

												<div class="sddddn">

												

												

												   <div class="left">

												   

												      <!-- <button type="submit">Canceled</button>-->

												   

												   </div>

												   

												   <div class="right">

												   

												      <!-- <button type="submit">Save</button>-->

												   

												   </div>

												

												</div>

											 

											 

											 </div>

										

										

										</div>

									

									

									</div>

									 <!--/div-->

								

								<!--left side ends-->

								<?php  } 

								if($open1==1){

									echo "</div>";

									$open1=0;

								}

								if($open==1){

									echo "</div>";

									$open=0;

								}

								?>

									

									

									<!--2nd endds

									<div class="bottom">

									

									   <!--left

									

									    <div class="leftr">

										

										

										    <img src="images/food-1.jpg" alt=""/>

										

										

										</div>

										

										<!--right-

										<div class="rihttu">

										

										

										     <!--sub left

											 <div class="kknn">

											 

											    <h5>Product Name:</h5>

											 

											    <p>Pure & Sure Organic Honey, 250g </p>

											 

											 

											 </div>

											 

											 <!--sub right

											 <div class="llrrn">

											 

											 

											    <h5>Delivered Date</h5>

												<p>20/05/2017</p>

												

												<div class="sddddn">

												

												

												   <div class="left">

												   

												       <button type="submit">Canceled</button>

												   

												   </div>

												   

												   <div class="right">

												   

												       <button type="submit">Save</button>

												   

												   </div>

												

												</div>

											 

											 

											 </div>

										

										

										</div>

									

									

									</div>

									

									<!--3 ends-->

								 

								

								<!--2
								 <div class="mhiss">

								 

								    <div class="top">

									

									    <!--left side
										

										<div class="leftty">

										

										

										     <h4>Order Placed</h4>

											 <p>20/05/2017</p>

										   

										

										</div>

										

										<!--right side
										

										<div class="righttty">

										

										    <!--sub left
											<div class="oortt">

											

											     <h4>Total</h4>

												 <p>1000.00</p>

											

											</div>

											

											<!--sub right


											<div class="pprtt">

											

											

											     <!--sub sub left
												 <div class="uurr">

												 

												 

												    <h4>Lorem Ipsum</h4>

													<p>Sumit Sharma</p>

												 

												 

												 </div>

												 

												 <!--sub sub right
												 <div class="yyrr">

												 

												    

													<h4> Order No</h4>

													<p>1200BN001009</p>

													<a href="order-details.html">Order Details</a>

												 

												 

												 </div>

											
											

											</div>

										

										

										</div>

									    

									</div>

									

									<div class="bottom">

									

									   <!--left
									

									    <div class="leftr">

										

										

										    <img src="<?php echo base_url();?>MainFiles/images/food-4.jpg" alt=""/>

										

										

										</div>

										

										<!--right
										<div class="rihttu">

										

										

										     <!--sub left
											 <div class="kknn">

											 

											    <h5>Product Name:</h5>

											 

											    <p>Pure & Sure Organic Honey, 250g </p>

											 

											 

											 </div>

											 

											 <!--sub right
											 <div class="llrrn">

											 

											 

											    <h5>Delivered Date</h5>

												<p>20/05/2017</p>

												

												<div class="sddddn">

												

												

												   <div class="left">

												   

												       <button type="submit">Canceled</button>

												   

												   </div>

												   

												   <div class="right">

												   

												       <button type="submit">Save</button>

												   

												   </div>

												

												</div>

											 

											 

											 </div>

										

										

										</div>

									

									

									</div>

								 

								 </div>

								 

								 <!--3
								 

								  <div class="mhiss">

								 

								    <div class="top">

									

									    <!--left side
										

										<div class="leftty">

										

										

										     <h4>Order Placed</h4>

											 <p>20/05/2017</p>

										   

										

										</div>

										

										<!--right side
										

										<div class="righttty">

										

										    <!--sub left
											<div class="oortt">

											

											     <h4>Total</h4>

												 <p>1000.00</p>

											

											</div>

											

											<!--sub right


											<div class="pprtt">

											

											

											     <!--sub sub left												 <div class="uurr">

												 

												 

												    <h4>Lorem Ipsum</h4>

													<p>Sumit Sharma</p>

												 

												 

												 </div>

												 

												 <!--sub sub right
												 <div class="yyrr">

												 

												    

													<h4> Order No</h4>

													<p>1200BN001009</p>

													<a href="order-details.html">Order Details</a>

													

													

												 

												 

												 </div>

											

											

											</div>

										

										

										</div>

									    

									</div>

									

									<div class="bottom">

									

									   <!--left
									

									    <div class="leftr">

										

										

										    <img src="<?php echo base_url();?>MainFiles/images/food-2.jpg" alt=""/>

										

										

										</div>

										

										<!--right
										<div class="rihttu">

										

										

										     <!--sub left
											 <div class="kknn">

											 

											    <h5>Product Name:</h5>

											 

											    <p>Pure & Sure Organic Honey, 250g </p>

											 

											 

											 </div>

											 

											 <!--sub righ
											 <div class="llrrn">

											 

											 

											    <h5>Delivered Date</h5>

												<p>20/05/2017</p>

												

												<div class="sddddn">

												

												

												   <div class="left">

												   

												       <button type="submit">Canceled</button>

												   

												   </div>

												   

												   <div class="right">

												   

												       <button type="submit">Save</button>

												   

												   </div>

												

												</div>

											 

											 

											 </div>

										

										

										</div>

									

									

									</div>

								 

								 </div>

								 

								 

								 <!--4
								 

								  <div class="mhiss">

								 

								    <div class="top">

									

									    <!--left side
										

										<div class="leftty">

										

										

										     <h4>Order Placed</h4>

											 <p>20/05/2017</p>

										   

										

										</div>

										

										<!--right side
										

										<div class="righttty">

										

										    <!--sub left
											<div class="oortt">

											

											     <h4>Total</h4>

												 <p>1000.00</p>

											

											</div>

											

											<!--sub right


											<div class="pprtt">

											

											

											     <!--sub sub lef

												 <div class="uurr">

												 

												 

												    <h4>Lorem Ipsum</h4>

													<p>Sumit Sharma</p>

												 

												 

												 </div>

												 

												 <!--sub sub right
												 <div class="yyrr">

												 

												    

													<h4> Order No</h4>

													<p>1200BN001009</p>

													<a href="order-details.html">Order Details</a>

												 

												 

												 </div>

											

											

											</div>

										

										

										</div>

									    

									</div>

									

									<div class="bottom">

									

									   <!--left									

									    <div class="leftr">

										

										

										    <img src="<?php echo base_url();?>MainFiles/images/food-3.jpg" alt=""/>

										

										

										</div>

										

										<!--right
										<div class="rihttu">

										

										

										     <!--sub left
											 <div class="kknn">

											 

											    <h5>Product Name:</h5>

											 

											    <p>Pure & Sure Organic Honey, 250g </p>

											 

											 

											 </div>

											 

											 <!--sub right
											 <div class="llrrn">

											 

											 

											    <h5>Delivered Date</h5>

												<p>20/05/2017</p>

												

												<div class="sddddn">

												

												

												   <div class="left">

												   

												       <button type="submit">Canceled</button>

												   

												   </div>

												   

												   <div class="right">

												   

												       <button type="submit">Save</button>

												   

												   </div>

												

												</div>

											 

											 

											 </div>

										

										

										</div>

									

									

									</div>

								 

								 </div>

								 

								 <!--5
								 

								  <div class="mhiss">

								 

								    <div class="top">

									

									    <!--left side
										

										<div class="leftty">

										

										

										     <h4>Order Placed</h4>

											 <p>20/05/2017</p>

										   

										

										</div>

										

										<!--right side
										

										<div class="righttty">

										

										    <!--sub left
											<div class="oortt">

											

											     <h4>Total</h4>

												 <p>1000.00</p>

											

											</div>

											

											<!--sub right


											<div class="pprtt">

											

											

											     <!--sub sub lef
												 <div class="uurr">

												 

												 

												    <h4>Lorem Ipsum</h4>

													<p>Sumit Sharma</p>

												 

												 

												 </div>

												 

												 <!--sub sub right
												 <div class="yyrr">

												 

												    

													<h4> Order No</h4>

													<p>1200BN001009</p>

													<a href="order-details.html">Order Details</a>

												 

												 

												 </div>

											

											

											</div>

										

										

										</div>

									    

									</div>

									

									<div class="bottom">

									

									   <!--left
									

									    <div class="leftr">

										

										

										    <img src="<?php echo base_url();?>MainFiles/images/food-5.png" alt=""/>

										

										

										</div>

										

										<!--right
										<div class="rihttu">

										

										

										     <!--sub left
											 <div class="kknn">

											 

											    <h5>Product Name:</h5>

											 

											    <p>Pure & Sure Organic Honey, 250g </p>

											 

											 

											 </div>

											 

											 <!--sub right
											 <div class="llrrn">

											 

											 

											    <h5>Delivered Date</h5>

												<p>20/05/2017</p>

												

												<div class="sddddn">

												

												

												   <div class="left">

												   

												       <button type="submit">Canceled</button>

												   

												   </div>

												   

												   <div class="right">

												   

												       <button type="submit">Save</button>

												   

												   </div>

												

												</div>

											 

											 

											 </div>

										

										

										</div>

									

									

									</div>

								 

								 </div>

								 

								 <!--6-->

								

								

							</div>

					   

					   </div>

					 

					 </div>

				 

				 </div>

			   

			   <!--how we work bar ends-->

			   

			  

			</div>

			<!-- finish center wrap -->



		</div>

		<!-- finish content -->

		

		<!-- begin footer -->

		<div id="footer-wrap">



			<!--footer block starts-->

			

			<div class="footer-block">

			

			      <a href="#section" class="scrollup smoothscroll">

                    <img src="<?php echo base_url();?>MainFiles/images/up-2.png" alt="" />

                    </a>

			

			      <div class="foot">

				  

				      <div class="centering">

					  

					      <div class="main">

						  

						       <div class="boox">

							   

							       <h2> Category </h2>

								   

								   <div class="arrn">

								   

								       <ul>

									   

									       <li> <a href="#">Grocery & Staples</a></li>

										   <li> <a href="#">Breakfast & Dairy</a></li>

										   <li> <a href="#">Namkeen</a></li>

										   <li> <a href="#">Noodles & Pasta</a></li>

										   <li> <a href="#">Laundy Detergents</a></li>

										   <li> <a href="#">Biscuits & Cookies</a></li>

										   

									   </ul>

								   

								   </div>

							   

							   </div>

							   

							   <!--2nd box-->

							   <div class="boox">

							   

							       <h2> Useful Links</h2>

								   

								   <div class="arrn">

								   

								       <ul>

									   

									       <li> <a href="#"> About Us</a></li>

										   <li> <a href="#"> Contact Us</a></li>

										   <li> <a href="#"> Privacy Policy</a></li>

										   <li> <a href="#"> Terms & Conditions</a></li>

										   <li> <a href="#"> Get Your Store Listed</a></li>

										   <li> <a href="#"> FAQ</a></li>

										   

									   </ul>

								   

								   </div>

							   

							   </div>

							   

							   <!--3rd box-->

							   <div class="exbx">

							   

							       <h2> Follow Us</h2>

								   

								   <div class="social">

								   

								       <ul>

									   

									       <li> <a href="#"><img src="<?php echo base_url();?>MainFiles/images/fb.png" alt=""/></a></li>

										   <li> <a href="#"><img src="<?php echo base_url();?>MainFiles/images/tw.png" alt=""/></a></li>

										   <li> <a href="#"><img src="<?php echo base_url();?>MainFiles/images/in.png" alt=""/></a></li>

										   <li> <a href="#"><img src="<?php echo base_url();?>MainFiles/images/glp.png" alt=""/></a></li>

										   <li> <a href="#"><img src="<?php echo base_url();?>MainFiles/images/yt.png" alt=""/></a></li>



									   

									   </ul>

								   

								   </div>

							   

							   </div>

							   

							   <!--footer bottom starts-->

							   

							    <div class="bttm">

								

								    <h2>Brands</h2>

									

									<div class="ext">

									

									   <ul>

									   

									      <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Mirinda</a></li>

										  <li><a href="#">Mother Dairy</a></li>

										  <li><a href="#">Mountain Dew</a></li>

										  <li><a href="#">Nescafe</a></li>

										  <li><a href="#">Nestle</a></li>

										  <li><a href="#">Nivea</a></li>

										  <li><a href="#">Nutella</a></li>

										  <li><a href="#">Palmolive</a></li>

										  <li><a href="#">Pantene</a></li>

										  <li><a href="#">Paper Boat</a></li>

										  <li><a href="#">Parachute</a></li>

										  <li><a href="#">Parle</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  

									      <li><a href="#">Nestle</a></li>

										  <li><a href="#">Nivea</a></li>

										  <li><a href="#">Nutella</a></li>

										  <li><a href="#">Palmolive</a></li>

										  <li><a href="#">Pantene</a></li>

										  <li><a href="#">Paper Boat</a></li>

										  <li><a href="#">Parachute</a></li>

										  <li><a href="#">Parle</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  

										  <li><a href="#">Nestle</a></li>

										  <li><a href="#">Nivea</a></li>

										  <li><a href="#">Nutella</a></li>

										  <li><a href="#">Palmolive</a></li>

										  <li><a href="#">Pantene</a></li>

										  <li><a href="#">Paper Boat</a></li>

										  <li><a href="#">Parachute</a></li>

										  <li><a href="#">Parle</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  <li><a href="#">Minute Maid</a></li>

										  

									   </ul>

									

									</div>

								

								</div>

							   

							   <!--footer bottom ends-->

						  

						  </div>

					  

					  </div>

				  

				  </div>

			

			</div>

			

			<!--footer block ends-->



		</div>

		<!-- finish footer -->

		

	</div>

	<!-- finish page wrap -->

	

</div>

<!-- finish section -->

<!--popup menu-->

		

		<script>

		var modal = document.getElementById('myModal');



		var btn = document.getElementById("myBtn");

		

		var span = document.getElementsByClassName("close")[0];



		btn.onclick = function() {

			modal.style.display = "block";

		}

		

		span.onclick = function() {

			modal.style.display = "none";

		}



		window.onclick = function(event) {

			if (event.target == modal) {

				modal.style.display = "none";

			}

		}

		</script>

		

		



<!--js for flexslider-->

<script src="<?php echo base_url();?>MainFiles/js/jquery-1.11.3.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>MainFiles/js/jquery.flexslider.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>MainFiles/js/jquery.smooth-scroll.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>MainFiles/js/custom.js" type="text/javascript"></script>

<script type="text/javascript">

	

	$('.smoothscroll').smoothScroll();

	

</script>

<script>



$(document).ready(function() {

		    cartcount();

		});

function cartcount(){

			//alert('notification count');

			var html="";

			var count=0;

			$.ajax({

				url:'<?php echo base_url();?>Shopping_Controller/cartcount/',

				type:'ajax',

				dataType:'json',

				success:function(data){

					

					count=data.length;

					html +='<h5>'+count+'</h5>';

					if(data.length!=0)

					{

					 $('#cartcount').html('');

				$('#cartcount').html(html);

					}

					

				},

				error:function(){

					alert('Sorry count');

				}

				

			});

		}



</script>



</body>



</html>