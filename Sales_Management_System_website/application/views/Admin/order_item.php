<!DOCTYPE html>

<html lang="en">

  <head>

     <head>

	   <title>Order Master</title>
	   
	   <!--data tables-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Admin/css/datatables.min.css"/>
		
		<script type="text/javascript" src="<?php echo base_url();?>Admin/js/jquery-1.12.4.js"></script>
	 
		<script type="text/javascript" src="<?php echo base_url();?>Admin/js/datatables.min.js"></script>
		<!--data tables-->

  </head>  

 

    

  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        



        <!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Order Master</h3>

              </div>



              <div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                  

                </div>

              </div>

            </div>

            <div class="clearfix"></div>

			<?php if($type!=3){ ?>
			
				<!-- product package -->
				<?php 	

						$ID=0;

						$OrderDate="";

						$CustomerID=0;
						
						$CustomerAddID=0;

						$OrderCode="";

						$Items=0;

						$TotalOrderValue=0;

						$TaxDescription="";

						$TaxAmount=0;

						$DiscountAmount=0;

						$GrandTotal=0;

						$AmountInText="";

						$AssignedWarehouse=0;

						$Status=0;

						$PaymentStatus=0;

						$IPAddress="";

						$DeliveryCharge=0.00;

					foreach($Orders as $roworder){ 

						$ID=$roworder["ID"];

						$OrderDate=$roworder["OrderDate"];

						$CustomerID=$roworder["CustomerID"];
						
						$CustomerAddID=$roworder["CusAddID"];

						$OrderCode=$roworder["OrderCode"];

						$Items=$roworder["Items"];

						$TotalOrderValue=$roworder["TotalOrderValue"];

						$TaxDescription=$roworder["TaxDescription"];

						$TaxAmount=$roworder["TaxAmount"];

						$DiscountAmount=$roworder["DiscountAmount"];

						$GrandTotal=$roworder["GrandTotal"];

						$AmountInText=$roworder["AmountInText"];

						$AssignedWarehouse=$roworder["AssignedWarehouse"];

						$Status=$roworder["Status"];

						$PaymentStatus=$roworder["PaymentStatus"];

						$DeliveryCharge=$roworder["DeliveryCharge"];

					}

					?>

			   

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel" style="display:<?php if($ID!=0) { echo "block"; } else { echo "none"; } ?>">

                  <div class="x_title">

                    <h2>Order Master</h2>

                    <ul class="nav navbar-right panel_toolbox">

                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                      </li>

                      <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                        <ul class="dropdown-menu" role="menu">

                          <li><a href="#">Settings 1</a>

                          </li>

                          <li><a href="#">Settings 2</a>

                          </li>

                        </ul>

                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>

                      </li>

                    </ul>

                    <div class="clearfix"></div>

                  </div>

                  <div class="x_content">

                    <br />

					
					
					<p>Initiate order for orderCode:<b><?php echo $OrderCode;?></b></p>

                    <form id="order_form" enctype="multipart/form-data" class="form-horizontal form-label-left">

						
						<input type="hidden" name="customerID" value="<?php echo $CustomerID;?>" />
						<input type="hidden" name="cusAddId" value="<?php echo $CustomerAddID;?>" />
						<input type="hidden" id="ordervalue" name="ordervalue" value="<?php echo $TotalOrderValue;?>" />
						<input type="hidden" name="description" value="<?php echo $TaxDescription;?>" />
						<input type="hidden" name="taxAmount" value="<?php echo $TaxAmount;?>" />
						<input type="hidden" id="delivery" name="delivery" value="<?php echo $DeliveryCharge;?>" />
						<input type="hidden" name="disAmount" value="<?php echo $DiscountAmount;?>" />
						
						
						

					 
					

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Warehouse <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

							<?php if($type==1) { ?>

                           <select class="form-control" name="warehouse" id="warehouse">

                            <?php foreach($warehouse as $row){ ?>

								<option <?php if($AssignedWarehouse==$row["ID"]) { ?> selected <?php } ?>value="<?php echo $row["ID"]; ?>"><?php echo $row["Name"]; ?></option>

							<?php } ?>

                          </select>

							<?php } else if($type==2){  foreach($warehouse as $row){?>

								<input type="text" class="form-control" value="<?php echo $row["Name"]; ?>" readonly>

								<input type="hidden" name="warehouse" id="warehouse" value="<?php echo $row["ID"]; ?>" >

							<?php } } ?>

                        </div>

                      </div>

					
						
					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <select class="form-control" name="status">

						   <option <?php if($Status==0) echo "selected"; ?> value="0">Order Pending</option>

						   <option <?php if($Status==1) echo "selected"; ?> value="1">Order Confirmed</option>

						   <option <?php if($Status==2) echo "selected"; ?> value="2">Order Delivered</option>

						   <option <?php if($Status==3) echo "selected"; ?> value="3">Order Cancelled</option>

						   <option <?php if($Status==4) echo "selected"; ?> value="4">Order Returned</option>

								

                          </select>

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Payment Status <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <select class="form-control" name="paymentstatus">

                           

                           <option value="0">COD</option>

						   <option value="1">Online Payment</option>

							

                          </select>

                        </div>

                      </div>

					  </form>

					

                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         <?php if(($ID!=0)||($ID!="")||($ID!=null)){?>

						  <button type="submit" id="updtbtn" onclick="UpdateOrder(<?php echo $ID;?>);" class="btn btn-success">Update</button>

						 <?php } else{ ?>

                          <button type="submit" onclick="AddOrder();" class="btn btn-success">Submit</button>

						 <?php } ?>

                        </div>

                      </div>

					 

                    

                  </div>

                </div>

              </div>

            </div>
			
			<div class="col-md-12 col-sm-12 col-xs-12" >

                <div class="x_panel" id="items" style="display:<?php if(($ID!=0)&&($Status==0)){ echo "block";}else{echo "none";} ?>">

                  <div class="x_title">

                    <h2>Order Items of OrderCode:<?php echo $OrderCode;?> </h2>
					<h2 id="TotalAmount"></h2>
					<input type="hidden" value="" id="grandTotal" />
                    <ul class="nav navbar-right panel_toolbox">

                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                      </li>

                      <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                        <ul class="dropdown-menu" role="menu">

                          <li><a href="#">Settings 1</a>

                          </li>

                          <li><a href="#">Settings 2</a>

                          </li>

                        </ul>

                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>

                      </li>

                    </ul>

                    <div class="clearfix"></div>

                  </div>

				  

                  <div class="x_content">





                    <div class="table-responsive">

                      <table class="table table-striped jambo_table bulk_action">

                        

							<tr>

								<th>ItemName</th>

								<th>PackageName</th>

								<th>PackageQuantity</th>
								
								<th>ItemQuantity</th>

								<th>PackagePrice</th>

								<th>TotalPrice</th>

								<th>Available Quantity in Current stock</th>

								<th>Update</th>

								<th>Delete</th>

							</tr>

							 <?php 

							foreach($item as $row){

						 ?>

							<tr>
							   <td>
							   
							   <?php if(($row["ItemQuantity"])<($row["PackageQuantity"])) {?>
								<input type="checkbox" class="chkItem"  value="<?php echo $row["ItemID"]."/".$row["TotalPrice"];?>" disabled>
							   <?php } else { ?>
							   
							   
							   <input type="checkbox" class="chkItem"  checked  value="<?php echo $row["ItemID"]."/".$row["TotalPrice"];?>" /> <?php } ?></td>

								<td><?php echo $row["ItemName"];?></td>

								<td><?php echo $row["PackageName"];?></td>

								<td><input type="text" id="qty<?php echo $row["ID"];?>" value="<?php echo $row["PackageQuantity"];?>"/></td>

								<td><?php echo $row["PackagePrice"];?></td>

								<td id="priceitem<?php echo $row["ID"];?>"><?php echo $row["TotalPrice"];?></td>

								<td><?php if(($row["ItemQuantity"])<($row["PackageQuantity"])) { 

								?>

								

								<label style="color:red">Quantity is less in your stock!! <?php echo $row["ItemQuantity"];?></label>

								

								<input type="button" id="myBtn" onclick="findWarehouse(<?php echo $row["ItemID"];?>,<?php echo $row["TotalQuantity"];?>)" value="Send Item"/><?php  } else {echo $row["ItemQuantity"]; }?></td>

								

								

								<!-- The Modal -->

								<div id="myModal" class="modal">
								</div>

							

								

								<td><input type="button" onclick="updateitem(<?php echo $row["ID"];?>)" value="Update"/></td>

								<td><a href="/agriculture-food/OrderMaster_Controller/DeleteItemOrder/<?php echo $row["ID"];?>">delete</a></td>

								

							</tr>

							<?php } ?>

                      </table>
					  
					  <button onclick="billitems();">Add to bill items</button>

                    </div>

                  </div>
				  
				  <div class="x_content">
					<h3>Delivery Address</h3>
					
					<?php
					
					foreach ($VAddress as $address){?>
						<p>To <?php echo $address["Name"];?></br>
							Address:<?php echo $address["Address1"];?></br>
							Address Line 2:<?php echo $address["Address2"];?>&nbsp;&nbsp;City:<?php echo $address["City"];?></br>
							Landmark:<?php echo $address["Landmark"];?> &nbsp;&nbsp;State:<?php echo $address["State"];?></br>
							PinCode:<?php echo $address["PinCode"];?></br>
						</p>
						
					<?php }?>
					
					<!---------------------------------------------------------------->
					<!--<?php
					
					foreach ($DeliveryAddress as $address){?>
						<p>To <?php echo $address["Name"];?></br>
							Address:<?php echo $address["Address"];?></br>
							Locality:<?php echo $address["Locality"];?>&nbsp;&nbsp;City:<?php echo $address["Village"];?></br>
							Landmark:<?php echo $address["Landmark"];?> &nbsp;&nbsp;State:<?php echo $address["State"];?></br>
							PinCode:<?php echo $address["PinCode"];?></br>
						</p>
						
					<?php }?>
					-->
				  
				  </div>

                </div>

              </div>

			

		

			

			<?php } ?>

			<!--table starts-->

			

			   <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>Table start</h2>

                    <ul class="nav navbar-right panel_toolbox">

                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                      </li>

                      <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                        <ul class="dropdown-menu" role="menu">

                          <li><a href="#">Settings 1</a>

                          </li>

                          <li><a href="#">Settings 2</a>

                          </li>

                        </ul>

                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>

                      </li>

                    </ul>

                    <div class="clearfix"></div>

                  </div>



                  <div class="x_content">





                    <div class="table-responsive">

                      <table class="table table-striped jambo_table bulk_action" id="usertable">

                        <thead>

                          <tr class="headings">

                            

							<th>OrderDate</th>

							<th>CustomerID</th>

							<th>OrderCode</th>

							<th>TotalOrderValue</th>

							<th>TaxDescription</th>

							<th>TaxAmount</th>

							<th>DiscountAmount</th>

							<th>GrandTotal</th>

							<th>AmountInText</th>

							<th>AssignedWarehouse</th>

							<th>Status</th>

							<?php if($type!=3){ ?><th>Delete</th> <th>Initiate</th> <th>Quantity</th> <?php } ?>

							

							

                          </tr>

                        </thead>




                      </table>

                    </div>

							

						

                  </div>

                </div>

              </div>

			

           <!--table ends-->



          </div>

        </div>

        <!-- /page content -->



         <!-- footer content -->

        <footer>

          <div class="pull-right">

             Design & Develop By <a href="http://24techsoft.com" target="_blank">24TECHSOFT</a>

          </div>

          <div class="clearfix"></div>

        </footer>

        <!-- /footer content -->

      </div>

    </div>



    <!-- jQuery -->

    <script src="<?php echo base_url();?>Admin/js/jquery.min.js"></script>

    <!-- Bootstrap -->

    <script src="<?php echo base_url();?>Admin/js/bootstrap.min.js"></script>

    <!-- FastClick -->

    <script src="<?php echo base_url();?>Admin/js/fastclick.js"></script>

    <!-- NProgress -->

    <script src="<?php echo base_url();?>Admin/js/nprogress.js"></script>

    <!-- bootstrap-progressbar -->

    <script src="<?php echo base_url();?>Admin/js/bootstrap-progressbar.min.js"></script>

    <!-- iCheck -->

    <script src="<?php echo base_url();?>Admin/js/icheck.min.js"></script>

    <!-- bootstrap-daterangepicker -->

    <script src="<?php echo base_url();?>Admin/js/moment.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/daterangepicker.js"></script>

    <!-- bootstrap-wysiwyg -->

    <script src="<?php echo base_url();?>Admin/js/bootstrap-wysiwyg.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/jquery.hotkeys.js"></script>

    <script src="<?php echo base_url();?>Admin/js/prettify.js"></script>

    <!-- jQuery Tags Input -->

    <script src="<?php echo base_url();?>Admin/js/jquery.tagsinput.js"></script>

    <!-- Switchery -->

    <script src="<?php echo base_url();?>Admin/js/switchery.min.js"></script>

    <!-- Select2 -->

    <script src="<?php echo base_url();?>Admin/js/select2.full.min.js"></script>

    <!-- Parsley -->

    <script src="<?php echo base_url();?>Admin/js/parsley.min.js"></script>

    <!-- Autosize -->

    <script src="<?php echo base_url();?>Admin/js/autosize.min.js"></script>

    <!-- jQuery autocomplete -->

    <script src="<?php echo base_url();?>Admin/js/jquery.autocomplete.min.js"></script>

    <!-- starrr -->

    <script src="<?php echo base_url();?>Admin/js/starrr.js"></script>

    <!-- Custom Theme Scripts -->

    <script src="<?php echo base_url();?>Admin/js/custom.min.js"></script>

	

	<!-- Datatables -->

    <script src="<?php echo base_url();?>Admin/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/dataTables.bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/dataTables.buttons.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/buttons.bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/buttons.flash.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/buttons.html5.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/buttons.print.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/dataTables.fixedHeader.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/dataTables.keyTable.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/dataTables.responsive.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/responsive.bootstrap.js"></script>

    <script src="<?php echo base_url();?>Admin/js/dataTables.scroller.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/jszip.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/pdfmake.min.js"></script>

    <script src="<?php echo base_url();?>Admin/js/vfs_fonts.js"></script>

	

	<script>

	/*

	// Get the modal

	var modal = document.getElementById('myModal');



	// Get the button that opens the modal

	var btn = document.getElementById("myBtn");



	// Get the <span> element that closes the modal

	var span = document.getElementsByClassName("close")[0];



	// When the user clicks the button, open the modal 

	/*btn.onclick = function() {

		modal.style.display = "block";

	}*/



	/*// When the user clicks on <span> (x), close the modal

	span.onclick = function() {

		modal.style.display = "none";

	}



	// When the user clicks anywhere outside of the modal, close it

	window.onclick = function(event) {

		if (event.target == modal) {

			modal.style.display = "none";

		}

	}*/

	

