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



	<title>Addresss</title>



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

			<li><img src="<?php echo base_url();?>MainFiles/images/addto.png" alt=""/>

			 <div class="mmnn">

				

				   <label id="cartcount" ><label>

				

				</div>

			

			</li>

            	

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

								  

								     <a href="<?php echo base_url();?>"></a><img src="<?php echo base_url();?>MainFiles/images/logo-1.png" alt=""/></a>

								  

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

				 

				    <div class="cart">

					

						

						   <div class="centering">

						   

							  

							  <h2>Payment Option</h2>



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

			  

			    <div class="payment-bar">

				

				    <div class="optio">

					

					    <div class="centering">

						

						

						    <div class="mainto">

							

							    <h2> Payment Option</h2>

								

								<!--<div class="radi">

								

									<form>

									

									  <input type="radio" name="gender" value="cod" checked> <p>COD</p>

									  <input type="radio" name="gender" value="debit card"> <p>Debit Card</p>

									  <input type="radio" name="gender" value="credit card"> <p>Credit Card</p>

									  <input type="radio" name="gender" value="netbanking"> <p>Net Banking</p></br>

									  

									</form> 



								

								</div>

								

								<!--optional address-->

								

								<div class="opnal">

 

                              <div class="bnmain">

							  

                                 <?php 

											$ID=0;

											$CustomerID=0;

											$OrderID=0;

											$Address="";

											$Locality="";

											$Village="";

											$State="";

											$PinCode="";

											$Landmark="";
											
											$count=0;

											foreach($Place as $row){

												$ID=$row["ID"];

												$CustomerID=$row["CustomerID"];

												$OrderID=$row["OrderID"];

												$Address=$row["Address"];

												$Locality=$row["Locality"];

												$Village=$row["Village"];

												$State=$row["State"];

												$PinCode=$row["PinCode"];

												$Landmark=$row["Landmark"];

												?> 

								  

								 

									

									<div class="pre-add">

									

									

									     <input type="radio" name="gender" id="addresses<?php echo $count; ?>" value="<?php echo $ID; ?>" onchange="changeadd(this.value);" class="cusAdd">

									  

									  



										  <p>

											 Address: <?php echo nl2br($Address)."\n";?>Locality: <?php echo $Locality."\n";?>Village: <?php echo $Village."\n";?>State: <?php echo $State."\n";?>PinCode:<?php echo $PinCode."\n";?>Landmark: <?php echo $Landmark."\n";?>

										  </p>



											

										  

                        

						              </div>

									  

								

									  

									  <?php $count++;} ?>

									  

									  <div class="newarr">

									  

									     <input type="radio" name="gender" id="addresses" value="" onchange="changeadd(this.value);" checked>New Address

										 

									  </div>

									  

								</div>

									 

									

								</div>

								

								<!--optional address ends-->

								

								<!--main form stars-->

								<div class="oders" id="orders">

									

								  <form id="addressform">



								      <table width="500px" style="background:rgba(255,255,255,.8);">

								

									   <tr><td><label id="a" style="display:none">Name : </label></td><td><input type="text" name="CusName" id="CusName" value="" style="display:none"></td></tr>

									   <tr><td><label id="c"  style="display:none">Email ID : </label></td><td><input type="text"  style="display:none" placeholder="Enter Your Email ID" name="email" id="email"></td></tr>

									   <tr><td><label id="b"  style="display:none">Phone No : </label></td><td><input type="text"  style="display:none" placeholder="Enter Phone No" name="phone" id="phone"></td></tr>

									   

									   <tr><td><label>Delivery Address :</label></td><td><textarea rows="4" cols="50" placeholder="delivery address details" name="address" id="address"></textarea></td></tr>

									   

									   <tr><td><label>Location : </label></td><td><input type="text" placeholder="Enter Phone No" name="locality" id="locality"></td></tr>

									   

									   <tr><td><label>PIN Code : </label></td><td><input type="text" placeholder="Enter Phone No" name="pin" id="pin" ></td></tr>

									   

									   <tr><td><label>Land Mark : </label></td><td><input type="text" placeholder="Enter Phone No" name="landmark" id="landmark"></td></tr>

									    <tr><td><label>State : </label></td><td><input type="text" placeholder="Enter Phone No" name="state" id="state"></td></tr>

									   

                                     <!--  <tr><td><label>State : </label></td><td><select name="PartyID" id="PartyID">

									   <option value="1">Assam</option>

									   <option value="2">Bengal</option>

									   </select></td></tr>-->

									   

									    <tr><td><label>City/Vill : </label></td><td><input type="text" placeholder="Enter Village" name="city" id="village" ></td></tr>

									   

								       

									</table>

								

								     <div class="submord">	

									  

								        <input type="button" name="btnSave" id="btnSave" onclick="placeorder();" value="Place Order"/>

										

										<a href="<?php echo base_url();?>/Shopping_Controller/cart"><input type="button" name="btnSave" id="btnSave" value="Go Back" /></a>

									  

								     </div>

								 

								 </form>

							

								

								</div>

							

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

