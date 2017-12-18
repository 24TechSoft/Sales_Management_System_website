<!DOCTYPE html>

<html lang="en">

  <head>

     <head>

    <script type="text/javascript" src="/agriculture-food/js/jquery-1.7.1.min.js"></script>

    <title> Warehouse Master</title>

	<!--data tables-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Admin/css/datatables.min.css"/>
	
	<script type="text/javascript" src="<?php echo base_url();?>Admin/js/jquery-1.12.4.js"></script>
 
	<script type="text/javascript" src="<?php echo base_url();?>Admin/js/datatables.min.js"></script>
	<!--data tables-->

  <style>
	#nameErr, #eErr, #addErr, #cityErr, #stateErr, #pinErr, #codeErr{
		display:none;
		color:red;
	}
	</style>

  </head>

	



  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        

        <!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Warehouse </h3>

              </div>



              <div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                  

                </div>

              </div>

            </div>

            <div class="clearfix"></div>

			<?php if($type!=3){ ?>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>Warehouse</h2>

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

                    <form id="warehouse_form" enctype="multipart/form-data" class="form-horizontal form-label-left">

					

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Warehouse Name Or Location <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="name" id="name"class="form-control col-md-7 col-xs-12">

                        </div>
						
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" id="nameErr">Name cannot be blank!!</label>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Warehouse Code <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="code" id="code" class="form-control col-md-7 col-xs-12">

                        </div>
						
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" id="codeErr">WarehouseCode cannot be blank!!</label>

                      </div>

					  

					  <!--Address-->
					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Full Address 
                        </label>
					</div>

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Address Line-1<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="address1" id="address1" class="form-control col-md-7 col-xs-12"/>

                        </div>
						
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" id="addErr"> Address cannot be blank!!</label>
						<div class="clearfix"></div>

                      </div>
					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Address Line-2

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="address2" class="form-control col-md-7 col-xs-12"/>

                        </div>
						

                      </div>
					  
					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-6" for="last-name"> City<span class="required">*</span>

                        </label>

                        <div class="col-md-2 col-sm-2 col-xs-6 vendoors">

                          <input type="text" name="city" id="city" class="col-md-6 col-xs-12"/>
						  </br>
						  <label id="cityErr">City cannot be blank!!</label>

                        </div>
						
						 <label class="control-label col-sm-1" for="last-name"> State<span class="required">*</span>

                        </label>

                        <div class="col-md-2 col-sm-2 col-xs-6 mddd">

                          <input type="text" name="state" id="state" class="col-md-6 col-xs-12"/>
						  </br>
						  <label id="stateErr">State cannot be blank!!</label>

                        </div>
						
						

                      </div>
					  
					 <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">LandMark

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="landmark" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone No

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="phone"  class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email ID <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="email" id="email" class="form-control col-md-7 col-xs-12">

                        </div>
						
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" id="eErr">Email ID not valid!! </label>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pin Code<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="pinCode" id="pinCode" class="form-control col-md-7 col-xs-12">

                        </div>
						
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" id="pinErr">Pin Code cannot be blank!! </label>

                      </div>

					  

					  <!-- <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> GEO Location <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="geoLocation" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>-->

					  

					 

					   </form>

					  

                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         

                          <button type="submit" onclick="AddWarehouse();" class="btn btn-success">Submit</button>

						  

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





                    <div class="table-responsive" id="loadingtable">

                      <table class="table table-striped jambo_table bulk_action" id="usertable">

                        <thead>

                          <tr class="headings">

                            <th>Name</th>

							<th>Code</th>

							<th>Address</th>
							<th>Address1</th>
							<th>State</th>
							<th>City</th>
							<th>Landmark</th>

							<th>Phone Number</th>

							<th>Email</th>

							<th>PinCode</th>

							<!--<th>GeoLocation</th>-->

							<?php if($type!=3){ ?> <th>Delete</th><?php } ?>

							

                          </tr>

                        </thead>


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
	
  Displaywarehouse();

});

function validate(){
	var name=document.getElementById('name').value;
	var code=document.getElementById('code').value;
	var email=document.getElementById('email').value;
	var address=document.getElementById('address1').value;
	var city=document.getElementById('city').value;
	var state=document.getElementById('state').value;
	var pincode=document.getElementById('pinCode').value;
	
	var nameErr=document.getElementById('nameErr');
	var codeErr=document.getElementById('codeErr');
	var eErr=document.getElementById('eErr');
	var addErr=document.getElementById('addErr');
	var cityErr=document.getElementById('cityErr');
	var stateErr=document.getElementById('stateErr');
	var pinErr=document.getElementById('pinErr');
	
	if(name!=""){
		nameErr.style.display="none";
	}
	if(email!=""){
		eErr.style.display="none";
	}
	if(code!=""){
		codeErr.style.display="none";
	}
	if(address!=""){
		addErr.style.display="none";
	}
	if(city!=""){
		cityErr.style.display="none";
	}
	if(state!=""){
		stateErr.style.display="none";
	}
	if(pincode!=""){
		pinErr.style.display="none";
	}
	
	
	if(name==""){
		
		nameErr.style.display="block";
	}else if(code==""){
		codeErr.style.display="block";
	}else if(address==""){
		addErr.style.display="block";
	}else if(city==""){
		cityErr.style.display="block";
	}else if(state==""){
		stateErr.style.display="block";
	}
	else if((email=="")||(!validateEmail(email))){
		eErr.style.display="block";
	}else if(pincode==""){
		pinErr.style.display="block";
	}else{
		return true;
		
	}
}

function validateEmail(sEmail) {
	var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if (filter.test(sEmail)) {
		return true;
	}
	else {
		return false;
	}
}

function AddWarehouse(){
		if(validate()){
			alert("true");
			var url="<?php echo base_url();?>WarehouseMaster/AddWarehouse";

			var myForm = document.getElementById('warehouse_form');

			formData = new FormData(myForm);

			 $.ajax({

			   url:url,

			   type: 'POST',

			   data: formData,

			   contentType: false,       // The content type used when sending data to the server.

			   cache: false,             // To unable request pages to be cached

			   processData:false,        // To send DOMDocument or non processed data file it is set to false
				
			   success: function(){
					alert("warehouse added");
				   document.getElementById("warehouse_form").reset();
	
				   Displaywarehouse();

			   },

			   error: function(){

				   alert("Fail")

			   }

		   });
		}
	}



function Displaywarehouse(){

	 var url="<?php echo base_url();?>WarehouseMaster/ShowWarehouse";

	$.ajax({

		url:url,

		type: 'ajax',

		dataType: 'json',
		
		success: function(data){
			console.log(data);
			 $('#usertable').DataTable( {
					data: data,
					"columns": [
					{ "data": "Name" },
					{ "data": "Code" },
					{ "data": "Address" },
					{ "data": "Address1" },
					{ "data": "State" },
					{ "data": "City" },
					{ "data": "Landmark" },
					{ "data": "PhoneNo" },
					{ "data": "EmailID" },
					{ "data": "PinCode" },
					
					<?php if($type!=3){?>
					{ "data": "ID","render": function ( data, type, full, meta ) {
						  return '<a href="<?php echo base_url();?>WarehouseMaster/DeleteWarehouse/'+data+'">Delete</a>';
						} },
					<?php } ?>
					 
					
				],
				 
				destroy:true
			} );
		}
		
		});

	

}



</script>

  </body>

</html>

