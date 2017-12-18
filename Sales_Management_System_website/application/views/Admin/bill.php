<!DOCTYPE html>

<html lang="en">

  <head>

     <head>

    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.7.1.min.js"></script>

   <title>Bill Master</title>

  </head>  

 

    

  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        



        <!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Bill Master</h3>

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

                    <h2>Bill Master</h2>

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

                    <form id="bill_form" enctype="multipart/form-data" class="form-horizontal form-label-left">

					<?php foreach($Order as $row){ ?>

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bill Date 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

						

                          <input type="text" id="first-name" name="date" required="required" placeholder="YYYY/MM/DD" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Customer ID 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" value="<?php echo $row["CustomerID"];?>" name="customerID" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Order ID 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" required="required" id="orderid" name="orderid" value="<?php echo $row["ID"];?>"  class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Total Order Value 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="totalordervalue" value="<?php echo $row["TotalOrderValue"];?>" name="ordervalue" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Tax Amount 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="TaxAmount" value="<?php echo $row["TaxAmount"];?>" name="taxAmount" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Delivery Charge 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="delivery" value="<?php echo $row["DeliveryCharge"];?>" name="delivery" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tax Description

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <textarea class="form-control" rows="3" name="description" value="<?php echo $row["TaxDescription"];?>"><?php echo $row["TaxDescription"];?></textarea>

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Discount Amount

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" value="<?php echo $row["DiscountAmount"];?>" name="disAmount" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Grand Amount 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="grandTotal" value="<?php echo $row["GrandTotal"];?>" name="grandAmount" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amount In Text 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" name="AmountText" value="<?php echo $row["AmountInText"];?>" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Warehouse 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <input type="hidden" value="<?php echo $row["AssignedWarehouse"];?>" name="warehouse" id="Warehouseid" class="form-control">

						     <input type="text" value="<?php echo $row["Warehouse"];?>" id="Code" class="form-control">

                          </select>

                        </div>

                      </div>

					<?php } ?>

					<!--  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <select class="form-control" name="status">

								<option value="0">Cancelled</option>

								<option value="1">Confirm</option>

                          </select>

                        </div>

                      </div>-->

					  

					  

					  </form>

					  

                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         

                          <button type="submit" onclick="addBill();addBillItem();" class="btn btn-success">Submit</button>

						  

                        </div>

                      </div>



                    

                  </div>

                </div>

              </div>

            </div>

			

			<!-- product package -->

			   <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>Items</h2>

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

								<td></td>

								<th>ItemName</th>

								<th>PackageName</th>

								<th>PackageQuantity</th>

								<th>PackagePrice</th>

								<th>TotalPrice</th>

								

							</tr>

							<?php 

							foreach($item as $row){

						 ?>

							<tr>

								<td><input type="checkbox" class="chkItem" checked value="<?php echo $row["ItemID"]."/".$row["TotalPrice"];?>" disabled/></td>

								<td><?php echo $row["ItemName"];?></td>

								<td><?php echo $row["PackageName"];?></td>

								<td><?php echo $row["PackageQuantity"];?></td>

								<td><?php echo $row["PackagePrice"];?></td>

								<td ><input type="hidden" id="totPrice<?php echo $row["ID"];?>" value="<?php echo $row["TotalPrice"];?>"/><?php echo $row["TotalPrice"]; ?></td>

								

								

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

                            

							<th>BillDate</th>

							<th>OrderID</th>

							<th>CustomerID</th>

							

							<th>TotalOrderValue</th>

							<th>TaxDescription</th>

							<th>TaxAmount</th>

							<th>DiscountAmount</th>

							<th>GrandTotal</th>

							<th>AmountInText</th>

							<th>Warehouse</th>

							

							<?php if($type!=3){ ?><th>Delete</th><th>Create Bill</th><?php } ?>

							

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

$(document).ready(function() {

   ShowBill();

   updatebill();

});





function addBill(){  // passing down the event 

var url="<?php echo base_url();?>BillMaster_Controller/AddBill";

//alert(url);

		 var myForm = document.getElementById('bill_form');

		 formData = new FormData(myForm);

		 $.ajax({

		   url:url,

		   type: 'POST',

		   data: formData,

		   contentType: false,       // The content type used when sending data to the server.

		   cache: false,             // To unable request pages to be cached

		   processData:false,        // To send DOMDocument or non processed data file it is set to false

		   success: function(){

		   ShowBill();

		   document.getElementById('bill_form').reset();

		   },

		   error: function(){

			   alert("Fail")

		   }

	   });

}



function ShowBill(){

	var url="<?php echo base_url();?>BillMaster_Controller/ShowBill";

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

					'<td>'+data[i].BillDate+'</td>'+

					'<td>'+data[i].OrderCode+'</td>'+

					'<td>'+data[i].CustomerID+'</td>'+

          			

          			'<td>'+data[i].TotalOrderValue+'</td>'+

					'<td>'+data[i].TaxDescription+'</td>'+

					'<td>'+data[i].TaxAmount+'</td>'+

					'<td>'+data[i].DiscountAmount+'</td>'+

					'<td>'+data[i].GrandTotal+'</td>'+

					'<td>'+data[i].AmountInText+'</td>'+

					'<td>'+data[i].WarehouseName+'</td>';

					<?php if($type!=3) {?>

					html +='<td><a href="<?php echo base_url();?>BillMaster_Controller/DeleteBill/'+data[i].ID+'/'+data[i].OrderID+'">Delete</a></td>'+

					'<td><a href="<?php echo base_url();?>BillMaster_Controller/createbill/'+data[i].ID+'/'+data[i].OrderID+'/'+data[i].Warehouse+'">CreateBill</a></td>';<?php } ?>

          			html +='</tr>';

             }

			$('#showtable').html('');

			$('#showtable').html(html);

			},

		error:function(){

			alert('sorry');

		}

	});

	

}



