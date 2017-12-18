<!DOCTYPE html>

<html lang="en">

  

     <head>

    <script type="text/javascript" src="/agriculture-food/js/jquery-1.7.1.min.js"></script>

   <title> Consignment</title>

  </head>  

 

  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        

        <!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Consignment</h3>

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

                    <h2>Consignment</h2>

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

					  $ConsignmentNo=0;

					  $OrderCode="";

					  $OrderNo="";

					  $OrderStatus=0;

						 $Deliveryboy=0;

						  $SourceAddress="";

						  $DestinationAddress="";

						  $ConsignmentDate="";

					      foreach($Consignments as $rowconsign) {

							  $Deliveryboy=$rowconsign["Deliveryboy"];

							  $SourceAddress=$rowconsign["SourceAddress"];

							  $DestinationAddress=$rowconsign["DestinationAddress"];

							  $ConsignmentDate=$rowconsign["ConsignmentDate"];

							  $ID=$rowconsign["ID"];

							  //$ID=0;

							  $ConsignmentNo=$rowconsign["ConsignmentNo"];

							  $OrderCode=$rowconsign["OrderCode"];

							  $OrderNo=$rowconsign["OrderNo"];

							  $OrderStatus=$rowconsign["OrderStatus"];

					  }?>

                    <form id="consignment_form" enctype="multipart/form-data" class="form-horizontal form-label-left">

					

					<!-- 1 -->

					  <?php 

					  $ConNo="";

					  $OrdNo="";

					  $OrdID=0;

					  $StatID=0;

					  $Stat="";

					  

					  foreach($Consignment as $rowcon){

						 $ConNo= $rowcon["ConsignmentNo"];

						 $OrdNo=$rowcon["OrderCode"];

						 $OrdID=$rowcon["OrderID"];

						 $StatID=$rowcon["StatusID"];

						 $Stat=$rowcon["Status"];

					  }

						  ?>

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_detail">ConsignmentNo <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="consignment_no" name="consignment_no" value="<?php if(($ID!=0)||($ID!=null)||($ID!="")) {echo $ConsignmentNo;} else { echo $ConNo; }?>" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <!-- 2 -->

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_detail">OrderNo <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

						<input type="hidden" name="order_no" value="<?php if(($ID!=0)||($ID!=null)||($ID!="")) {echo $OrderNo;} else { echo $OrdID;}?>">

                          <input type="text"  value="<?php if(($ID!=0)||($ID!=null)||($ID!="")) {echo $OrderCode;} else { echo $OrdNo;}?>" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_detail">Order Status <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

						<input type="hidden" name="statusID" value="<?php if(($ID!=0)||($ID!=null)||($ID!="")) {echo $OrderStatus;} else { echo $StatID;}?>" />

                          <input type="text" value="<?php if(($ID!=0)||($ID!=null)||($ID!="")) {echo $OrderStatus;} else {echo $Stat;}?>" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  

					  <!-- 3 -->

					  

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_detail">Assign Deliveryboy <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

						

                          <select name="deliveryboy" id="deliveryboy">

						   

						  <?php foreach($Delivery as $rowd){ ?>

						 <option <?php if($Deliveryboy==$rowd["ID"]){?> selected <?php } ?> value="<?php echo $rowd["ID"];?>"><?php echo $rowd["FullName"];?></option>

						  <?php } ?>

						  </select>

                        </div>

                      </div>

					  

					   <!-- 4 -->

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_detail">Source Address <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <textarea class="form-control" rows="3" name="s_address"  value="<?php if(($ID!=0)||($ID!=null)||($ID!="")){echo $SourceAddress;}?>"  placeholder='Enter Full Address'><?php if(($ID!=0)||($ID!=null)||($ID!="")){echo $SourceAddress;}?></textarea>

                        </div>

                      </div>

					  <!-- 5 -->

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_detail">Destination Address <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <textarea class="form-control" id="d_address" rows="3" name="d_address" value="<?php if(($ID!=0)||($ID!=null)||($ID!="")){echo $DestinationAddress;}?>" placeholder='Enter Full Address'><?php if(($ID!=0)||($ID!=null)||($ID!="")){echo $DestinationAddress;}?></textarea>

                        </div>

                      </div>

					  

					  <!-- 6 -->

					  

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_detail">Consignment Date <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

							

                         <input type="text" name="consignment_date"  value="<?php if(($ID!=0)||($ID!=null)||($ID!="")){echo $ConsignmentDate;}?>" class="form-control datepicker-13">

                        </div>

                      </div>

					  

					  </form>

					  



                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

								<?php if(($ID!=0)||($ID!=null)||($ID!="")){ ?>

								<button onclick="AddUpdate();" class="btn btn-success">Update</button>

								<?php } else {?>

                          <button onclick="AddConsignment();" class="btn btn-success">Submit</button>

								<?php } ?>

							

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

							<th>OrderNo</th>

							<th>Order Status</th>

							<th>Deliveryboy</th>

							<th>SourceAddress</th>

							<th>DestinationAddress</th>

							<th>ConsignmentDate</th>

							<?php if($type!=3){?><th>Delete</th><th>Update</th>

							<?php } ?>

							

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

	

	<!--date picker -->

	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"

         rel = "stylesheet">

      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>

      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

      

      <!-- Javascript -->

      <script>

         $(function() {

			 $(".datepicker-13").datepicker({ dateFormat: 'yy-mm-dd' });

            $( ".datepicker-13" ).datepicker();

            $( ".datepicker-13" ).datepicker("show");

			

         });

      </script>

	

	

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

   ShowConsignment();

});



