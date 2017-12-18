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

	<title>In Stock - without Warehouse</title>

	<link rel="stylesheet" href="styles/layout.css" type="text/css" />
	<link rel="stylesheet" href="fonts/fonts.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<!-- Hajan Date Picker -->
    <link type="text/css" href="hajandatepicker/css/jquery-ui.css" rel="Stylesheet" />
    <script type="text/javascript" src="hajandatepicker/js/jquery-1.4.4.js"></script>
    <script type="text/javascript" src="hajandatepicker/js/jquery-ui.min.js"></script>
    <script type="text/javascript">
    $(function () {
        var date = new Date();
        var currentMonth = date.getMonth();
        var currentDate = date.getDate();
        var currentYear = date.getFullYear();
        $('.hajanDatePicker').datepicker({ minDate: new Date(currentYear, currentMonth, currentDate), dateFormat: 'dd/mm/yy' });
    });
    </script>
    <!-- Hajan Date Picker -->


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
								  
								     <a href="#"></a><img src="images/logo.png" alt=""/></a>
								  
								  </div>
								  
								  <div class="right">
								  
								        <div class="nav">
										
										     <ul>
											 
											     <li><a href="#">Home</a></li>
												 <li><a href="#">Shop</a></li>
												 <li><a href="#">Features</a></li>
												 <li><a href="#">Gallary</a></li>
												 <li><a href="#">News & Blog</a></li>
												 <li><a href="#">Blogs</a></li>
											 </ul>
										
										</div>
										
										<div class="sett">
										
										     <a href="#"><img src="images/set.png" alt=""/></a>
										
										</div>
								  
								  </div>
							
							</div>
					  
					  </div>
				 
				 </div>
				 	 
			</div>
			
			<!--finish header bar-->

		</div>
		<!-- finish header -->
		
		<!-- begin content -->
		<div id="content-wrap">

			
			<!-- begin centerwrap -->
			<div id="center-wrap">
			
			  
			   <!--in stock bar starts-->
			   
			    <div class="in-bar">
				
				     <div class="stok">
					 
					     <div class="centering">
						 
						      <div class="okk">
							  
							      <h2>In Stock </h2>
								  
								  <div class="stex">
								  
								       <table>
									   
									         
											<tr><td><label>Item: </label></td><td>
												    <select>
													
													    <option value="1">Item 1</option>
														<option value="2">Item 2</option>
														<option value="3">Item 3</option>
													
													</select>
											</td></tr>
									       	<tr><td><label>Entry Date: </label></td><td><input type="date" value="dd/mm/yyyy" onfocus="this.value=''" name="userDate" onblur="checkDate(this.form)"/ class="hajanDatePicker"></td></tr>
											
											 
											<tr><td><label>Quantity: </label></td><td><input type="text" placeholder=" quantity" name="Code" id="Code" ></td></tr>
											
										
									   </table>
								  
								  </div>
								  
								  <div class="osmm">
								  
								     <button type="submit" form="nameform" value="Submit">Submit</button>
								  
								  </div>
							  
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
<script src="js/jquery-1.11.3.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
<script src="js/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script type="text/javascript">
	
	$('.smoothscroll').smoothScroll();
	
</script>

</body>

</html>