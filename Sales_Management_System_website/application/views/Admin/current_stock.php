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



	<title>Current Stock</title>



	<link rel="stylesheet" href="/agriculture-food/styles/layout.css" type="text/css" />

	<link rel="stylesheet" href="/agriculture-food/fonts/fonts.css" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <script type="text/javascript" src="/agriculture-food/js/jquery-1.7.1.min.js"></script>

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

											 

											     <li><a href="#">Home</a></li>

												 <li><a href="#">Shop</a></li>

												 <li><a href="#">Features</a></li>

												 <li><a href="#">Gallary</a></li>

												 <li><a href="#">News & Blog</a></li>

												 <li><a href="#">Blogs</a></li>

											 </ul>

										

										</div>

										

										<div class="sett">

										

										     <a href="#"><img src="/agriculture-food/images/set.png" alt=""/></a>

										

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

							  

							      <h2>Current Stock</h2>

								  

								  <div class="stex">

								  

								       <table>

									   <form id="current_form" enctype="multipart/form-data">

									         <tr><td><label>Warehouse: </label></td><td>

												    <select name="warehouse" id="warehouse">

													<?php foreach($warehouse as $row){ ?>

													    <option value="<?php echo $row["ID"]; ?>"><?php echo $row["Name"]; ?></option>

													<?php } ?>	

													<option value="all">All</option>													

													</select>

											</td></tr>

											<tr><td><label>Item: </label></td><td>

												    <select name="item" id="item">

													<?php foreach($item as $rowi){ ?>

													    <option value="<?php echo $rowi["ID"]; ?>"><?php echo $rowi["Name"]; ?></option>

													<?php } ?>

													

													</select>

											</td></tr>

									       <tr id="quantity"></tr>

											</form>

										

									   </table>

								  

								  </div>

								  

								  <div class="osmm">

								  

								     <button type="submit" form="nameform" onclick="show();" id="currentstock_submit">Submit</button>

								  

								  </div>

							<!--	<table style="color:white;border:solid;font-size:16px;">

								<thead>		

									<tr>

										<th>Warehouse</th>

										<th>Item</th>

										<th>EntryDate</th>

										<th>Quatity</th>

										<th>Delete</th>

									</tr>

								</thead>

								<tbody id="showtable">

								</tbody>

							</table>-->

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



<script>







$(function(){

	  $("#currentstock_submit").click(function(e){  // passing down the event 

		// alert('test');

		var ware=document.getElementById('warehouse').value;

		var item=document.getElementById('item').value;

		var url='http://localhost/agriculture-food/CurrentStock/FindQuantity/'+ware+'/'+item;

		//alert(url);

		//alert(item);

		var html="";

		 $.ajax({

		   url:url,

		   type: 'ajax',

			dataType:'json',

		   success: function(data){

			$('#warehouse').val('');

			$('#item').val('');

		 

		for(i=0; i<data.length;i++){

			//alert(data.length);

		  html +='<td><label>Current Stock: </label></td><td style="color:white">'+data[i].Quatity+'</td></br>';

		  }

		  $('#quantity').html("");

		  $('#quantity').html(html);

		  

		   },

		  

		   error: function(){

			   alert("Fail");

		   }

	   });

	   e.preventDefault(); // could also use: return false;

	 });

});







</script>



</body>



</html>