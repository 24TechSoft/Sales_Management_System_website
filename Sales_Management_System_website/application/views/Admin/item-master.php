<!DOCTYPE html>

<html lang="en">

  <head>

     <head>

	   <title> Item Master</title>
	   
	   <!--data tables-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Admin/css/datatables.min.css"/>
		
		<script type="text/javascript" src="<?php echo base_url();?>Admin/js/jquery-1.12.4.js"></script>
	 
		<script type="text/javascript" src="<?php echo base_url();?>Admin/js/datatables.min.js"></script>
		<!--data tables-->
		
		<!--validation-->
		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
		<script>
		$(document).ready(function() {
		console.log('abc');
			$("#item_form").validate({
				
			rules: {
				name: {
					required:true,
					minlength:"2"
				},
				
				description: "required",
			},
			messages: {
				name: {
					required:"Please enter item firstname",
					minlength:"item name must consist of 2 characters"
				},
				description: "Please enter your item's description",
			}
			});
			
		});
		
		</script>
		<!--validation-->

	 </head>  

 

  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        

        <!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Item Master</h3>

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

                    <h2>Item Master</h2>

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

                    <form id="item_form" enctype="multipart/form-data" class="form-horizontal form-label-left">

					<?php $ID=0;

						  $Name="";

						  $CategoryID=0;

						  $Category="";

						  $ItemDescription="";

						  $CurrentPrice=0.00;

						  $Photo="";

						  foreach($Items as $rowitem){

							$ID=$rowitem["ID"];

							$Name=$rowitem["Name"];

							$Category=$rowitem["Category"];

							$CategoryID=$rowitem["CategoryID"];

							$ItemDescription=$rowitem["ItemDescription"];

							$CurrentPrice=$rowitem["CurrentPrice"];

							$Photo=$rowitem["Photo"];



						  }



					  ?>

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Item Name <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12" value="<?php if(($ID!=0)||($ID!=null)||($ID!="")) { echo $Name;}?>">

                        </div>
						
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" id="error" style="display:none;color:red;">Item Name cannot be empty!!</label>

                      </div>

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Category 

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <select name="category" id="category" class="form-control">

						  <?php foreach($category as $row){ ?>

							<option <?php if($CategoryID==$row["ID"]){?> selected <?php } ?> value="<?php echo $row["ID"];?>"><?php echo $row["Category"]; ?></option>

						  <?php } ?>

						  </select>

                        </div>

                      </div>



					   <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Item Description <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <textarea class="form-control" rows="3" name="description" id="description" value="<?php if(($ID!=0)||($ID!=null)||($ID!="")) { echo $ItemDescription;}?>"><?php if(($ID!=0)||($ID!=null)||($ID!="")) { echo $ItemDescription;}?></textarea>

                        </div>
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descriptionerror" id="deserror" style="display:none;color:red;">Description cannot be blank!!</label>

                      </div>

					  

					  

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Current Item Price <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="currentPrice"  name="currentPrice" id="currentPrice" class="form-control col-md-7 col-xs-12" value="<?php if(($ID!=0)||($ID!=null)||($ID!="")) { echo $CurrentPrice;}?>">

                        </div>
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="curPrice" id="priceError" style="display:none;color:red;">Current Item Price

                      </div>

					  

					  

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Photo <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" name="photo" id="photo"/>

						<?php if(($ID!=0)||($ID!=null)||($ID!="")) {?>

						<img src="<?php echo base_url();?>ItemPhoto/<?php echo $Photo;?>" style="height:50px;width:50px;" />

						<?php } ?>

                        </div>

                      </div>

					   </form>



                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         <?php if(($ID!=0)||($ID!=null)||($ID!="")) {?>

                          <button type="submit" onclick="UpdateItem(<?php echo $ID;?>);" class="btn btn-success">Update</button>

						 <?php } else{ ?>  

						  <button type="submit" onclick="AddItem();" class="btn btn-success">Submit</button>

						 <?php } ?>

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

                            <th>Name</th>

							<th>Category</th>

							<th>ItemDescription</th>

							<th>CurrrentPrice</th>

							<th>Photo</th>

							<?php if($type!=3){?><th>Delete</th><th>Update</th><?php } ?>

							

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

   ShowItemMaster();

});

function validation(){
	var name=document.getElementById('name').value;
		var description=document.getElementById('description').value;
		var currentPrice=document.getElementById('currentPrice').value;
		
		var nameErr=document.getElementById('error');
		var desErr=document.getElementById('deserror');
		var PriceErr=document.getElementById('priceError');
		
		
		if(name!=""){
			nameErr.style.display="none";
		}
		if(description!=""){
			desErr.style.display="none";
		}
		if(currentPrice!=""){
			PriceErr.style.display="none";
		}
		
		if(name==""){
			nameErr.style.display="block";
			return false;
		}
		else if(description==""){
			desErr.style.display="block";
			return false;
		}
		else if(currentPrice==""){
			PriceErr.style.display="block";
			return false;
		}
		else{
			return true;
		}
}


function AddItem(){
		var validate=validation();
		if(validation()){
		
		 var myForm = document.getElementById('item_form');

		 formData = new FormData(myForm);

		 var url="<?php echo base_url();?>ItemMaster/AddItemMaster";

		  $.ajax({

		   url:url,

		   type: 'POST',

		   data: formData,

		   contentType: false,       // The content type used when sending data to the server.

		   cache: false,             // To unable request pages to be cached

		   processData:false,        // To send DOMDocument or non processed data file it is set to false

		   success: function(){
			   
			   document.getElementById('item_form').reset();
			   

		   ShowItemMaster();

		   },

		   error: function(){

			   alert("Fail")

		   }

	   });
	}
}



function ShowItemMaster(){

	var url="<?php echo base_url();?>ItemMaster/ShowItemMaster";

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
					{ "data": "Name" },
					{ "data": "Category" },
					{ "data": "ItemDescription" },
					{ "data": "CurrentPrice" },
					{ "data": "Photo" ,"render": function ( data, type, full, meta ) {
						  return '<img src="<?php echo base_url();?>ItemPhoto/'+data+'" style="height:50px;width:50px;" />';
						} },
					
					<?php if($type!=3){?>
					{ "data": "ID","render": function ( data, type, full, meta ) {
						  return '<a href="<?php echo base_url();?>ItemMaster/DeleteItemMaster/'+data+'">Delete</a>';
						} },
					{ "data": "ID","render": function ( data, type, full, meta ) {
						  return '<a href="<?php echo base_url();?>ItemMaster/index/'+data+'">Update</a>';
						} },
					<?php } ?>
					 
					
				],
				 
				destroy:true
			} );
		}

	});
}



function UpdateItem(ID){

	//alert(ID);

	var CurrentPrice=document.getElementById('currentPrice').value;

	var Category=document.getElementById('category').value;

	var url="<?php echo base_url();?>ItemMaster/UpdateItem/"+ID;

//	alert(url);

	$.ajax({

		url:url,

		type:'post',

		data:{

			'CurrentPrice':CurrentPrice,

			'Category':Category,

		},

		success:function(){

			document.getElementById('item_form').reset();

			window.location.reload(true);

		},

		error:function(){

			alert('Update Error');

		}

	});

	

}



</script>

	

  </body>

</html>

