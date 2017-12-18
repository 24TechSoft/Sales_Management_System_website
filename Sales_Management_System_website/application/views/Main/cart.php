<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">



<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="key, words"/>	

	<meta name="description" content="Website description"/>

	<meta name="robots" content="noindex, nofollow"/><!-- change into index, follow -->

	<meta name="format-detection" content="telephone=no" />



	<!-- Mobile Specific Metas ================================================== -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>



	<title>Cart</title>



	<link rel="stylesheet" href="<?php echo base_url();?>MainFiles/styles/layout.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url();?>MainFiles/fonts/fonts.css" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <script type="text/javascript" src="<?php echo base_url();?>MainFiles/js/jquery-1.7.1.min.js"></script>

	<!-- font awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	

	<!--favicon set-->

	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>MainFiles/images/favi.png">

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

								  

								     <a href="#"></a><img src="<?php echo base_url();?>MainFiles/images/logo-1.png" alt=""/></a>

								  

								  </div>

								  

								  <div class="right">

								  

								        <div class="pnnav">

										

										     <ul>

											 

											     <li><a href="<?php echo base_url();?>Shopping_Controller">Home</a></li>

												 <li><a href="<?php echo base_url();?>Login_Controller/about">About Us</a></li>

												 <li><a href="#">Features</a></li>

												 <li><a href="#">Gallery</a></li>

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
														<a href="<?php echo base_url();?>Login_Controller/signup/">Sign Up</a>
														<a href="<?php echo base_url()?>Login_Controller">Login</a>

														

													  <?php } ?>

														<!-- Login form -->

														

														<div id="myModal" class="modal">



														  <!-- Modal content -->

														  <div class="modal-content">

															<span class="close">&times;</span>

															

															  <h2>Quick Login</h2>

															  

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

				 

				    <div class="cart">

					

						

						   <div class="centering">

						   

							  

							      <h2>Add Cart</h2>



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

			

			  <!--add cart bar starts-->

			  

			    <div class="add-bar">

				

				    <div class="crt">

					

					    <div class="centering">

						

						

						    <div class="prccc">

							

							    



                                   <div class="qytt">

								   

								       <div class="left">

									   

									         <h3>Item Name</h3>

											 

									   

									   </div>



                                       <div class="right">

									   

									        <div class="desi">

											

											  <h3>Description</h3>

											 

											

											</div>

											

											<div class="qtty">

											

											

											    <div class="ltt">

												

											      <h3>Qty</h3>

												

												</div>



												<div class="rtts">

												

												   <div class="pric">

												   

												       <h3>Price</h3>

												   

												   </div>

												   

												   <div class="tott">

												   

												      

													  

													  <div class="rttt">

													  

													  

													  

													  </div>

												   

												   </div>

												

												</div>

											

											</div>

									   

									   </div>									   

								   

								   </div>



                                  <!--00-->

								  <?php 

									$ID=0;

									$ItemID=0;

									$ItemName="";

									$PackageQuantity=0;

									$PackagePrice=0;

									$TotalPrice=0;

									$PackageName="";

								//	$PackageQuantity=0;

									$DateOfOrder="";

									$ItemDescription="";

									

									foreach($Ordered_Items as $row){

										$ID=$row["ID"];

										$ItemID=$row["ItemID"];

										$ItemName=$row["ItemName"];

										$PackageQuantity=$row["PackageQuantity"];

										$PackagePrice=$row["PackagePrice"];

										$TotalPrice=$row["TotalPrice"];

										$PackageName=$row["PackageName"];

										//$TotalQuantity=$row["TotalQuantity"];

										$DateOfOrder=$row["DateOfOrder"];

										$ItemDescription=$row["ItemDescription"];

										

									

									?>

									

								  <div class="qytt">

								   

								       <div class="left">

									   

											 <p><input type="hidden" id="itemname" value="<?php echo $ItemName; ?>"/><?php echo $ItemName; ?>(<?php echo $PackageName; ?>)</p>

									   

									   </div>



                                       <div class="right">

									   

									        <div class="desi">

											

											  <p><?php echo $ItemDescription; ?></p>

											

											</div>

											

											<div class="qtty">

											

											

											    <div class="ltt">

												

											      <div class="count-input space-bottom">

												  

                                                                  <a class="incr-btn" data-action="decrease" onclick="showd(<?php echo $ID; ?>);">–</a>

                                                                  <input class="quantity" type="text" name="quantity"id="quantity<?php echo $ID; ?>" value="<?php echo $PackageQuantity;?>"  />

                                                                  <a class="incr-btn"  data-action="increase" onclick="show(<?php echo $ID; ?>);">&plus;</a>

                                                  </div>

												

												</div>



												<div class="rtts">

												

												   <div class="pric">

													   <div id="totprice">

													   <p><i class="fa fa-rupee"></i><input type="hidden" id="price" value="<?php echo $TotalPrice; ?>"/> <?php echo $TotalPrice;?></p>

													</div>

												   </div>

												   

												   <div class="tott">

												   

													  

													  <div class="rttt">

													  

													     <a href="<?php echo base_url();?>Shopping_Controller/removecart/<?php echo $ID; ?>"> <button type="button" ></button> </a>

													  

													  </div>

													  

													    

												   

												   </div>

												

												</div>

											

											</div>

									   

									   </div>									   

								   

								   </div>

								   <?php } ?>

								   <!--01-->

								   <div class="qytt" style="border-top:solid 1px;">

								   

								       <div class="left">

									   

									         <h3>Total Price</h3>

											 

									   

									   </div>



                                       <div class="right">

									   

									        <div class="desi">

											

											  <h3></h3>

											 

											

											</div>

											

											<div class="qtty">

											

											

											    <div class="ltt">

												

											      <h3></h3>

												

												</div>



												<div class="rtts">

												

												   <div class="pric">

												   

												       <h3><input type="hidden"  id="totalprice" value="<?php echo $OrderPrice; ?>"/><i class="fa fa-rupee"></i> <?php echo $OrderPrice; ?></h3>

												   

												   </div>

												   

												   <div class="tott">

												   

												      

													  

													  <div class="rttt">

													  

													  

													  

													  </div>

												   

												   </div>

												

												</div>

												

											

											</div>

									   

									   </div>									   

								   

								   </div>

								   

								    <!-- Tax amount charge
								   <div class="qytt" >

								   

								       <div class="left">

									   

									         <h3>Tax Amount</h3>

											 

									   

									   </div>



                                       <div class="right">

									   

									        <div class="desi">

											

											  <h3></h3>

											 

											

											</div>

											

											<div class="qtty">

											

											

											    <div class="ltt">

												

											      <h3></h3>

												

												</div>



												<div class="rtts">

												

												   <div class="pric">

												  <h3><i class="fa fa-rupee"></i> <?php echo $TaxAmount;?></h3>

												   </div>

												   

												   <div class="tott">

												   

												      

													  

													  <div class="rttt">

													  

													  

													  

													  </div>

												   

												   </div>

												

												</div>

												

											

											</div>

									   

									   </div>									   

								   

								   </div>-->

								   

								   

								   <!-- delivery charge-->

								   <div class="qytt" style="border-bottom:solid 1px;">

								   

								       <div class="left">

									   

									         <h3>Delivery Charge</h3>

											 

									   

									   </div>



                                       <div class="right">

									   

									        <div class="desi">

											

											  <h3></h3>

											 

											

											</div>

											

											<div class="qtty">

											

											

											    <div class="ltt">

												

											      <h3></h3>

												

												</div>



												<div class="rtts">

												

												   <div class="pric">

												   <?php if($Delivery==0) {?>

												       <h3>Free Delivery</h3>

												   <?php } else {?>

														<h3 id="charge" value="<?php echo $Delivery; ?>" /><i class="fa fa-rupee"></i> <?php echo $Delivery; ?></h3>

												   <?php } ?>

												   </div>

												   

												   <div class="tott">

												   

												      

													  

													  <div class="rttt">

													  

													  

													  

													  </div>

												   

												   </div>

												

												</div>

												

											

											</div>

									   

									   </div>									   

								   

								   </div>

								   <div class="qytt" style="border-bottom:solid 1px;">

								   

								       <div class="left">

									   

									         <h3>Grand Total</h3>

											 

									   

									   </div>



                                       <div class="right">

									   

									        <div class="desi">

											

											  <h3></h3>

											 

											

											</div>

											

											<div class="qtty">

											

											

											    <div class="ltt">

												

											      <h3></h3>

												

												</div>



												<div class="rtts">

												

												   <div class="pric">

												   

												       <h3><i class="fa fa-rupee"></i> <?php echo $GrandTotal; ?><h3>

												   </div>

												   

												   <div class="tott">

												   

												      

													  

													  <div class="rttt">

													  

													  

													  

													  </div>

												   

												   </div>

												

												</div>

												

											

											</div>

									   

									   </div>									   

								   

								   </div>

								

								   

								   <!--submit button starts-->

								  

								   <div class="smbitt">

								  

								     <button type="submit" form="nameform" onclick="checkout(<?php echo $CustomerID; ?>);" >Proceed To Checkout</button>

								  

								   </div>

								  

								   <!--submit button ends-->

							

							</div>

						

						</div>

					

					</div>

				

				</div>

			  

			  

			  <!--add cart bar ends-->

			   

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



