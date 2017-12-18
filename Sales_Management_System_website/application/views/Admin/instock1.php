<!DOCTYPE html>

<html lang="en">

  <head>

    <title> In Stock </title>
	<!--data tables-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Admin/css/datatables.min.css"/>
		
		<script type="text/javascript" src="<?php echo base_url();?>Admin/js/jquery-1.12.4.js"></script>
	 
		<script type="text/javascript" src="<?php echo base_url();?>Admin/js/datatables.min.js"></script>
		<!--data tables-->
		
		<style>
			#dateErr, #qtyErr{
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

                <h3>In Stock </h3>

              </div>



              <div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                  

                </div>

              </div>

            </div>

            <div class="clearfix"></div>

			<?php if($type!=3){?>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>In Stock </h2>

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

                    <form id="stock_form" enctype="multipart/form-data"  class="form-horizontal form-label-left">

					

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Warehouse <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

							<?php if($type==1) { ?>

                           <select class="form-control" name="warehouse">

                            <?php foreach($warehouse as $row){ ?>

								<option value="<?php echo $row["ID"]; ?>"><?php echo $row["Name"]; ?></option>

							<?php } ?>

                          </select>

							<?php } else if($type==2){  foreach($warehouse as $row){?>

								<input type="text" class="form-control" value="<?php echo $row["Name"]; ?>" readonly>

								<input type="hidden" name="warehouse" value="<?php echo $row["ID"]; ?>" >

							<?php } } ?>

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Item <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <select class="form-control"name="item" id="item" onchange="loadpackage();">

								<?php foreach($item as $rowi){ ?>

									<option value="<?php echo $rowi["ID"]; ?>"><?php echo $rowi["Name"]; ?></option>

								<?php } ?>

                          </select>

                        </div>

                      </div>

					  

                      <div class="form-group"  id="pack">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Package 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <select name="package" id="package">
							
																									

							</select>

                        </div>

                      </div>

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Entry Date: <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12" id="warehousecodes">

                          <input type="text" id = "datepicker-13" placeholder="yyyy/mm/dd" name="date" class="form-control">
							
                        </div>
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" id="dateErr">Entry Date: cannot be blank!! 

                        </label>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Quantity <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="quantity" name="quantity"  class="form-control col-md-7 col-xs-12">

                        </div>
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" id="qtyErr">Quantity cannot be blank!!</label>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Remarks 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="last-name" name="description" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  

					 

					</form>

                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         

                          <button type="submit" onclick="addStock();" class="btn btn-success">Submit</button>

						  

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

                            <th>Warehouse</th>

							<th>Item</th>

							<th>EntryDate</th>

							<th>Remark</th>

							<th>Package Quantity</th>

							<th>Quantity</th>

						<?php if($type!=3){?>	<th>Delete</th><?php } ?>

							

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
	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
     
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
      <!-- Javascript -->
      <script>
         $(function() {
	   $("#datepicker-13").datepicker({ dateFormat: 'yy-mm-dd' });
            $( "#datepicker-13" ).datepicker();
          //  $( "#datepicker-13" ).datepicker("show");
         });
      </script>

	

	<script>

$(document).ready(function() {
	//alert('test');
   ShowInStock();
   loadpackage();
});


function validate(){
	var date=document.getElementById('datepicker-13').value;
	var quantity=document.getElementById('quantity').value;
	var dateErr=document.getElementById('dateErr');
	var qtyErr=document.getElementById('qtyErr');
	if(date!=""){
		dateErr.style.display="none";
	}
	if(quantity!=""){
		qtyErr.style.display="none";
	}
	if(date==""){
		dateErr.style.display="block";
		return false;
	}else if(quantity==""){
		qtyErr.style.display="block";
		return false;
	}else{
		return true;
	}
}


function addStock(){
		if(validate()){
		var myForm = document.getElementById('stock_form');
		formData = new FormData(myForm);
		var url="<?php echo base_url();?>InStock/AddInStock";
			$.ajax({
			   url:url,
			   type: 'POST',
			   data: formData,
			   contentType: false,
			   cache: false,  
			   processData:false,
			   success: function(){
				window.location.reload(true);
			    ShowInStock();
			   },
			   error: function(){
				   alert("Fail")
			   }
		   });
		}
	}



function ShowInStock(){
	var url="<?php echo base_url();?>InStock/ShowInStock";
	alert(url);
	$.ajax({
		url:url,
		type: 'ajax',
		dataType: 'json',
		success: function(data){
			 $('#usertable').DataTable( {
					data: data,
					"columns": [
					{ "data": "Warehouse" },
					{ "data": "Item" },
					{ "data": "Date" },
					{ "data": "Remarks" },
					{ "data": "PackageQuantity" },
					{ "data": "Quantity" },
					<?php if($type!=3){?>
					{ "data": "ID","render": function ( data, type, full, meta ) {
						  return '<a href="<?php echo base_url();?>InStock/DeleteInStock/'+data+'/<?php echo $OrderID;?>">Delete</a>';
						} },
					<?php } ?>
					],
				destroy:true
			} );
		}
	});
}
/*

function ShowInStock(){

	var url='<?php echo base_url(); ?>InStock/ShowInStock';

	$.ajax({

		url:url,

		type: 'ajax',

		dataType: 'json',

		success: function(data){
			
			console.log(data);
			 $('#usertable').DataTable( {
					data: data,
					"columns": [
					{ "data": "Warehouse" },
					{ "data": "Item" },
					{ "data": "Date" },
					{ "data": "Quantity" },
					{ "data": "Remarks" },
					
					<?php if($type!=3){?>
					{ "data": "ID","render": function ( data, type, full, meta ) {
						  return '<a href="<?php echo base_url();?>DamageStock/DeleteInStock/'+data+'">Delete</a>';
						} },
					<?php } ?>
					 
					
				],
				 
				destroy:true
			} );
		}
	});
}
*/

function loadpackage(){
	alert('test');
	var select = document.getElementById('package');
	var item= document.getElementById('item').value;
	var url='<?php echo base_url();?>InStock/ShowPackage/'+item+'';
	$.ajax({
		url:url,
		type: 'ajax',
		dataType: 'json',
		success: function(data){
		    select.value="";
			select.innerHTML="";
			for(i=0; i<data.length;i++){
				 var opt = document.createElement('option');
					opt.value = data[i].ID+'('+data[i].PackageName+')';
					opt.innerHTML = data[i].PackageName;
					select.appendChild(opt);
			}
			},
		error:function(){
			alert('package sorry');
		}
	});
}



</script>

	

  </body>

</html>