$(document).ready(function() {

	//alert('test');

	checkordercount();

   ShowOrder();

  //checkqty();
  
  updateamount();

   

});





setInterval(function(){

    checkqty() // this will run after every 5 seconds

}, 9000);





 function checkordercount(){

	var url="<?php echo base_url();?>OrderMaster_Controller/checkordercount";

	//alert(url);

	$.ajax({

		url:url,

		type:'ajax',

		dataType:'json',

		

		success:function(data){

			//alert(data);

		},

		error:function(){

			//alert('error');

		}

		

	});

}





function AddOrder(){

	var url ="<?php echo base_url();?>OrderMaster_Controller/AddOrder";

		 var myForm = document.getElementById('order_form');

		 formData = new FormData(myForm);

		 $.ajax({

		   url:url,

		   type: 'POST',

		   data: formData,

		   contentType: false,       // The content type used when sending data to the server.

		   cache: false,             // To unable request pages to be cached

		   processData:false,        // To send DOMDocument or non processed data file it is setto 

		   success: function(){

		   ShowOrder();

		   },

		   error: function(){

			   alert("Fail");

		   }

	   });

}



function ShowOrder(){

	var url ="<?php echo base_url();?>OrderMaster_Controller/ShowOrder";

	//alert(url);

	$.ajax({

		url:url,

		type: 'ajax',

		dataType: 'json',

		success: function(data){
			console.log(data);
			 $('#usertable').DataTable( {
					data: data,
					"columns": [
					{ "data": "OrderDate" },
					{ "data": "CustomerID" },
					{ "data": "OrderCode" },
					{ "data": "TotalOrderValue" },
					{ "data": "TaxDescription" },
					{ "data": "TaxAmount" },
					{ "data": "DiscountAmount" },
					{ "data": "GrandTotal" },
					{ "data": "AmountInText" },
					{ "data": "Warehouse" },
					{ "data": "Status" },
					
					<?php if($type!=3){?>
					{ "data": "ID","render": function ( data, type, full, meta ) {
						  return '<a href="<?php echo base_url();?>OrderMaster_Controller/DeleteOrder/'+data+'">Delete</a>';
						} },
						
					{ "data": "ID","render": function ( data, type, full, meta ) {
						  return '<a href="<?php echo base_url();?>OrderMaster_Controller/index/'+full.ID+'/'+full.AssignedWarehouse+'">Update</a>';
						} },
					{ "data": "AvailableQty","render": function ( data, type, full, meta ) {
						if(data==0){
						  return '<label style="color:red">Less Quantity</label>';
						}
						else{
							return '<label">Quantity Available</label>';
						}
						} },
					<?php } ?>
					 
					
				],
				 
				destroy:true
			} );
		}

		/*	var html = '';

			var i;

			for(i=0; i<data.length;i++){			

				html += '<tr>'+

					'<td>'+data[i].OrderDate+'</td>'+

					'<td>'+data[i].CustomerID+'</td>'+

          			'<td>'+data[i].OrderCode+'</td>'+

          			'<td>'+data[i].TotalOrderValue+'</td>'+

					'<td>'+data[i].TaxDescription+'</td>'+

					'<td>'+data[i].TaxAmount+'</td>'+

					'<td>'+data[i].DiscountAmount+'</td>'+

					'<td>'+data[i].GrandTotal+'</td>'+

					'<td>'+data[i].AmountInText+'</td>'+

					

					'<td>'+data[i].Warehouse+'</td>'+

					'<td>';

					if(data[i].Status==0){

						html+='Order Pending';

					}

					else if(data[i].Status==1){

						html +='Order Confirmed';

					}

					else if(data[i].Status==2){

						html +='Order Delivered';

					}

					else if(data[i].Status==3){

						html +='Order Returned';

					}

					else if(data[i].Status==4){

						html +='Order Cancelled';

					}

					html+='</td>';

					<?php if($type!=3) { ?>

					//'<td>'+data[i].PaymentStatus+'</td>'+

					html +='<td class=" last"><a href="<?php echo base_url();?>OrderMaster_Controller/DeleteOrder/'+data[i].ID+'">Delete</a></td>'+

					'<td class="last"><a href="<?php echo base_url();?>OrderMaster_Controller/index/'+data[i].ID+'/'+data[i].AssignedWarehouse+'">Edit</a></td>'+

					'<td>';

					if(data[i].AvailableQty==0){

						html +='<label style="color:red">Less Quantity</label>';

					}else{

						html +='Quantity Available';

					}

					/*<html +='</td>'+

					'<td><a class=" last" href="<?php echo base_url();?>Consignment/updateorderstatus/'+data[i].ID+'">Update Status</a></td>';*/

					

					<?php }  ?>

					<!---html +='<td><a class=" last" href="<?php echo base_url();?>BillMaster_Controller/index/'+data[i].ID+'">Bill</a></td>'+-->

          		/*	html +='</tr>';

             }

			$('#showtable').html('');

			$('#showtable').html(html);

			},

		error:function(){

			alert('showsorry');

		}
*/
	});

	

}



