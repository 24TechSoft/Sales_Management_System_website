
!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="key, words"/>	
	<meta name="description" content="Website description"/>
	<meta name="robots" content="noindex, nofollow"/><!-- change into index, follow -->
	<meta name="format-detection" content="telephone=no" />

	<!-- Mobile Specific Metas ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

	

	<link rel="stylesheet" href="/agriculture-food/styles/layout.css" type="text/css" />
	<link rel="stylesheet" href="/agriculture-food/fonts/fonts.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script type="text/javascript" src="/agriculture-food/js/jquery-1.7.1.min.js"></script>
	
</head>

<body>

<!-- begin section -->
<div id="section">
  <div id="section">
	
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
								  
								     <a href="#"></a><img src="/agriculture-food/images/logo.png" alt=""/></a>
								  
								  </div>
								  
								  <div class="right">
								  
								        <div class="nav">
										
										     <ul>
											 
											 </ul>
										
										</div>
										
										<div class="sett">
										
										     <!--<a href="#"><img src="/agriculture-food/images/set.png" alt=""/></a>-->
										
										</div>
								  
								  </div>
							
							</div>
					  
					  </div>
				 
				 </div>
				 	 
			</div>
			
			<!--finish header bar-->

		</div>
		<!-- finish header -->
	
	<!-- begin page-wrap -->
	<div id="page-wrap">
		
		<!-- begin content -->
		<div id="content-wrap">

			
			<!-- begin centerwrap -->
			<div id="center-wrap">
			
			  
			   <!--in stock bar starts-->
			   
			    <div class="in-bar">
				
				     <div class="stok">
					 
					     <div class="centering">
						 
						      <div class="okk">
							  
							      <h2>Login </h2>
								   <form id="damagestock_form" method="post" action="<?php echo base_url();?>Login_Controller/logins/" enctype="multipart/form-data">
								  <div class="stex">
								  
								       <table>
											  <tr><td><label>UserType: </label></td><td>
												    <select name="usertype">
														<option value="1">SuperAdmin</option>
														<option value="2">WarehouseAdmin</option>
														<option value="3">SupervisorAdmin</option>
														<option value="4">ReportAdmin</option>
													</select>
											</td></tr>
									         <tr><td><label>UserID: </label></td><td>
												    <input type="text" name="userid"/>								
													
											</td></tr>
											<tr><td><label>Password: </label></td><td>
												     <input type="password" name="userid"/>	
											</td></tr>
									       	
										
										
									   </table>
								  
								  </div>
								  
								  <div class="osmm">
								  
								     <button type="submit" form="nameform" >Login</button>
								  
								  </div>
									</form>
							  </div>
						 
						 </div>
					 
					 </div>
				
				</div>
			   
			   <!--in stock bar ends-->
			   
			</div>
			<!-- finish center wrap -->

		</div>
		<!-- finish content -->
		
		<!-- begin footer -->
		<div id="footer-wrap">

			test

		</div>
		<!-- finish footer -->
		
	</div>
	<!-- finish page wrap -->
	
</div>
<!-- finish section -->
<!--js for flexslider-->
<script src="/agriculture-food/js/jquery-1.11.3.js" type="text/javascript"></script>
<script src="/agriculture-food/js/jquery.flexslider.js" type="text/javascript"></script>
<script src="/agriculture-food/js/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="/agriculture-food/js/custom.js" type="text/javascript"></script>
<script type="text/javascript">
	
	$('.smoothscroll').smoothScroll();
	
</script>



</body>

</html>