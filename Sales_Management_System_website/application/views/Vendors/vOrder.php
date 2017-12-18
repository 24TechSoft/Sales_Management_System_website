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


			   

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel" >

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

					
					
					<p>Initiate order for orderCode:<b></b></p>

                    <form id="order_form" enctype="multipart/form-data" class="form-horizontal form-label-left">

						
						<input type="hidden" name="customerID" value="" />
						<input type="hidden" name="cusAddId" value="" />
						<input type="hidden" id="ordervalue" name="ordervalue" value="" />
						<input type="hidden" name="description" value="" />
						<input type="hidden" name="taxAmount" value="" />
						<input type="hidden" id="delivery" name="delivery" value="" />
						<input type="hidden" name="disAmount" value="" />
						
						
						

					 
					

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Warehouse <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

							

                           <select class="form-control" name="warehouse" id="warehouse">

                            

								<option value="">0</option>


                          </select>

							

								<input type="text" class="form-control" value="" readonly>

								<input type="hidden" name="warehouse" id="warehouse" value="" >

							

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

                        

                          <button type="submit" onclick="AddOrder();" class="btn btn-success">Submit</button>

						
                        </div>

                      </div>

					 

                    

                  </div>

                </div>

              </div>

            </div>
			
			<div class="col-md-12 col-sm-12 col-xs-12" >

                <div class="x_panel" id="items" >

                  <div class="x_title">

                    <h2>Order Items of OrderCode: </h2>
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

							

							<tr>
							   <td>
							   
							    <input type="checkbox" class="chkItem"  checked  value="" /> </td>

								<td>ItemName</td>

								<td>PackageName</td>

								<td>PackageQuantity</td>

								<td></td>

								<td id="priceitem"></td>

								<td>

								

								<label style="color:red">Quantity is less in your stock!! </label>

								

								<input type="button" id="myBtn" onclick="" value="Send Item"/></td>

								

								

								<!-- The Modal -->

								<div id="myModal" class="modal">
								</div>

							

								

								<td><input type="button" onclick="" value="Update"/></td>

								<td><a href="">delete</a></td>

								

							</tr>

							

                      </table>
					  
					  <button onclick="billitems();">Add to bill items</button>

                    </div>

                  </div>
				  
				  <div class="x_content">
					<h3>Delivery Address</h3>
					
						<p>To </br>
							Address:</br>
							Locality:</br>
							Landmark:</br>
							PinCode:</br>
						</p>
						
					
					
				  
				  </div>

                </div>

              </div>

			

		

			


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

	

  </body>

</html>

