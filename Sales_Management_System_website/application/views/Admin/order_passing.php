<!DOCTYPE html>

<html lang="en">

  <head>

    <script type="text/javascript" src="/agriculture-food/js/jquery-1.7.1.min.js"></script>

    <title>Order Passing</title>



  

  </head>



  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        

       

        <!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Order Passing</h3>

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

                    <h2>Order Passing</h2>

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
                    <div class="row"> <!--row-->

					

					   

					   <form enctype="multipart/form-data"  class="form-horizontal form-label-left">

                     					

			        <div class="col-sm-12"> <!--div call-->



					 <div class="form-group">

                        

						

						<div class="col-sm-4"> <!--sub -1-->

						<!--1-->

						<label class="control-label col-sm-4" for="first-name">Order Name: 

                        </label>

						

                        <div class="col-sm-8">

                           <input type="text" id="ordername" class="form-control">

                        </div>

                      

					    </div> <!--sub -1 ends-->

					    <!--1-->

						

						<!--2-->

					   

					    <div class="col-sm-4"> <!--sub -2-->

                          <label class="control-label col-sm-4" for="first-name">Warehouse: 

                        </label>

                        <div class="col-sm-8">

                          <select name="warehouse" class="form-control" id="warehouse">

								<option value="0">All</option>

								<?php foreach ($warehouse as $row){?>

												

									<option value="<?php echo $row["ID"];?>"><?php echo $row["Name"];?></option>

								<?php } ?>

							</select>

                        </div>

						

						</div> <!--sub -2 end-->

                        <!--2-->

						

						<!--3-->

					  

                       <div class="col-sm-4"> <!--sub -3-->

					   

                          <label class="control-label col-sm-4" for="first-name">Date: 

                        </label>

						

                        <div class="col-sm-4">

                           <input type="text"  placeholder="YYYY/MM/DD" id="forderdate"  class="form-control datepicker-13" >

                        </div>

						<div class="col-sm-4">

                           <input type="text" placeholder="YYYY/MM/DD" id="torderdate"  class="form-control datepicker-13"></p>

                        </div>

						

						</div> <!--sun -3 end-->

						<!--3-->

						

						 

						

                      </div>

					  

					  </div><!--div call-->

                      

					</form>

                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         

                          <button type="submit" onclick="ordercheck();" class="btn btn-success">Search</button>

						  

                        </div>

                      </div>



					    

					</div> <!--row-->	

                    

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

                      <table class="table table-striped jambo_table bulk_action" id="showorder">

                       



                        

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

function ordercheck(){

	var ordernames=document.getElementById('ordername').value;

	//alert('abc');

	

	var warehouse=document.getElementById('warehouse').value;

	var forderdate=document.getElementById('forderdate').value;

	var torderdate=document.getElementById('torderdate').value;

	var url="<?php echo base_url();?>OrderMaster_Controller/checkorder";	

	//alert(ordername);

		

	//alert(url);

	$.ajax({

		url:url,

		type: 'POST',

		data: {'ordernames':ordernames,

		'warehouse':warehouse,

		'forderdate':forderdate,

		'torderdate':torderdate},

		dataType: 'json',

		success: function(data){

			//alert(data.length);

			var html = '';

			html +=' <thead>'+

                          '<tr class="headings">'+

                            '<th>Order Name</th>'+

							'<th>AssignedWarehouse</th>'+

							'<th>Update</th>'+

							

							

                         ' </tr>'+

                        '</thead>';

			for(var i=0; i<data.length;i++){

				html +=

				'<tr>'+

				'<td>'+data[i].OrderCode+'</td>'+

				'<td> '+data[i].Warehouse+'</td>'+

				'<td class="last"><a href="<?php echo base_url();?>OrderMaster_Controller/passingorder/'+data[i].ID+'">Update Warehouse</a></td>'+

				'</tr>';

				

			}

			$('#showorder').html("");

			$('#showorder').html(html);

		},

		error:function(data){

			alert('sorry no orders found');

		}

		});

}

</script>

	

  </body>

</html>

