<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="text/javascript" src="/agriculture-food/js/jquery-1.7.1.min.js"></script>
    <title> Update Order Status</title>

  
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
       
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Update Order Status</h3>
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
                    <h2>Update Order Status</h2>
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
					
                   <form id="usermaster_form" enctype="multipart/form-data"  class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>Consignment/addorderstatus">
					<!--
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Date 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  name="taxAmount" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  -->
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> OrderCode
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="hidden" name="orderID" id="orderID" value="<?php echo $OrderID;?>">
						
						<input type="hidden" name="bill" value="<?php echo $Bill;?>" >
                          <input type="text" id="first-name"   class="form-control col-md-7 col-xs-12" value="<?php echo $OrderCode;?>">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Consignment No 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="conNo"  name="Consignment" class="form-control col-md-7 col-xs-12" value="<?php echo $Consignment;?>">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Status 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="status" class="form-control">
							<?php foreach($Statuses as $rowstst){?>
							<option value="<?php echo $rowstst["ID"]?>"><?php echo $rowstst["StatusDetail"]?></option>
							<?php } ?>
						  
						  </select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Remarks 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="remarks" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          <button type="submit" class="btn btn-success">Add</button>
						  
                        </div>
                      </div>
					  
                    </form> 

                    
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
									<tr>
										<th>Date</th>
										<th>Consignment Number</th>
										<th>Status</th>
										<th>Remark</th>
										<th>Delete</th>
										<th>Assign Delivery Personnel</th>
										
										
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
   showConsignment();
   
});
	function showConsignment(){
		//var orderID=document.getElementById('orderID').value;
		var conNo=document.getElementById('conNo').value;
		var url="<?php echo base_url();?>Consignment/showOrderConsignment/"+conNo;
		$.ajax({
			url:url,
			type:'ajax',
			dataType:'json',
			success:function(data){
				var html ="";
				for(var i=0;i<data.length;i++){
				html +='<tr>'+
				'<td>'+data[i].Date+'</td>'+
				'<td>'+data[i].ConsignmentNo+'</td>'+
				'<td>'+data[i].Status+'</td>'+
				'<td>'+data[i].Remarks+'</td>'+
				'<td><a class="last" href="<?php echo base_url();?>Consignment/DeleteUpdateorder/'+data[i].ID+'/'+data[i].OrderID+'/'+data[i].BillID+'">Delete</td>';
				if((data[i].StatusID)==5){
					html += '<td><a class="last" href="<?php echo base_url();?>Consignment/Consignments/'+data[i].ConsignmentNo+'/'+data[i].OrderID+'/'+data[i].StatusID+'">Assign Delivery Personnel</a></td>';
				}
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
	
	</script>
	
  </body>
</html>
