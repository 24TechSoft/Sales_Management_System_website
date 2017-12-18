<!DOCTYPE html>

<html lang="en">

  <head>

     <head>

    
		<title>View Bill</title>
		
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

                <h3>View Bill</h3>

              </div>



              <div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                  

                </div>

              </div>

            </div>

            <div class="clearfix"></div>

			

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

							<th>View Bill Items</th>

							

							

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

});







function ShowBill(){

	var url="<?php echo base_url();?>BillMaster_Controller/ShowBill";

	//alert(url);

	$.ajax({

		url:url,

		type: 'ajax',

		dataType: 'json',

		success: function(data){
			console.log(data);
			 $('#usertable').DataTable( {
					data: data,
					"columns": [
					{ "data": "BillDate" },
					{ "data": "OrderCode" },
					{ "data": "CustomerID" },
					{ "data": "TotalOrderValue" },
					{ "data": "TaxDescription" },
					{ "data": "TaxAmount" },
					{ "data": "DiscountAmount" },
					{ "data": "GrandTotal" },
					{ "data": "AmountInText" },
					{ "data": "Warehouse" },
					
					
					{ "data": "ID","render": function ( data, type, full, meta ) {
						  return '<a href="<?php echo base_url();?>BillMaster_Controller/ShowAllBillItems/'+data+'">Show Bill Items</a>';
						} },
					
					 
					
				],
				 
				destroy:true
			} );
		}

		/*	var html = '';

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

					'<td>'+data[i].Warehouse+'</td>'+
					
					'<td><a class="last" href="<?php echo base_url();?>BillMaster_Controller/ShowAllBillItems/'+data[i].ID+'">Bill Items</a></td>'+

					'</tr>';

             }

			$('#showtable').html('');

			$('#showtable').html(html);

			},

		error:function(){

			alert('sorry');

		}*/

	});

	

}









</script>

	

  </body>

</html>

