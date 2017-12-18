<!DOCTYPE html>

<html lang="en">

  <head>

     <head>

    <script type="text/javascript" src="/agriculture-food/js/jquery-1.7.1.min.js"></script>

    <title> Customer Master</title>
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

                <h3>Customer Master</h3>

              </div>



              <div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                  

                </div>

              </div>

            </div>

            <div class="clearfix"></div>

			<?php if($type==0){?>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>Customer Master</h2>

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

                    <form id="customer_form" enctype="multipart/form-data" class="form-horizontal form-label-left">

					

					  

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Full Name <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" name="name" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone No <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="phone" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email ID <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="email" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Full Address <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <textarea class="form-control" rows="3" name="address" placeholder='Enter Full Address'></textarea>

                        </div>

                      </div>

					  

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pin Code <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="pinCode" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Vat <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="vat" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">User ID <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="userid" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                         <input type="password" name="password" class="form-control" value="passwordonetwo">

                        </div>

                      </div>

					 </form>
                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         

                          <button type="submit" onclick="AddCustomer();" class="btn btn-success">Submit</button>

						  

                        </div>

                      </div>



                   

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

                      <table class="table table-striped jambo_table bulk_action" id="usertable">

                        <thead>

                          <tr class="headings">

                            <th>Name</th>

							<th>Phone Number</th>

							<th>Email</th>

							<th>Address</th>

							<th>PinCode</th>

							<th>Vat</th>

							<th>UserID</th>

							<?php if($type!=3){?><th>Delete</th><?php } ?>

							

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

   DisplayCustomerMaster();

});



function AddCustomer(){

		 var myForm = document.getElementById('customer_form');

		 formData = new FormData(myForm);

		 var url='<?php echo base_url();?>CustomerMaster_Controller/Addcustomermaster';

		 $.ajax({

		   url:url,

		   type: 'POST',

		   data: formData,

		   contentType: false,       // The content type used when sending data to the server.

		   cache: false,             // To unable request pages to be cached

		   processData:false,        // To send DOMDocument or non processed data file it is set to false

		   success: function(){

		   DisplayCustomerMaster();

		   },

		   error: function(){

			   alert("Fail")

		   }

	   });

}



function DisplayCustomerMaster(){

	var url="<?php echo base_url();?>CustomerMaster_Controller/ShowCustomerMaster";

	$.ajax({

		url:url,

		type: 'ajax',

		dataType: 'json',

		success: function(data){
			
			console.log(data);
			 $('#usertable').DataTable( {
					data: data,
					"columns": [
					{ "data": "Name" },
					{ "data": "PhoneNo" },
					{ "data": "Email" },
					{ "data": "Address" },
					{ "data": "PinCode" },
					{ "data": "Vat" },
					{ "data": "UserID" },
					
					<?php if($type!=3){?>
					{ "data": "ID","render": function ( data, type, full, meta ) {
						  return '<a href="<?php echo base_url();?>CustomerMaster_Controller/DeleteCustomerMaster/'+data+'">Delete</a>';
					} },
					<?php } ?>
				],
				 
				destroy:true
			 } );
		}
	});

	

}

</script>

  </body>

</html>

