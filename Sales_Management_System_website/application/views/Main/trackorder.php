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

	<title>Tracking</title>

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
								  
								     <a href="<?php echo base_url();?>Shopping_Controller"> <img src="<?php echo base_url();?>MainFiles/images/logo-1.png" alt=""/></a>
								  
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
				 
				    <div class="about">
					
						
						   <div class="centering">
						   
							  
							      <h2>Tracking</h2>

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
			   
			     <div class="track-bar">
				 
				     <div class="ourt">
					 
					   <div class="centering">
					   
					   
					        <div class="poppo">
							
							   
								<!--right side starts-->
								
								<div class="kjiio">
								
								   <h2>Tracking</h2>
								   
								    <div class="wqiit">
									
									
									    
										   <!--bottom part starts
										   
										   
										   <div class="kiillo">
										   
										   
										      <table >
											      
												  <tr><td><input type="text" placeholder="Enter Your Tracking Code..." name="Name" id="Name"></td> <td><label>Track</label></td></tr>
															  
											      
								              </table>
										 
											
										   </div>
										   
										   <!--bttom part ends-->
									
									</div>
									
									
									<!--consignment no starts-->
									<?php $open=0; 
									$PrevCon="";
									foreach($ConsignmentDetail as $rowcon){
										if(($open==0) &&($PrevCon!=$rowcon["ConsignmentNo"])){
										$PrevCon=$rowcon["ConsignmentNo"];
										$open=1;
										?>
									<div class="consignmenthead">
									<div class="vdghnm">
									
									
									    <h2>Consignment No: <span><?php echo $rowcon["ConsignmentNo"];?></span></h2>
									
									
									</div>
									
									<!--consignment no ends-->
									
									
									
									<!--progress bar starts-->
									
									 <div class="book">
									 <?php if($rowcon["StatusID"]==2){?>
									
										<div class="progress">
										
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%; background-color:#5bc0de;; color:#666;">
										   
												<p><?php echo $rowcon["StatusDetail"];?></p>
											 
											</div>
											
										</div>
									 <?php } else if($rowcon["StatusID"]==3) { ?>	
										<!--2-->
										<div class="progress">
										
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%; background-color:#F0F010; color:#666;">
										
											
									   
                                              <p><?php echo $rowcon["StatusDetail"];?></p>
										 
                                           </div>
											
										</div>
									 <?php } else if($rowcon["StatusID"]==4) { ?>		
										<!--3-->
										<div class="progress">
										
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%; background-color:#F0F010; color:#666;">
											
											
									   
                                               <p><?php echo $rowcon["StatusDetail"];?></p>
										 
                                            </div>
											
										</div>
									<?php } else if($rowcon["StatusID"]==5) { ?>		
										<!--4-->
										<div class="progress">
										
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:85% ; background-color:#3fe43f;">
											
									   
                                              <p><?php echo $rowcon["StatusDetail"];?></p>
										 
                                           </div>
											
										</div>
										
										<!--5-->
										<?php } else if($rowcon["StatusID"]==6) { ?>		
										
										<div class="progress">
										
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:85% ; background-color:#3fe43f;">
											
									   
                                              <p><?php echo $rowcon["StatusDetail"];?></p>
										 
                                           </div>
											
										</div>
										
										<!--6-->
										
										<?php } else if($row["StatusID"]==7) { ?>		
										
										<div class="progress">
										
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100% ; background-color:#FF5B5B;">
											
									   
                                              <p><?php echo $rowcon["StatusDetail"];?></p>
										 
                                           </div>
											
										</div>
										<?php }?>
										<!--5-->
								    </div>
								
										<?php   echo "</div>"; } $open=0;  ?>
									<!--progress bar ends-->
									
									<!--status bar starts-->
									
									
									  <div class="status">
									  
									  
									     <div class="amnn">
										   
										   <div class="box">
										   
										   
										      <h4>DATE</h4>
											  
											  <ul>
											  
											     <li><?php echo $rowcon["Date"];?></li>
												 
											  
											  </ul>
										   
										   
										   </div>
										 
										  
										   
										   <!--3-->
										    <div class="box">
										   
										   
										      <h4>STATUS</h4>
											  
											  <ul>
											  
											     <li><?php 
													 echo $rowcon["StatusDetail"];?>
												 
												 </li>
												 
											  
											  </ul>
										   
										   
										   </div>
										   
										   <!--4-->
									  
									    </div>
									  
									  </div>
									<?php } ?>
									
									<!--status bar ends-->
								   
								
								</div>
								
								<!--right side ends-->
								
							
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
						'<a href="<?php echo base_url();?>Login_Controller/logout">Logout</a>';alert(html);
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
</script>

</body>

</html>