function updatebill(){

	//alert("");

	var chk=document.getElementsByClassName("chkItem");

	var delivery=parseFloat(document.getElementById("delivery").value);

	var Total=0.00;

	var ItemNo=<?php echo $ItemNo?>;

	var deliveryItem=(delivery/ItemNo);

	var Charge=0;

	//alert(deliveryItem);

	for(var i=0;i<chk.length;i++)

	{

		if(chk[i].checked==true)

		{

			

			var v=chk[i].value.toString();

			//alert(v);

			var Price=parseFloat(v.substr(v.indexOf("/")+1,(v.length-v.indexOf("/"))));

			

			Total=Total+Price;

			Charge=Charge+deliveryItem;

			//alert('Total:'+Total);

			//alert('Charge:'+Charge);

			/*var ItemID=parseInt(v.substr(0,v.indexOf("/")));

			alert(ItemID);*/

			

			

		}

	}

	document.getElementById('totalordervalue').value=Total.toString();

	document.getElementById('grandTotal').value=(Total+(Total*15.5/100)+Charge).toString();

	document.getElementById('TaxAmount').value=(Total*15.5/100).toString();

	

}



function addBillItem(){

	var chk=document.getElementsByClassName("chkItem");

	var orderID=document.getElementById('orderid').value;

	var Warehouseid=document.getElementById('Warehouseid').value;

	//alert('orderID:'+orderID);

	for(var i=0;i<chk.length;i++)

	{

		if(chk[i].checked==true)

		{

			var v=chk[i].value.toString();

			//alert(v);

			/*var Price=parseFloat(v.substr(v.indexOf("/")+1,(v.length-v.indexOf("/"))));

			Total=Total+Price;*/

			var ItemID=parseInt(v.substr(0,v.indexOf("/")));

			//alert(ItemID);

			var url="<?php echo base_url();?>BillMaster_Controller/AddOrderBillItem/"+ItemID+"/"+orderID+"/"+Warehouseid;

			//alert(url);

			$.ajax({

				url:url,

				type:'ajax',

				

				async:false,

				success:function(){

					//alert('bill item added');

				},

				error:function(){

					alert('error in adding bill item');

				}

			});

			

			

		}

	}

	

}









</script>

	

  </body>

</html>