<script>

$(document).ready(function() {

		    cartcount();

		});

	function changeadd(cid){

		//alert(cid);

		if(cid==""){

			var id=document.getElementById('addressform');

		id.reset(true);

		//document.getElementsByClassName('hide').style.display="none";

		document.getElementById('CusName').style.display="none";

		document.getElementById('email').style.display="none";

		document.getElementById('phone').style.display="none";

		document.getElementById('a').style.display="none";

		document.getElementById('b').style.display="none";

		document.getElementById('c').style.display="none";

		}

		else

		{

		var url='<?php echo base_url();?>Cart_Controller/address/'+cid;

		//alert(url);

		$.ajax({

			url:url,

			dataType:'json',

			type:'ajax',

			success:function(data){

				//alert(data.length);

				

				document.getElementById('CusName').style.display="block";

				document.getElementById('email').style.display="block";

				document.getElementById('phone').style.display="block";

				document.getElementById('a').style.display="block";

				document.getElementById('b').style.display="block";

				document.getElementById('c').style.display="block";

				

				for(var i=0;i<data.length;i++){

					

					//alert(document.getElementById("CusName").value);

					document.getElementById("CusName").value=data[i].Name.toString();

					

					document.getElementById("email").value=data[i].Email.toString();

					document.getElementById("phone").value=data[i].PhoneNo.toString();

					document.getElementById("address").value=data[i].Address.toString();

					document.getElementById("locality").value=data[i].Locality.toString();

					document.getElementById("state").value=data[i].State.toString();

					document.getElementById("pin").value=data[i].PinCode.toString();

					

					document.getElementById("village").value=data[i].Village.toString();

					

					document.getElementById("landmark").value=data[i].Landmark.toString();

					var k=document.getElementById("landmark").value;

					//alert(k);

					

					//document.getElementById("city").value=data[i].City.toString();

					//document.getElementById("CusName").value=data[i].Name.toString();

					

					//alert(data[i].Name);

				}

				

			},

			error:function(){

				alert('sorry');

			}

		});

		}

		

	}

	

	function placeorder(){

		var i=document.getElementById('addresses');

		var cusAdd=document.getElementsByClassName('cusAdd');
		alert("abc");
		for(var j=0;j<cusAdd.length;j++){
			if(cusAdd[j].checked==true){
				var addID=document.getElementById('addresses'+j).value;
				
			}
		}

		var newadd=0;

		//alert("outseide:"+newadd);

		if(i.checked==true){

			newadd=1;

		}

		var url='<?php echo base_url();?>OrderMaster_Controller/addaddress/'+newadd+'/'+addID;

		alert(url);

		var orderid=0;

		$.ajax({

			url:url,

			data:$('#addressform').serialize(),

			type:'post',

			dataType:'json',

			async:false,

			success:function(order){

				for(var i=0;i<order.length;i++){

				var ordercodes=order[i].OrderCode;

				orderid=order[i].ID;

				//alert(ordercodes);

				//alert(orderid);

				}

				window.location.href='<?php echo base_url();?>Cart_Controller/orderdetail/'+ordercodes+'/'+orderid;

			},

			error:function(){

				alert('error in placing order');

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