function AddConsignment(){

		//alert(document.getElementById('datepicker-13').value);

		var myForm = document.getElementById('consignment_form');

		 formData = new FormData(myForm);

		 var url="<?php echo base_url();?>Consignment/AddConsignment";

				  $.ajax({

		   url:url,

		   type: 'POST',

		  data: formData,

		   contentType: false,       // The content type used when sending data to the server.

		   cache: false,             // To unable request pages to be cached

		   processData:false,        // To send DOMDocument or non processed data file it is set to false

		  success: function(){

			   document.getElementById('consignment_form').reset();

		       ShowConsignment();

		   },

		   error: function(){

			   alert("Fail")

		   }

	   });

}



function ShowConsignment(){

	

	var url="<?php echo base_url();?>Consignment/ShowConsignment";

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

				'<td>'+data[i].OrderCode+'</td>'+

				'<td>'+data[i].StatusDetail+'</td>'+

				'<td>'+data[i].FullName+'</td>'+

				'<td>'+data[i].SourceAddress+'</td>'+

				'<td>'+data[i].DestinationAddress+'</td>'+

				'<td>'+data[i].ConsignmentDate+'</td>';

          			

					<?php if($type!=3){?> 

					html += '<td ><a class=" last" href="<?php echo base_url()?>Consignment/DeleteConsignment/'+data[i].ID+'/'+data[i].ConsignmentNo+'/'+data[i].OrderNo+'/'+data[i].StatusID+'">Delete</a></td>'+

					'<td><a class="last" href="<?php echo base_url()?>Consignment/Consignments/?ID='+data[i].ID+'">Update</td>';

					

					<?php } ?>

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

/*Update can be doe only for address and delivery boy*/

function AddUpdate(){

	var deliveryboy = document.getElementById('deliveryboy').value;

	var d_address = document.getElementById('d_address').value;

		

		 var url="<?php echo base_url();?>Consignment/UpdateConsignment/<?php echo $ID;?>";

		 $.ajax({

		   url:url,

		   type: 'POST',

		  data: {

			  'deliveryboy':deliveryboy,

			  'd_address':d_address,

			   },

		  success: function(){

			  window.location.reload(true);

		      

		   },

		   error: function(){

			   alert("Fail")

		   }

	   });

}



</script>

	

  </body>

</html>