function updateitem(id){

//alert(id);

	var quantity=document.getElementById('qty'+id).value;

	//alert(quantity);

	

	var url='<?php echo base_url();?>OrderMaster_Controller/UpdateOrderItem/'+id+'/'+quantity;

	//alert(url);

	$.ajax({

		url:url,

		type:'ajax',

		dataType:'json',

		

		success:function(data){

			var html="";

			for(var i=0;i<data.length;i++){

				html +='<label style="color:black">'+data[i].TotalPrice+'</label>';

				

			}

			//alert(html);

			$('#priceitem'+id).html('');

			$('#priceitem'+id).html(html);

			$('#items').load(document.URL + ' #items');

			ShowOrder();

		},

		error:function(){

			alert('updte item fail');

		}

	});

	

}



function UpdateOrder(ID){
	
	var Grand=document.getElementById('grandTotal').value;
	alert("Total:"+Grand);
	
	var ordervalue=document.getElementById('ordervalue').value;
	alert("ordervalue:"+ordervalue);

	var url ="<?php echo base_url();?>OrderMaster_Controller/UpdateOrder/"+ID+"/"+Grand;

	

		 var myForm = document.getElementById('order_form');

		 formData = new FormData(myForm);

		 $.ajax({

		   url:url,

		   type: 'POST',

		   data: formData,

		   contentType: false,       // The content type used when sending data to the server.

		   cache: false,             // To unable request pages to be cached

		   processData:false,        // To send DOMDocument or non processed data file it is set to false

		   success: function(){

			   alert("Order Updated");

		  // window.location.href="<?php echo base_url();?>OrderMaster_Controller/";

		   },

		   error: function(){

			   alert("Fail");

		   }

	   });

}




