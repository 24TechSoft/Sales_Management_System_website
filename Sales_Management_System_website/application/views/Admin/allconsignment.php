<!DOCTYPE html>

<html lang="en">

    <head>
		<title> Consignments to be updated</title>
		
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

                 

                  

                </div>

              </div>

            </div>

			

			<!--table starts-->

			

			   <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>Consignments</h2>

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

                            <th>Date</th>

							<th>OrderCode</th>

							<th>BillID</th>

							<th>ConsignmentNo</th>
							
							<th>Status</th>

							<th>Summmary</th>


							<th>Update</th>

							

							

                          </tr>

                        </thead>



                        <tbody id="showtable">
						
						<?php $ID=0;
						$Date="";
						$OrderCode="";
						$BillID=0;
						$OrderID=0;
						$ConsignmentNo="";
						$StatusDetail="";
						$Address="";
						$PrevID=0;
						$Open=0;
						foreach($OrderConsignment as $row){
							$ID=$row["ID"];
							$Date=$row["Date"];
							$OrderCode=$row["OrderCode"];
							$BillID=$row["BillID"];
							$OrderID=$row["OrderID"];
							$ConsignmentNo=$row["ConsignmentNo"];
							$StatusDetail=$row["StatusDetail"];
							$Address=$row["Address"];
							
							if($PrevID!=$OrderID){
								$PrevID=$OrderID;
							//	echo $PrevID;
								//$Open=1;
							
						?>
						
						<tr>
							<td><?php echo $Date;?></td>
							<td><?php echo $OrderCode;?></td>
							<td><?php echo $BillID;?></td>
							<td><?php echo $ConsignmentNo;?></td>
							<td><?php echo $StatusDetail;?></td>
							<td><?php echo $Address;?></td>
							<td><a class="last" href="<?php echo base_url();?>Consignment/updateorderstatus/<?php echo $OrderID;?>/<?php echo $BillID;?>">Update Status</a></td>
						</tr>
						
							<?php } } ?>
						  

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
    $('#usertable').DataTable();
	} );

/*	

$(document).ready(function() {

   ShowConsignment();

});





function ShowConsignment(){

	

	var url="<?php echo base_url();?>Consignment/OrderConsignment";

	//alert(url);

	$.ajax({

		url:url,

		type: 'ajax',

		dataType: 'json',

		success: function(data){

			var html = '';

			var i;
			
			var open=0;
			var PrevID=0;

			for(i=0; i<data.length;i++){
				

				html += '<tr>'+

				'<td>'+data[i].Date+'</td>'+

				'<td>'+data[i].OrderCode+'</td>'+

				'<td>'+data[i].BillID+'</td>'+

				'<td>'+data[i].ConsignmentNo+'</td>'+
				
				'<td>'+data[i].StatusDetail+'</td>'+
					
					

				'<td>Ship to :  </br>'+data[i].Address+'</td>'+
				
				'<td><a class=" last" href="<?php echo base_url();?>Consignment/updateorderstatus/'+data[i].OrderID+'/'+data[i].BillID+'">Update Status</a></td>'

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




*/
</script>

	

  </body>

</html>

