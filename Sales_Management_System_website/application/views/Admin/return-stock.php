<!DOCTYPE html>

<html lang="en">

  <head>

    <script type="text/javascript" src="/agriculture-food/js/jquery-1.7.1.min.js"></script>

    <title> Return Stock </title>



  

  </head>



  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        

       

        <!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Return Stock </h3>

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

                    <h2>Return Stock </h2>

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

                    <form id="returnstock_form" enctype="multipart/form-data"  class="form-horizontal form-label-left">

					

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Warehouse <span class="required">*</span>

                        </label>

						<div class="col-md-6 col-sm-6 col-xs-12">

							<?php if($type==1) { ?>

                           <select class="form-control" name="warehouse">

                            <?php foreach($warehouse as $row){ ?>

								<option value="<?php echo $row["ID"]; ?>"><?php echo $row["Name"]; ?></option>

							<?php } ?>

                          </select>

							<?php } else if($type==2){  foreach($warehouse as $row){?>

								<input type="text" class="form-control" value="<?php echo $row["Name"]; ?>" readonly>

								<input type="hidden" name="warehouse" value="<?php echo $row["ID"]; ?>" >

							<?php } } ?>

                        </div>

                        

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Item <span class="required">*</span>

                        </label>

                       <div class="col-md-6 col-sm-6 col-xs-12">

                           <select class="form-control" name="item">

                            <?php foreach($item as $rowi){ ?>

								<option value="<?php echo $rowi["ID"]; ?>"><?php echo $rowi["Name"]; ?></option>

							<?php } ?>

                          </select>

                        </div>

                      </div>

					  

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Return Date: 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12" id="warehousecodes">

                          <input type="text" placeholder="yyyy/mm/dd" name="date" class="form-control">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Order: 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12" id="warehousecodes">

                          <input type="text" name="stufforder" class="form-control">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Bill: 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12" id="warehousecodes">

                          <input type="text" name="bill" class="form-control">

                        </div>

                      </div>

					  

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Quantity <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="quantity"  required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Remarks 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="description" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					 

					</form>

                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         

                          <button type="submit" onclick="addReturnStock();" class="btn btn-success">Submit</button>

						  

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

                      <table class="table table-striped jambo_table bulk_action">

                        <thead>

                          <tr class="headings">

                           <th>Warehouse</th>

							<th>Item</th>

							<th>ReturnDate</th>

							<th>Quatity</th>

							<th>Description</th>

							<th>Order</th>

							<th>Bill</th>

						<?php if($type!=3) { ?>	<th>Delete</th><?php } ?>

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

   ShowreturnStock();

});





function addReturnStock(){  // passing down the event 

		 var myForm = document.getElementById('returnstock_form');

		 formData = new FormData(myForm);

		 var url="<?php echo base_url();?>ReturnStock/AddReturnStock";

		// alert(url);

		 $.ajax({

		   url:url,

		   type: 'POST',

		   data: formData,

		   contentType: false,       // The content type used when sending data to the server.

		   cache: false,             // To unable request pages to be cached

		   processData:false,        // To send DOMDocument or non processed data file it is set to false

		   success: function(){

			   document.getElementById('returnstock_form').reset();

		   ShowreturnStock();

		   },

		   error: function(){

			   alert("Fail")

		   }

	   });

}



function ShowreturnStock(){

	var url="<?php echo base_url();?>ReturnStock/ShowreturnStock";

	// alert(url);

	$.ajax({

		url:url,

		type: 'ajax',

		dataType: 'json',

		success: function(data){

			var html = '';

			var i;

			for(i=0; i<data.length;i++){			

				html += '<tr>'+

          			'<td>'+data[i].Warehouse+'</td>'+

					'<td>'+data[i].Item+'</td>'+

          			'<td>'+data[i].Date+'</td>'+

          			'<td>'+data[i].Quantity+'</td>'+

					'<td>'+data[i].Remarks+'</td>'+

					'<td>'+data[i].StuffOrder+'</td>'+

					'<td>'+data[i].Bill+'</td>';

					<?php if($type!=3){ ?>

					html +='<td><a href="/agriculture-food/ReturnStock/DeleteReturnStock/'+data[i].ID+'">Delete</a></td>'; <?php } ?>

          		html +=	'</tr>';

             }

			$('#showtable').html('');

			$('#showtable').html(html);

			},

		error:function(){

			alert('show sorry');

		}

	});

	

}



</script>

	

  </body>

</html>