<script type="text/javascript">



 $(document).ready(function() {

		    cartcount();

		});



function show(id){

	var i=document.getElementById('quantity'+id).value;

	var itemquantity=parseInt(i)+1;

	var url='<?php echo base_url();?>Shopping_Controller/updatecart/'+id+'/'+itemquantity;

	var html="";

	$.ajax({

		url:url,

		type:'ajax',

		dataType:'json',

		success:function(data){

			//alert(data);

			window.location.reload(true);

		},

		error:function(){

			alert('not updated');

		}

	});

}
/*

function showd(id){

	var i=document.getElementById('quantity'+id).value;

	var itemquantity=parseInt(i)-1;

	var url='<?php echo base_url();?>Shopping_Controller/updatecart/'+id+'/'+itemquantity;

	var html="";

	$.ajax({

		url:url,

		type:'ajax',

		dataType:'json',

		success:function(data){

			//alert(data);

			window.location.reload(true);

		},

		error:function(){

			alert('not updated');

		}

	});

}
*/


function checkout(cid){

	//alert(cid);

	if((cid==0)||(cid=="")||(cid==null)){

		alert("You need login");

		window.location.href='<?php echo base_url();?>Login_Controller';

		

	}

	else{

		//window.location.href='<?php echo base_url();?>Cart_Controller';
		window.location.href='<?php echo base_url();?>Cart_Controller/vendorcheckout';

	}

	
	

}

function login(){

	var url='<?php echo base_url();?>Login_Controller/login';alert(url);

	var html="";

	$.ajax({

		url:url,

		type:'post',

		data:$('#loginform').serialize(),

		success:function(data){

			alert(data);

			document.getElementById('myModal').style.display="none";

			if(data!=1){

				html += '<a id="">Orders History</a>'+

						'<a href="<?php echo base_url();?>Login_Controller/logout">Logout</a>';//alert(html);

						$('#myDropdown').html('');

						$('#myDropdown').html(html);

						window.location.reload(true);

			}

		},

		error:function(){

			alert('sorry');

		}

	});

}



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