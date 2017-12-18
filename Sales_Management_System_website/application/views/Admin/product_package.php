<!DOCTYPE html>

<html lang="en">

  <head>

     <head>

		<title> Product Package</title>
		
		<!--data tables-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Admin/css/datatables.min.css"/>
		
		<script type="text/javascript" src="<?php echo base_url();?>Admin/js/jquery-1.12.4.js"></script>
	 
		<script type="text/javascript" src="<?php echo base_url();?>Admin/js/datatables.min.js"></script>
		<!--data tables-->
		<style>
			#packErr, #qtyErr, #priceErr{
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

                <h3> Product Package</h3>

              </div>



              <div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                  

                </div>

              </div>

            </div>

            <div class="clearfix"></div>

			<?php if($type!=3) {?>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2> Product Package</h2>

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

                    <form id="package_form" enctype="multipart/form-data" class="form-horizontal form-label-left">

					

					  

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Item Name <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <select class="form-control" name="item" id="item" onchange="category();">

								<?php foreach($item as $rowi){ ?>

									<option value="<?php echo $rowi["ID"]; ?>"><?php echo $rowi["Name"]; ?></option>

								<?php } ?>

							

							</select>

                        </div>

                      </div>

					  

					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12" id="categoryy">

                            <input type="text" id="categoryname"  name="categoryname"  class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

					  



					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Package Name:<span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <input type="text"  name="packagename" id="packagename" class="form-control col-md-7 col-xs-12">

                        </div>
						
						 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" id="packErr">Package Name cannot be blank!!</label>

                      </div>

					  

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Quantity: <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="quantity"  name="quantity"  required="required" class="form-control col-md-7 col-xs-12">

                        </div>
						
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" id="qtyErr">Quantity cannot be blank!!</label>

                      </div>
					  
					  
					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Minimum Vendor Quantity: <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="minquantity"  name="minquantity"  required="required" class="form-control col-md-7 col-xs-12">

                        </div>
						
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" id="qtyErr">Quantity cannot be blank!!</label>

                      </div>

					  

					  

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Price <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text"  name="price" id="price" class="form-control col-md-7 col-xs-12">

                        </div>
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name" id="priceErr">Price cannot be blank</label>

                      </div>

					   </form>



                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         

                          <button type="submit" onclick="AddProduct();" class="btn btn-success">Submit</button>

						  

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

                    <h2>Products</h2>

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

                            <th>Item Name</th>

							<th>Category</th>

							<th>Pakage Name</th>

							<th>Quantity</th>
							<th>Minimum Vendor Quantity</th>

							<th>Price</th>

							<?php if($type!=3) { ?><th>Delete</th><?php } ?>

							

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

   ShowProductPackage();

   category();
   
   validate();

});

function validate(){
	var packagename=document.getElementById('packagename').value;
	var quantity=document.getElementById('quantity').value;
	var price=document.getElementById('price').value;
	var packErr=document.getElementById('packErr');
	var qtyErr=document.getElementById('qtyErr');
	var priceErr=document.getElementById('priceErr');
	
	if(packagename!=""){
		packErr.style.display="none";
	}
	if(quantity!=""){
		qtyErr.style.display="none";
	}
	if(price!=""){
		priceErr.style.display="none";
	}
	
	if(packagename==""){
		packErr.style.display="block";
		return false;
	}else if(quantity==""){
		qtyErr.style.display="block";
		return false;
	}else if(price==""){
		priceErr.style.display="block";
		return false;
	}else{
		return true;
	}
}


function AddProduct(){
	
		if(validate()){

			 var myForm = document.getElementById('package_form');

			 formData = new FormData(myForm);

			 var url="<?php echo base_url();?>Product_Package/AddPackage";

			 $.ajax({

			   url:url,

			   type: 'POST',

			   data: formData,

			   contentType: false,       // The content type used when sending data to the server.

			   cache: false,             // To unable request pages to be cached

			   processData:false,        // To send DOMDocument or non processed data file it is set to false

			   success: function(){

				   document.getElementById('package_form').reset();

				   ShowProductPackage();

			   },

			   error: function(){

				   alert("Fail")

			   }

		   });
		}
	}



function ShowProductPackage(){

	var url="<?php echo base_url();?>Product_Package/ShowPackage";

	$.ajax({

		url:url,

		type: 'ajax',

		dataType: 'json',

		success: function(data){
			
			console.log(data);
			 $('#usertable').DataTable( {
					data: data,
					"columns": [
					{ "data": "Item" },
					{ "data": "Category" },
					{ "data": "PackageName" },
					{ "data": "Quantity" },
					{ "data": "MinVendorQty" },
					{ "data": "Price" },
					
					<?php if($type!=3){?>
					{ "data": "ID","render": function ( data, type, full, meta ) {
						  return '<a href="<?php echo base_url();?>Product_Package/DeletePackage/'+data+'">Delete</a>';
						} },
					<?php } ?>
					 
					
				],
				 
				destroy:true
			} );
		}
	});
}



function category(){

	var itemid=document.getElementById('item').value;

	var url='<?php echo base_url();?>ItemMaster/category/'+itemid;

	$.ajax({

		url:url,

		type:'ajax',

		dataType:'json',

		success:function(data){

			var html="";

			for(var i=0;i<data.length;i++){

				html +='<input type="text" name="categoryname" value="'+data[i].Category+'" required="required" class="form-control col-md-7 col-xs-12" readonly/>'+

				'<input type="hidden" name="categoryID" value="'+data[i].CategoryID+'">';

			}

			$('#categoryy').html("");

			$('#categoryy').html(html);

		},

		error:function(){

			alert('Sorry');

		}

		

	});

	

}



</script>

	

  </body>

</html>

