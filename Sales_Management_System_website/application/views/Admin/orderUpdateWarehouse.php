<!DOCTYPE html>

<html lang="en">

  <head>

    <script type="text/javascript" src="/agriculture-food/js/jquery-1.7.1.min.js"></script>

    <title>Order Update</title>



  

  </head>



  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        

       

        <!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Order Update</h3>

              </div>



              <div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                  

                </div>

              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>Order Update</h2>

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

                    <form id="package_form" enctype="multipart/form-data" class="form-horizontal form-label-left">

					

					  

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Order Name 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                             <input type="text" value="<?php echo $row["OrderCode"];?> " class="form-control col-md-7 col-xs-12" readonly>

                        </div>

                      </div>



					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Order Date:

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <input type="text"  class="form-control col-md-7 col-xs-12" value="<?php echo $row["TotalOrderValue"];?>" readonly>

                        </div>

                      </div>

					  

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tax Amount: 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="disabled" class="form-control col-md-7 col-xs-12" value="<?php echo $row["TaxAmount"];?>" readonly>

                        </div>

                      </div>

					  

					  

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Grand Total

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" class="form-control col-md-7 col-xs-12"  value="<?php echo $row["GrandTotal"];?>" readonly>

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Item Name

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" class="form-control col-md-7 col-xs-12"  value="<?php echo $row["ItemName"];?>" readonly>

						  <input type="hidden" id="itemid" value="<?php echo $row["ItemID"];?>" />

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Package Name

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" class="form-control col-md-7 col-xs-12"  value="<?php echo $row["PackageNAme"];?>" readonly>

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Package Quantity

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" class="form-control col-md-7 col-xs-12"  value="<?php echo $row["PackageQuantity"];?>" readonly>

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Package Price

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" class="form-control col-md-7 col-xs-12"  value="<?php echo $row["PackagePrice"];?>" readonly>

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Grand Total

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" class="form-control col-md-7 col-xs-12"  value="<?php echo $row["TotalQuantity"];?>" readonly>

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Grand Total

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" class="form-control col-md-7 col-xs-12"  value="<?php echo $row["GrandTotal"];?>" readonly>

                        </div>

                      </div>

					   </form>



                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         

                          <button type="submit" onclick="AddProduct();" class="btn btn-success">Submit</button>

						  

                        </div>

                      </div>



                   

                  </div>

                </div>

              </div>

            </div>

			

			



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

function update(){

	

	var warehouse=document.getElementById('warehouse').value;

	//alert(warehouse);

	var itemid=document.getElementById('itemid').value;

	//alert(itemid);

	var orderid=document.getElementById('orderid').value;

	//alert(orderid);

	var url='<?php echo base_url();?>OrderMaster_Controller/checkwarehouse/'+warehouse+'/'+itemid+'/'+orderid;

	

	//alert(url);

	$.ajax({

		url:url,

		type:'ajax',

		dataType:'json',

		success:function(data){

			alert(data);

		},

		error:function(){

			alert('error');

		}

	});



}



</script>

	

  </body>

</html>

