<!DOCTYPE html>

<html lang="en">

  <head>

    
	<!--data tables-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Admin/css/datatables.min.css"/>
	
	<script type="text/javascript" src="<?php echo base_url();?>Admin/js/jquery-1.12.4.js"></script>
 
<script type="text/javascript" src="<?php echo base_url();?>Admin/js/datatables.min.js"></script>
<!--data tables-->

    <title> User Master</title>



  

  </head>



  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        

       

        <!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>User Master</h3>

              </div>



              <div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                  

                </div>

              </div>

            </div>

            <div class="clearfix"></div>

			<?php if($type==1) {?>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>User Master</h2>

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

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Type <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <select class="form-control" name="userType">

                            <option value="1">Admin</option>

                            <option value="2">Warehouse Admin</option>

                            <option value="3">Observer</option>

							<option value="4">Delivery</option>

                          </select>

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Warehouse <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <select class="form-control" name="warehouse" id="warehouse" onchange="warehousecode();">

								<?php foreach($warehouse as $row){ ?>

									<option value="<?php echo $row["ID"]; ?>"><?php echo $row["Name"]; ?></option>

								<?php } ?>

                          </select>

                        </div>

                      </div>

					  

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Full Name <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" name="name" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Warehouse Code <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12" id="warehousecodes">

                          <input type="text" id="code" name="code" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phone No <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="phone"  required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email ID <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="email" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					 <!--Address-->
					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Full Address <span class="required">*</span>

                        </label>
					</div>

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Address Line-1<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="address" class="form-control col-md-7 col-xs-12"/>

                        </div>
						<div class="clearfix"></div>

                      </div>
					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Address Line-2

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="address1" class="form-control col-md-7 col-xs-12"/>

                        </div>
						

                      </div>
					  
					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-6" for="last-name"> City<span class="required">*</span>

                        </label>

                        <div class="col-md-2 col-sm-2 col-xs-6 vendoors">

                          <input type="text" name="city" class="col-md-6 col-xs-12"/>

                        </div>
						
						 <label class="control-label col-sm-1" for="last-name"> State<span class="required">*</span>

                        </label>

                        <div class="col-md-2 col-sm-2 col-xs-6 mddd">

                          <input type="text" name="state" class="col-md-6 col-xs-12"/>

                        </div>
						
						

                      </div>
					  
					 <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">LandMark <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="landmark" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>
					  

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pin COde <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="pinCode" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">User ID <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="userid" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                         <input type="password" name="password" class="form-control" value="passwordonetwo">

                        </div>

                      </div>

					</form>

                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         

                          <button type="submit" onclick="addUser();" class="btn btn-success">Submit</button>

						  

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

                      <table class="table table-striped jambo_table bulk_action" id="usertable">

                        <thead>

                          <tr class="headings">

                            <th>User Type </th>

                            <th>Warehouse </th>

							<th>Warehouse Code </th>

                            <th>Full Name </th>

                            <th>Phone No </th>

                            <th>Email ID </th>

							 <th>Address </th>
							 
							 <th>Address1 </th>
							 
							 <th>State </th>
							 
							 <th>City </th>
							 
							 <th>LandMark </th>

                            <th>Pincode </th>

                            <th>User ID </th>

							<!--<?php if($type!=3){?><th>Delete </th><?php } ?>-->

							

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
	
	 $('#usertable').DataTable();

  DisplayUserMaster();

   warehousecode();

});



function addUser(){  // passing down the event 

		 var myForm = document.getElementById('usermaster_form');

		 

		 formData = new FormData(myForm);

		 var url='<?php echo base_url();?>UserMaster/Addusermaster';

		// alert(JSON.stringify(myForm));

			 $.ajax({

		   url:url,

		   type: 'POST',

		   data: formData,

		   contentType: false,       // The content type used when sending data to the server.

		   cache: false,             // To unable request pages to be cached

		   processData:false,        // To send DOMDocument or non processed data file it is set to false

		   success: function(){

			   //document.getElementById('usermaster_form').reset();

			   window.location.reload(true);

		   DisplayUserMaster();

		   },

		   error: function(){

			   alert("Fail")

		   }

	   });

	  

	 }

	 
function DisplayUserMaster(){

	var url="<?php echo base_url();?>UserMaster/ShowUserMaster";

	//alert(url);

	$.ajax({

		url:url,

		type: 'ajax',

		dataType: 'json',

		success: function(data){

			var html = '';

			var i;

			for(i=0; i<data.length;i++){

				html +='<tr>';

				if(data[i].UserType==1){

					html += '<td>Admin</td>';

				}

				if(data[i].UserType==2){

					html += '<td>Warehouse Incharge</td>';

				}

				if(data[i].UserType==3){

					html += '<td>Observer</td>';

				}

				if(data[i].UserType==4){

					html +='<td>Delivery</td>';

				}

          	html +=	'<td>'+data[i].Warehouse+'</td>'+

					'<td>'+data[i].WarehouseCode+'</td>'+

          			'<td>'+data[i].FullName+'</td>'+

          			'<td>'+data[i].PhoneNo+'</td>'+

          			'<td>'+data[i].Email+'</td>'+

          			'<td>'+data[i].Address+'</td>'+
					
					'<td>'+data[i].Address1+'</td>'+
					
					'<td>'+data[i].State+'</td>'+
					
					'<td>'+data[i].City+'</td>'+
					
					'<td>'+data[i].Landmark+'</td>'+

					'<td>'+data[i].PinCode+'</td>'+

					'<td>'+data[i].UserID+'</td>';

					/*<?php if($type!=3){?>

					html+='<td><a href="<?php echo base_url();?>UserMaster/DeleteUserMaster/'+data[i].ID+'">Delete</a></td>';

					<?php } ?>*/

          			html += '</tr>';

             }

			$('#showtable').html('');

			$('#showtable').html(html);

			},

		error:function(){

			alert('sorry');

		}

	});

	

}



 function warehousecode(){

	var warehouseid=document.getElementById('warehouse').value;

	var url="<?php echo base_url();?>WarehouseMaster/warehouseCode/"+warehouseid;

	$.ajax({

		url:url,

		type:'ajax',

		dataType:'json',

		success:function(data){

			var html="";

			for(var i=0;i<data.length;i++){

			html +='<input type="text" name="code" value="'+data[i].Code+'" required="required" class="form-control col-md-7 col-xs-12" readonly/>';

			}

			$('#warehousecodes').html("");

			$('#warehousecodes').html(html);

			

		},

		error:function(){

			alert('error');

		}

	});

}



</script>

	

  </body>

</html>

