<!DOCTYPE html>

<html lang="en">

  <head>

     <head>

    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.7.1.min.js"></script>

   <title> Tracking</title>

  </head>  

 

  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        

        <!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Tracking</h3>

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

                    <h2>Tracking</h2>

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

					

					

						

					<input type="hidden" id="ConNo" value="<?php echo $ConsignmentNo;?>" />

							

                    <form id="tracking_form" enctype="multipart/form-data" class="form-horizontal form-label-left">

					

					<!-- 1 -->

					  

					    <?php foreach($Consignments as $rowcon){?>

                      <div class="form-group">

					  

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_detail">Assigned Delivery Person <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="hidden"  name="deliveryboy" value="<?php echo $rowcon["Deliveryboy"];?>"  required="required" class="form-control col-md-7 col-xs-12" readonly />

						  <input type="text"  value="<?php echo $rowcon["FullName"];?>"  required="required" class="form-control col-md-7 col-xs-12" readonly />

                        </div>

                      </div>

					  

					  <!-- 2 -->

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_detail">Consignment Number <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="consignment_no" value="<?php echo $rowcon["ConsignmentNo"]; ?>" required="required" class="form-control col-md-7 col-xs-12" readonly />

                        </div>

                      </div>

					  

					  <!-- 3 -->

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_detail">Status  <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <select name="Status" >

						  <?php foreach($Status as $rowd){ ?>

							<option <?php if($rowcon["OrderStatus"]==$rowd["ID"]){?> selected <?php } ?>value="<?php echo $rowd["ID"];?>" ><?php echo $rowd["StatusDetail"];?></option>

						  <?php } ?>

						  </select>

                        </div>

                      </div>

					  

					   <!-- 4 -->

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_detail">Remarks  <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <textarea class="form-control" rows="3" name="remarks"  ></textarea>

                        </div>

                      </div>

						 <?php } ?>

			

					  </form>

					  



                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

							

                          <button onclick="AddTracking();" class="btn btn-success">Submit</button>

							

                        </div>

                      </div>

	

                   

                  </div>

				 

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

                      <table class="table table-striped jambo_table bulk_action">

                        <thead>

                          <tr class="headings">

                            <th>ConsignmentNo</th>

							<th>Deliveryboy</th>

							<th>Status</th>

							<th>Remarks</th>

							<th>Delete</th>

							

							

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

   ShowTracking();

});



function AddTracking(){

	

	var myForm = document.getElementById('tracking_form');

	formData = new FormData(myForm);

	var url="<?php echo base_url();?>Consignment/AddTracking";

	//alert(url);

	//alert(url);

	

		  $.ajax({

		   url:url,

		   type: 'POST',

		  data: formData,

		   contentType: false,       // The content type used when sending data to the server.

		   cache: false,             // To unable request pages to be cached

		   processData:false,        // To send DOMDocument or non processed data file it is set to false

		  success: function(){

			   document.getElementById('tracking_form').reset();

		       ShowTracking();

		   },

		   error: function(){

			   alert("Fail")

		   }

	   });

}



function ShowTracking(){

	var ConNo=document.getElementById('ConNo').value;

	var url="<?php echo base_url();?>Consignment/ShowTracking/"+ConNo;

	$.ajax({

		url:url,

		type: 'ajax',

		dataType: 'json',

		success: function(data){

			var html = '';

			var i;

			for(i=0; i<data.length;i++){			

				html += '<tr>'+

				'<td>'+data[i].ConsignmentNo+'</td>'+

				'<td>'+data[i].FullName+'</td>'+

				'<td>'+data[i].StatusDetail+'</td>'+

				'<td>'+data[i].Remarks+'</td>'+

				'<td><a class="last" href="<?php echo base_url();?>Consignment/DeleteTracking/'+data[i].ID+'/'+data[i].ConsignmentNo+'">Delete</a></td>'+

					

					

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

