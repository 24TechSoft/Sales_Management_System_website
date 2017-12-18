<!DOCTYPE html>

<html lang="en">

	<head>
		<title> Tracking</title>
		
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

                <h3>Tracking</h3>

              </div>



              <div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                  

                </div>

              </div>

            </div>

            <div class="clearfix"></div>

			

            <div class="row">

              

				 

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

					       <div class="search">

						   

						       <div class="left">

						   

						        <input type="date" name="search" id="searchdate" onchange="search();" placeholder="yyyy-mm-dd enter the date" class="datepicker-13">

								

								</div>

								

								<div class="right">

								

								    <button>Submit</button>

								

								</div>

						   

					        </div>

							

				    </div>

					

					<div class="x_content">



                    <div class="table-responsive">

                      <table class="table table-striped jambo_table bulk_action" id="usertable">

                        <thead>

                          <tr class="headings" >

							<th>Deliveryboy</th>

                            <th>ConsignmentNo</th>

							<th>ConsignmentDate</th>

							<th>Status</th>

							<th>Update</th>

							

							

                          </tr>

                        </thead>



                        <tbody id="showtable">

						<?php foreach($Consignments as $row){?>

						<tr >

							<th><?php echo $row["FullName"];?></th>

                            <th><?php echo $row["ConsignmentNo"];?></th>

							<th><?php echo $row["ConsignmentDate"];?></th>

							<th><?php echo $row["StatusDetail"];?></th>

							<th><a class="last" href="<?php echo base_url();?>Consignment/tracking/<?php echo $row["ConsignmentNo"];?>">Update</a></th>

							

                          </tr>

						<?php } ?>  

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
    $('#usertable').DataTable();
	} );


function search(){

	var searchdate=document.getElementById('searchdate').value;

	
	var url="<?php echo base_url();?>Consignment/searchdate";

	
	var html="";

	$.ajax({

		url:url,

		type:'post',

		dataType:'json',

		data:{

			'date':searchdate,

		},

		success:function(data){

			for(var i=0;i<data.length;i++){

				html +='<tr>'+

							'<th>'+data[i].FullName+'</th>'+

                            '<th>'+data[i].ConsignmentNo+'</th>'+

							'<th>'+data[i].ConsignmentDate+'</th>'+

							'<th>'+data[i].StatusDetail+'</th>'+

							'<th><a class="last" href="<?php echo base_url();?>Consignment/tracking/<?php echo $row["ConsignmentNo"];?>">Update</a></th>'+

							

                          '</tr>';

			}

			
			$('#showtable').html("");

			$('#showtable').html(html);

		},

		error:function(data){

			alert('Search Error');

		}

	});

}









</script>

	

  </body>

</html>
