<!DOCTYPE html>

<html lang="en">

  <head>

     <head>

    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.7.1.min.js"></script>

   <title>Order Master</title>

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

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

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

					<?php 

					

						 	

						$ID=0;

						$OrderDate="";

						$CustomerID=0;

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



					?>

                    <form id="order_form" enctype="multipart/form-data" class="form-horizontal form-label-left">

					

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Order Date 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" name="orderdate" required="required" placeholder="YYYY/MM/DD" class="form-control col-md-7 col-xs-12" value="<?php if(($ID!=0)||($ID!="")||($ID!=null)){echo $OrderDate;}?>">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Customer ID <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" required="required" name="customerID" class="form-control col-md-7 col-xs-12" value="<?php if(($ID!=0)||($ID!="")||($ID!=null)){echo $CustomerID;}?>">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Order Code <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" required="required" name="ordercode"  class="form-control col-md-7 col-xs-12" value="<?php if(($ID!=0)||($ID!="")||($ID!=null)){echo $OrderCode;}?>">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total Order Value <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" required="required" name="ordervalue" class="form-control col-md-7 col-xs-12" value="<?php if(($ID!=0)||($ID!="")||($ID!=null)){echo $TotalOrderValue;}?>">

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Tax Amount <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" required="required" name="taxAmount" class="form-control col-md-7 col-xs-12" value="<?php if(($ID!=0)||($ID!="")||($ID!=null)){echo $TaxAmount;}?>">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Delivery Charge <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" required="required" name="delivery" class="form-control col-md-7 col-xs-12" value="<?php if(($ID!=0)||($ID!="")||($ID!=null)){echo $DeliveryCharge;}?>">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tax Description <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <textarea class="form-control" rows="3" name="description" placeholder='Tax description'value="<?php if(($ID!=0)||($ID!="")||($ID!=null)){echo $TaxDescription;}?>"></textarea>

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Discount Amount <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" required="required" name="disAmount" class="form-control col-md-7 col-xs-12" value="<?php if(($ID!=0)||($ID!="")||($ID!=null)){echo $DiscountAmount;}?>">

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Grand Amount <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" required="required" name="grandAmount" class="form-control col-md-7 col-xs-12" value="<?php if(($ID!=0)||($ID!="")||($ID!=null)){echo $GrandTotal;}?>">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amount In Text <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" name="AmountText" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(($ID!=0)||($ID!="")||($ID!=null)){echo $AmountInText;}?>">

                        </div>

                      </div>

					

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

						   <option value="0">Order Pending</option>

						   <option value="1">Order Confirmed</option>

						   <option value="2">Order Delivered</option>

						   <option value="3">Order Cancelled</option>

						   <option value="4">Order Returned</option>

								

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

					<?php } ?>  

                    

                  </div>

                </div>

              </div>

            </div>

			

			<!-- product package -->

			   <div class="col-md-12 col-sm-12 col-xs-12" >

                <div class="x_panel" id="items" style="display:<?php if($ID==0) {?> none <?php } ?>">

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

                      <table class="table table-striped jambo_table bulk_action">

                        

							<tr>

								<th>ItemName</th>

								<th>PackageName</th>

								<th>PackageQuantity</th>

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

								<td><?php echo $row["ItemName"];?></td>

								<td><?php echo $row["PackageName"];?></td>

								<td><input type="text" id="qty<?php echo $row["ID"];?>" value="<?php echo $row["PackageQuantity"];?>"/></td>

								<td><?php echo $row["PackagePrice"];?></td>

								<td id="priceitem<?php echo $row["ID"];?>"><?php echo $row["TotalPrice"];?></td>

								<td><?php if(($row["ItemQuantity"])<($row["PackageQuantity"])) { 

								?>

								<input type="hidden" value="1" id="qty" />

								<label style="color:red">Quantity is less in your stock!! <?php echo $row["ItemQuantity"];?></label>

								

								<input type="button" id="myBtn" onclick="findWarehouse(<?php echo $row["ItemID"];?>,<?php echo $row["TotalQuantity"];?>)" value="Request Item"/><?php  } else {echo $row["ItemQuantity"]; }?></td>

								

								

								<!-- The Modal -->

								<div id="myModal" class="modal">
								</div>

							

								

								<td><input type="button" onclick="updateitem(<?php echo $row["ID"];?>)" value="Update"/></td>

								<td><a href="/agriculture-food/OrderMaster_Controller/DeleteItemOrder/<?php echo $row["ID"];?>">delete</a></td>

								

							</tr>

							<?php } ?>

                      </table>

                    </div>

					







						

						

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

                      <table class="table table-striped jambo_table bulk_action">

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

							<?php if($type!=3){ ?><th>Delete</th> <th>Initiate</th> <th>Quantity</th> <th>Update Status</th><?php } ?>

							<th>Bill</th>

							

                          </tr>

                        </thead>



                        <tbody id="showtable">

                         

                        </tbody>

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

  checkqty();

   

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

			var html = '';

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

					html +='</td>'+

					'<td><a class=" last" href="<?php echo base_url();?>Consignment/updateorderstatus/'+data[i].ID+'">Update Status</a></td>';

					

					<?php }  ?>

					<!---html +='<td><a class=" last" href="<?php echo base_url();?>BillMaster_Controller/index/'+data[i].ID+'">Bill</a></td>'+-->

          			html +='</tr>';

             }

			$('#showtable').html('');

			$('#showtable').html(html);

			},

		error:function(){

			alert('showsorry');

		}

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

	var url ="<?php echo base_url();?>OrderMaster_Controller/UpdateOrder/"+ID;

	//alert(url);

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

		   window.location.href="<?php echo base_url();?>OrderMaster_Controller/";

		   },

		   error: function(){

			   alert("Fail");

		   }

	   });

}





function checkqty(){

	var qty=document.getElementById('qty').value;

	//alert(qty);

	if(qty==1){

		document.getElementById("updtbtn").style.display="none";

		

	}

	else{

		document.getElementById("updtbtn").style.display="block";

	}

}



function findWarehouse(item,qty){

	//alert(item);

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

			html +=

						' <div class="modal-content">'+

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

								   

								   

									  '<a onclick="requestItem('+data[i].WarehouseID+','+data[i].ItemID+','+qty+','+assignedwarehouse+');" >Request</a>'+

								   

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

		

function requestItem(warehouseID,itemID,qty,assignedwarehouse){

var url="<?php echo base_url();?>OrderMaster_Controller/requestItem/"+qty+"/"+warehouseID+"/"+assignedwarehouse+"/"+itemID;

	//alert(url);

	$.ajax({

		url:url,

		type:'ajax',

		success:function(){

			alert('request sent');

			document.getElementById('myModal').style.display="none";

		},

		error:function(){

			alert('request fail');

		}

	});

	

}



</script>

	

  </body>

</html>

