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

	<title>In Stock</title>

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
							  
							      <h2>Bill Item</h2>
								  
								  <div class="stex">
								    <table>
									   <form id="bill_form" enctype="multipart/form-data">
									  <input type="hidden" value="<?php echo $Billid; ?>" id="billID" />
									  <input type="hidden" value="<?php echo $Orderid; ?>" id="orderID" />
									   <?php foreach($Bill as $row){ ?>
											 	<tr><td><label>Bill ID: </label></td><td><input type="text" name="billid" value="<?php echo $row["BillID"]; ?>"></td></tr>
											<tr><td><label>Item NAme: </label></td><td><input type="text" value="<?php echo $row["ItemName"];?>" name="itemname"></td></tr>
												
									         <tr><td><label>ItemID: </label></td><td>
												    <input type="text" name="itemID" id="Code" value="<?php echo $row["ItemID"];?>" />
											</td></tr>
											
											<tr><td><label>PackageQuantity: </label></td><td>
												    <input type="text" name="packagequantity" id="Code" value="<?php echo $row["PackageQuantity"];?>"/>
											</td></tr>
											
									       
											
											 
											<tr><td><label>PackagePrice: </label></td><td><input type="text" name="packageprice"  id="Code" value="<?php echo $row["PackagePrice"];?>" ></td></tr>
											
											<tr><td><label>TotalPrice : </label></td><td><input type="text" value="<?php echo $row["TotalPrice"];?>" name="totalprice" id="Code" ></td></tr>
											<tr><td><label>PackageID: </label></td><td><input type="text" value="<?php echo $row["PackageID"];?>" name="packageID" id="Code" ></td></tr>
											<tr><td><label>PackageName: </label></td><td><input type="text" value="<?php echo $row["PackageName"];?>" name="packagename" id="Code" ></td></tr>
											 <tr><td><label>TotalQuantity: </label></td><td>
												    <input type="text" value="<?php echo $row["TotalQuantity"];?>" name="totalquantity" id="Code" >
											</td></tr>
									   <?php } ?>
											</form>
										
									   </table>
								  
								  </div>
								  
								  <div class="osmm">
								  
								     <button type="submit" form="nameform" id="bill_submit">Submit</button>
								  
								  </div>
								 
							
								  </div>
								  
								<table style="color:white;border:solid;font-size:16px;">
								<thead>		
									<tr>
										<th>BillID</th>
										<th>ItemName</th>
										<th>ItemID</th>
										
										<th>PackageQuantity</th>
										<th>PackagePrice</th>
										<th>TotalPrice</th>
										<th>PackageID</th>
										<th>PackageName</th>
										<th>TotalQuantity</th>
										
									</tr>
								</thead>
								<tbody id="showtable">
								</tbody>
							</table>
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
$(document).ready(function() {
   ShowBill();
});


$(function(){
	  $("#bill_submit").click(function(e){  // passing down the event 
		 alert('test');
		 var BillID=document.getElementById('billID').value;
		 var OrderID=document.getElementById('orderID').value;
		 alert(OrderID);
		 var url="<?php echo base_url();?>BillMaster_Controller/AddBillItem/"+OrderID+"/"+BillID;
		 alert(url);
		 $.ajax({
		   url:url,
		   type: 'AJAX',
		   dataType:'JSON',
		   success: function(data){
			   alert(data);
		   ShowBill();
		   },
		   error: function(){
			   alert("Fail")
		   }
	   });
	   e.preventDefault(); // could also use: return false;
	 });
});

function ShowBill(){
	var OrderID=document.getElementById('orderID').value;
	var url='<?php echo base_url();?>BillMaster_Controller/ShowBillItem';
	$.ajax({
		url:url,
		type: 'ajax',
		dataType: 'json',
		success: function(data){
			var html = '';
			var i;
			for(i=0; i<data.length;i++){			
				html += '<tr>'+									

					'<td>'+data[i].BillID+'</td>'+
					'<td>'+data[i].ItemName+'</td>'+
					'<td>'+data[i].ItemID+'</td>'+
          			
          			'<td>'+data[i].PackageQuantity+'</td>'+
					'<td>'+data[i].PackagePrice+'</td>'+
					'<td>'+data[i].TotalPrice+'</td>'+
					'<td>'+data[i].PackageID+'</td>'+
					'<td>'+data[i].PackageName+'</td>'+
					'<td>'+data[i].TotalQuantity+'</td>'+
					
					'<td><a href="/agriculture-food/BillMaster_Controller/DeleteBillItem/'+data[i].ID+'/'+OrderID+'/'+data[i].BillID+'">Delete</a></td>'+
					//'<td><a href="/agriculture-food/BillMaster_Controller/createbill/'+data[i].ID+'">CreateBill</a></td>'+
          			'</tr>';
             }
			$('#showtable').html('');
			$('#showtable').html(html);
			},
		error:function(){
			alert('sorry');
		}
	});
	
}




</script>

</body>

</html>