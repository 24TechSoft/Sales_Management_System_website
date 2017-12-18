<!DOCTYPE html>

<html lang="en">

  <head>

     <head>

    <script type="text/javascript" src="/agriculture-food/js/jquery-1.7.1.min.js"></script>

   <title>Bill Item</title>

  </head>  

 

    

  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        



        <!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Bill Item</h3>

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

                            

							<th>BillID</th>

							<th>ItemName</th>

							<th>ItemID</th>

							<th>Order Code</th>

							<th>PackageQuantity</th>

							<th>PackagePrice</th>

							<th>TotalPrice</th>

							<th>PackageID</th>

							<th>PackageName</th>

							<th>TotalQuantity</th>

							

                          </tr>

                        </thead>



                        <tbody id="showtable">

						<input type="hidden" id="OrderiD" value="<?php echo $OrderID;?>" />

						<?php foreach($Bill as $rowbill){?>

						<tr>

							<td><?php echo $rowbill["BillID"];?></td>

							<td><?php echo $rowbill["ItemName"];?></td>

							<td><?php echo $rowbill["ItemID"];?></td>

							<td><?php echo $rowbill["OrderCode"];?></td>

							<td><?php echo $rowbill["PackageQuantity"];?></td>

							<td><?php echo $rowbill["PackagePrice"];?></td>

							<td><?php echo $rowbill["TotalPrice"];?></td>

							<td><?php echo $rowbill["PackageID"];?></td>

							<td><?php echo $rowbill["PackageName"];?></td>

							<td><?php echo $rowbill["TotalQuantity"];?></td>

							

						</tr>

						<?php } ?>						

                        </tbody>

                      </table>

                    </div>

					 <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         

                          <button type="submit" onclick="billSubmit();" class="btn btn-success">Submit</button>

						  

                        </div>

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

	 function billSubmit(){  // passing down the event 

		// alert('test');

		// var BillID=document.getElementById('billID').value;

		 var OrderID=document.getElementById('OrderiD').value;

		 // var WarehouseID=document.getElementById('warehouseID').value;

		 //alert(OrderID);

		 var url="<?php echo base_url();?>BillMaster_Controller/AddBillItem/"+OrderID;

		// alert(url);

		 $.ajax({

		   url:url,

		   type: 'AJAX',

		   dataType:'JSON',

		   success: function(data){

			   alert(data);

				window.location.reload(true);

		   },

		   error: function(){

			   alert("Fail")

		   }

	   });

	 }

/*

function ShowBill(){

	var OrderID=document.getElementById('orderID').value;

	var url='<?php echo base_url();?>BillMaster_Controller/ShowBillItem';

	$.ajax({

		url:url,

		type: 'ajax',

		dataType: 'json',

		success: function(data){

			var html = '';

			var i;

			for(i=0; i<data.length;i++){			

				html += '<tr>'+									



					'<td>'+data[i].BillID+'</td>'+

					'<td>'+data[i].ItemName+'</td>'+

					'<td>'+data[i].ItemID+'</td>'+

          			

          			'<td>'+data[i].PackageQuantity+'</td>'+

					'<td>'+data[i].PackagePrice+'</td>'+

					'<td>'+data[i].TotalPrice+'</td>'+

					'<td>'+data[i].PackageID+'</td>'+

					'<td>'+data[i].PackageName+'</td>'+

					'<td>'+data[i].TotalQuantity+'</td>'+

					

					'<td><a href="/agriculture-food/BillMaster_Controller/DeleteBillItem/'+data[i].ID+'/'+OrderID+'/'+data[i].BillID+'">Delete</a></td>'+

					//'<td><a href="/agriculture-food/BillMaster_Controller/createbill/'+data[i].ID+'">CreateBill</a></td>'+

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

