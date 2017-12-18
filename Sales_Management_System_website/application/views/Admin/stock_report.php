<!DOCTYPE html>

<html lang="en">

  <head>

    <script type="text/javascript" src="/agriculture-food/js/jquery-1.7.1.min.js"></script>

    <title> Stock Report</title>



  

  </head>



  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        

       

        <!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Stock Report</h3>

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

                    <h2>Stock Report</h2>

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

                    <form id="usermaster_form" enctype="multipart/form-data"  class="form-horizontal form-label-left">

					

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Warehouse 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <select class="form-control" name="warehouse" id="warehouse">

                            <option value="0">All</option>

								<?php foreach ($warehouse as $row){?>

									

									<option value="<?php echo $row["ID"];?>"><?php echo $row["Name"];?></option>

								<?php } ?>

                          </select>

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Item Name 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <select class="form-control" name="itemname" id="itemname">

								<option value="0">All</option>

								<?php foreach ($item as $rowi){?>

									

									<option value="<?php echo $rowi["ID"];?>"><?php echo $rowi["Name"];?></option>

								<?php } ?>

                          </select>

                        </div>

                      </div>

					  

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Order Date: 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <p><input type="text"  name="fdate" id="fdate" placeholder="YYYY/MM/DD" class="form-control col-md-7 col-xs-12 datepicker-13 ">-<input type="text" name="tdate"id="tdate"   placeholder="YYYY/MM/DD" class="form-control col-md-7 col-xs-12 datepicker-13"></p>

                        </div>

                      </div>

                      

					</form>

                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         

                          <button type="submit" class="btn btn-success" onclick="ordercheck();">Search</button>

						  

                        </div>

                      </div>



                    

                  </div>

                </div>

              </div>

            </div>

			

			<!--table starts-->

			

			   <div class="col-md-12 col-sm-12 col-xs-12" id="showorder">

                

              </div>

			

           <!--table ends-->

		   

		   <!--table starts-->

			

			   <div class="col-md-12 col-sm-12 col-xs-12" id="CurrentItems">

                

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

/*

function availableitem(){

	//alert('abc');

	var itemname=document.getElementById('itemname').value;

	var warehouse=document.getElementById('warehouse').value;

	//alert(warehouse);

	var url="<?php echo base_url();?>Report_Controller/availitem";	

	//alert(url);

	$.ajax({

		url:url,

		type:'post',

		data:{

			'itemname':itemname,

			'warehouse':warehouse,

		},

		dataType:'json',

		success:function(data){

			var html="";

			if(data!=""){

				html += '<div class="x_panel">'+

                  '<div class="x_title">'+

                    '<h2>Items</h2>'+

                    '<ul class="nav navbar-right panel_toolbox">'+

                      '<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>'+

                      '</li>'+

                      '<li class="dropdown">'+

                        '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>'+

                        '<ul class="dropdown-menu" role="menu">'+

                          '<li><a href="#">Settings 1</a>'+

                          '</li>'+

                          '<li><a href="#">Settings 2</a>'+

                          '</li>'+

                        '</ul>'+

                      '</li>'+

                      '<li><a class="close-link"><i class="fa fa-close"></i></a>'+

                      '</li>'+

                    '</ul>'+

                    '<div class="clearfix"></div>'+

                  '</div>'+



                  '<div class="x_content">'+





                    '<div class="table-responsive" >'+

					'<table class="table table-striped jambo_table bulk_action">'+

                        '<thead>'+

                          '<tr class="headings">'+

                            '<th>Item Name </th>'+

							'<th>Warehouse </th>'+

                            '<th>Remaining Quantity </th>'+

                            

							

                          '</tr>'+

                        '</thead>'+



                        '<tbody >';

                      

                    

			for(var i=0;i<data.length;i++){

				html += '<tr>'+

				'<td>'+data[i].ItemName+'</td>'+

				'<td>'+data[i].Warehouse+'</td>'+

				'<td>'+data[i].Quantity+'</td>'+

				'</tr>';

			}

			html += '</tbody>'+

			'</table>'+

			'</div>'+

							

						

                  '</div>'+

                '</div>';

			}

			else{ alert(data);};

			$('#CurrentItems').html('');

			$('#CurrentItems').html(html);

		},

		error:function(){

			alert('error');

		}

	});

}*/

function ordercheck(){

	var itemname=document.getElementById('itemname').value;

	var warehouse=document.getElementById('warehouse').value;

	var fdate=document.getElementById('fdate').value;

	var tdate=document.getElementById('tdate').value;

	//alert(fdate);

	var url="<?php echo base_url();?>Report_Controller/checkstocks";

	$.ajax({

		url:url,

		type: 'POST',

		data: {'itemname':itemname,

		'warehouse':warehouse,

		'fdate':fdate,

		'tdate':tdate},

		dataType: 'json',

		success: function(data){

			var html = '';

			 var sum=0.000;

			 var lastitem="";	

			html += '<div class="x_panel">'+

                  '<div class="x_title">'+

                    '<h2>Orders </h2>'+

                    '<ul class="nav navbar-right panel_toolbox">'+

                      '<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>'+

                      '</li>'+

                      '<li class="dropdown">'+

                        '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>'+

                        '<ul class="dropdown-menu" role="menu">'+

                         '<li><a href="#">Settings 1</a>'+

                          '</li>'+

                          '<li><a href="#">Settings 2</a>'+

                          '</li>'+

                        '</ul>'+

                      '</li>'+

                      '<li><a class="close-link"><i class="fa fa-close"></i></a>'+

                      '</li>'+

                    '</ul>'+

                    '<div class="clearfix"></div>'+

                  '</div>'+



                  '<div class="x_content">'+





                    '<div class="table-responsive" >'+

					 '<table class="table table-striped jambo_table bulk_action">'+

                        '<thead>'+

                          '<tr class="headings">'+

                            '<th>Date </th>'+

							'<th>Warehouse </th>'+

							'<th>Item </th>'+

							'<th>Quantity </th>'+

                            '<th>Remarks </th>'+

                            

							

                          '</tr>'+

                        '</thead>'+



                        '<tbody id="showtable">';

                      

            		 

			for(var i=0; i<data.length;i++){

				

				if((lastitem!="")&&(lastitem!=data[i].Item)){

				html +='<tr>'+

				'<td colspan="2">Sum</td>'+

				'<td colspan="1">'+lastitem+'</td>'+

				'<td colspan="2">'+sum+'</td>'+

				'</tr>';

				sum=0.000;

				}

				

				if(lastitem!=data[i].Item){

					lastitem=data[i].Item;

					

				}

					sum=sum+parseFloat(data[i].Qty);

					html +='<tr>'+

				'<td>'+data[i].Date+'</td>'+

				'<td>'+data[i].Warehouse+'</td>'+

				'<td>'+data[i].Item+'</td>'+

				'<td>'+data[i].Qty+'</td>'+

				'<td>'+data[i].Remarks+'</td>'+

				'</tr>';

				

				

			}

			html +='<tr>'+

				'<td colspan="2">Sum</td>'+

				'<td colspan="1">'+lastitem+'</td>'+

				'<td colspan="2">'+sum.toString().substr(0,sum.toString().indexOf(".")+3)+'</td>'+

				'</tr>';

			html += '</tbody>'+

			'</table>'+

			'</div>'+

							

						

                  '</div>'+

                '</div>';

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

