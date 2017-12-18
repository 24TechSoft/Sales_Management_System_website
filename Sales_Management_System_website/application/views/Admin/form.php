<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	
	<title>OrderMaster</title>
<!-- Hajan Date Picker -->
    <link type="text/css" href="/agriculture-food/hajandatepicker/css/jquery-ui.css" rel="Stylesheet" />
    <script type="text/javascript" src="/agriculture-food/hajandatepicker/js/jquery-1.4.4.js"></script>
    <script type="text/javascript" src="/agriculture-food/hajandatepicker/js/jquery-ui.min.js"></script>
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
		
		
		<!-- begin content -->
		<div id="content-wrap">

			
			<!-- begin centerwrap -->
			<div id="center-wrap">
			
			  
			   <!--in stock bar starts-->
			   
			    <div class="in-bar">
				
				     <div class="stok">
					 
					     <div class="centering" id="centering">
						 
						      <div class="okk">
							  
							      <h2>Order Item</h2>
								  
								  <div class="stex">
							  
							       <div style="width:448px; margin:auto;"></div>

										<form method="POST" action="<?php echo base_url();?>PDF_Controller/generatePdf/" id="frmCtnt" name="frmCtnt">

										 

										<div class="txt_stl">

										<input type="text" value="Enter Your Full Name" name="name" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">

										</div>

										 

										<div class="txt_stl">

										<input type="text" value="Enter Your Email Id" name="email" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">

										</div>

										 

										<div class="txt_stl">

										<input type="text" value="Enter Your Contact Number" name="mobile" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">

										</div>

										 

										<div class="txt_stl">

										<textarea onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" rows="" cols="" name="comment">Please Write your Query or Comment here.</textarea>

										</div>

										 

										<input class="or_btn_icon" type="submit" value="Submit">

										 

										</form>

											  </div>
								  
								  </div>
								  
								  
								 
							  </div>
							</div>
							  
						 <button onclick="functionpdf();" >generate PDF</button>
						 
					 
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
<script src="/agriculture-food/js/jspdf.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
<script type="text/javascript">
	
	$('.smoothscroll').smoothScroll();
	
</script>



</body>

</html>