/*
function updtbtn(){

	var qty=document.getElementById('qty').value;

	alert(qty);

	if(qty==1){

		document.getElementById("updtbtn").style.display="none";

		

	}

	else{

		document.getElementById("updtbtn").style.display="block";

	}

}
*/


function findWarehouse(item,qty){

	alert(qty);
	var url="<?php echo base_url();?>OrderMaster_Controller/findWarehouse/"+item+"/"+qty;
	var assignedwarehouse=document.getElementById('warehouse').value;
	//alert(assignedwarehouse);
	var html="";
	//alert(url);
	$.ajax({
		url:url,
		type:'ajax',
		dataType:'json',
		success:function(data){
			//alert(data.length);
			//document.getElementmodal.style.display = "block";
			html +='<div class="modal-content">'+
					'<span class="close" onclick="closemodal();">&times;</span>'+
						'<div class="extra">'+
							'<h3> Warehouse Request</h3>';
								for(var i=0;i<data.length;i++)
									{
										html+='<div class="bttm">'+
										'<div class="left">'+
											'<h4> '+data[i].Name+'</h4>'+
										'</div>'+
										'<div class="right">'+
										'<div class="qtty">' +
											'<h4>'+data[i].ItemName+'(Quantity:'+qty+')</h4>'+
										'</div>'+
										'<div class="rqtt">'+ 
										/*send unavailable item*/
											'<a onclick="requestItem('+data[i].WarehouseID+','+assignedwarehouse+',<?php echo $ID;?>);" >Send</a>'+
					   				   '</div>'+
										'</div>'+
										'</div>';
									}	
						html +=' </div>'+
							'</div>';
			$('#myModal').html("");
			$('#myModal').html(html);
			document.getElementById('myModal').style.display="block";
		},
		error:function(){
			alert("fail");
		}
	});
}



function closemodal(){

			

			document.getElementById('myModal').style.display="none";

			}

		
/*send unavailable item to different warehouse*/
function requestItem(warehouseID,assignedwarehouse,orderID){

var url="<?php echo base_url();?>OrderMaster_Controller/sendItem/"+warehouseID+"/"+assignedwarehouse+"/"+orderID;

	alert(url);

	$.ajax({

		url:url,

		type:'ajax',

		success:function(){

			alert('request sent to the admin');

			document.getElementById('myModal').style.display="none";

		},

		error:function(){

			alert('request fail');

		}

	});

	

}

function delItem(id){
	
	var ItemID=parseInt(v.substr(0,v.indexOf("/")));
			
			alert(ItemID);
	
}

function billitems(){
	
	var items=document.getElementsByClassName('chkItem');
	alert("billitems");
	for(var i=0;i<items.length;i++){
		if(items[i].checked==true){
			
			var v=items[i].value.toString();

			//alert(v);

			var ItemID=parseInt(v.substr(0,v.indexOf("/")));
			
			alert(ItemID);
			
			var url="<?php echo base_url();?>BillMaster_Controller/AddOrderBillItem/"+ItemID+"/<?php echo $ID;?>/<?php echo $AssignedWarehouse;?>";
			
			$.ajax({

				url:url,

				type:'ajax',
				
				async:false,

				success:function(){

					alert('bill item added');
					
					window.location.href="<?php echo base_url();?>OrderMaster_Controller"

				},

				error:function(){

					alert('error in adding bill item');

				}

			});
		}
	}
}

function updateamount(){
	var items=document.getElementsByClassName('chkItem');
	
	var delivery=parseFloat(document.getElementById("delivery").value);
	
	var Total=0.00;
	
	var ItemNo=<?php echo $ItemNo?>;

	var deliveryItem=(delivery/ItemNo);

	var Charge=0;
	
	alert(ItemNo);
	
	for(var i=0;i<items.length;i++){
		if(items[i].checked==true){
			
			var v=items[i].value.toString();

			var Price=parseFloat(v.substr(v.indexOf("/")+1,(v.length-v.indexOf("/"))));
			
			//alert(Price);
			Total=Total+Price;

			Charge=Charge+deliveryItem;
			
			alert(Total);
			
			alert('Charge'+Charge);
			
		}
	}
	
	document.getElementById('ordervalue').value=Total.toString();

	document.getElementById('grandTotal').value=(Total+Charge).toString();
	
	document.getElementById('TotalAmount').innerHTML="TotalAmount:"+(Total+Charge).toString();
	
}



</script>

	

  </body>

</html>

