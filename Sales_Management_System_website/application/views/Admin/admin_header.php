<!DOCTYPE html>

<html lang="en">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	  

    

 <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.7.1.min.js"></script>

    <!-- Bootstrap -->

    <link href="<?php echo base_url();?>Admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->

    <link href="<?php echo base_url();?>Admin/css/font-awesome.min.css" rel="stylesheet">

    <!-- NProgress -->

    <link href="<?php echo base_url();?>Admin/css/nprogress.css" rel="stylesheet">

    <!-- iCheck -->

    <link href="<?php echo base_url();?>Admin/css/green.css" rel="stylesheet">

    <!-- bootstrap-wysiwyg -->

    <link href="<?php echo base_url();?>Admin/css/prettify.min.css" rel="stylesheet">

    <!-- Select2 -->

    <link href="<?php echo base_url();?>Admin/css/select2.min.css" rel="stylesheet">

    <!-- Switchery -->

    <link href="<?php echo base_url();?>Admin/css/switchery.min.css" rel="stylesheet">

    <!-- starrr -->

    <link href="<?php echo base_url();?>Admin/css/starrr.css" rel="stylesheet">

    <!-- bootstrap-daterangepicker -->

    <link href="<?php echo base_url();?>Admin/css/daterangepicker.css" rel="stylesheet">



    <!-- Custom Theme Style -->

    <link href="<?php echo base_url();?>Admin/css/custom.min.css" rel="stylesheet">

	

	<!--font awesome cdn-->

    <script src="https://use.fontawesome.com/93f67c57ef.js"></script>

	

	<!-- Datatables -->

    <link href="<?php echo base_url();?>Admin/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>Admin/css/buttons.bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>Admin/css/fixedHeader.bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>Admin/css/responsive.bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>Admin/css/scroller.bootstrap.min.css" rel="stylesheet">

	

  </head>



  <body class="nav-md">

    <div class="container body">

      <div class="main_container">

        <div class="col-md-3 left_col">

          <div class="left_col scroll-view">

            <div class="navbar nav_title" style="border: 0;">

              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>User Master</span></a>

            </div>



            <div class="clearfix"></div>



            <!-- menu profile quick info -->

            <div class="profile clearfix">

              <div class="profile_pic">

                <img src="<?php echo base_url();?>MainFiles/images/logo-1.png" alt="..." class="img-circle profile_img">

              </div>

              <div class="profile_info">

                <span>Welcome,</span>

                <h2><?php echo $UserName;?></h2>

              </div>

            </div>

            <!-- /menu profile quick info -->



            <br />



           <!-- sidebar menu -->

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

              <div class="menu_section">

                <h3>General</h3>

                <ul class="nav side-menu">

					

                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a></li>

				  <?php if($type!=4) { if(($type==1)||($type==3)) {?>

				  <li><a><i class="fa fa-home"></i> Master <span class="fa fa-chevron-down"></span></a>

				  

				     <ul class="nav child_menu">

                        <li><a href="<?php echo base_url();?>UserMaster">User Master</a></li>
						<li><a href="<?php echo base_url();?>AdminLogin_Controller/specialitems">Special Items</a></li>

						<li><a href="<?php echo base_url();?>WarehouseMaster">Warehouse Master</a></li>

						<li><a href="<?php echo base_url();?>CustomerMaster_Controller">Customer Master</a></li>
						
						<li><a href="<?php echo base_url();?>CustomerMaster_Controller/vendorMaster">Vendor Master</a></li>

						<li><a href="<?php echo base_url();?>ItemMaster">Item Master</a></li>

						<li><a href="<?php echo base_url();?>Product_Package">Product Package</a></li>

						<li><a href="<?php echo base_url();?>Product_Package/productcategory/">Product Category</a></li>

						<li><a href="<?php echo base_url();?>Consignment">Consignment Status</a></li>

					  

                    </ul>

				     

				  </li>

				  <?php } ?>

				  <li><a><i class="fa fa-home"></i> Stock <span class="fa fa-chevron-down"></span></a>

						 <ul class="nav child_menu">

                            <li><a href="<?php echo base_url();?>InStock">Add Stock</a></li>

							<li><a href="<?php echo base_url();?>DamageStock">Damage Stock</a></li>

							<!--<li><a href="<?php echo base_url();?>ReturnStock">Return Stock</a></li>-->

							<li><a href="<?php echo base_url();?>OutStock_Controller">Out Stock</a></li>

					  

                    </ul>

				  </li>

				  <li><a><i class="fa fa-home"></i> Order<span class="fa fa-chevron-down"></span></a>

					    <ul class="nav child_menu">

                            <li><a href="<?php echo base_url();?>OrderMaster_Controller">View Order</a></li>

						<?php if($type!=3)	{?><li><a href="<?php echo base_url();?>OrderMaster_Controller/order_passing/">Order Passing</a></li><?php } ?>

					  

                    </ul>

				  </li>

				  

				  <li><a ><i class="fa fa-home"></i> View Bill<span class="fa fa-chevron-down"></span></a>

					 <ul class="nav child_menu">

							<li><a href="<?php echo base_url();?>BillMaster_Controller/bill_view">Bill</a></li>

                            

					</ul>

				  </li>

				  

				  <li><a><i class="fa fa-home"></i> Reports<span class="fa fa-chevron-down"></span></a>

					    <ul class="nav child_menu">

                            <li><a href="<?php echo base_url();?>Report_Controller">Stock Report</a></li>

							<li><a href="<?php echo base_url();?>Report_Controller/instock/">InStock Report</a></li>

							<li><a href="<?php echo base_url();?>Report_Controller/outstock/">Sale Report</a></li>

							<li><a href="<?php echo base_url();?>Report_Controller/damagestock/">Damage Report</a></li>

						<!--	<li><a href="<?php echo base_url();?>Report_Controller/returnstock/">Return Report</a></li>-->

					  

                        </ul>

				  </li>
				  
				  <li><a><i class="fa fa-home"></i> Consigments <span class="fa fa-chevron-down"></span></a>
				  
				  <ul class="nav child_menu">

                            <li><a href="<?php echo base_url();?>Consignment/allconsignment">Update Consignments</a></li>

							<li><a href="<?php echo base_url();?>Consignment/consignment_view">Consignment to delivery personnel</a></li>
				  </ul>
				 </li>
				 
				 <li><a><i class="fa fa-home"></i> Vendors <span class="fa fa-chevron-down"></span></a>
				  
				  <ul class="nav child_menu">

                            <li><a href="<?php echo base_url();?>VendorController">Vendor Orders</a></li>

							<li><a href="<?php echo base_url();?>VendorController/vbill">Vendor Bill</a></li>
							<li><a href="<?php echo base_url();?>VendorController/vbillitem">Vendor BillItem</a></li>
				  </ul>
				 </li>



				  <?php }?>

				  

				 

                </ul>

              </div>

              

            </div>

            <!-- /sidebar menu -->

            

          </div>

        </div>



        <!-- top navigation -->

        <div class="top_nav">

          <div class="nav_menu">

            <nav>

              <div class="nav toggle">

                <a id="menu_toggle"><i class="fa fa-bars"></i></a>

              </div>



              <ul class="nav navbar-nav navbar-right">

                <li class="">

                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                    <?php echo $UserName;?>

                    <span class=" fa fa-angle-down"></span>

                  </a>

                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                    

                    <li><a href="<?php echo base_url();?>AdminLogin_Controller/changepassword/">Change Password</a></li>

                    <li><a href="<?php echo base_url();?>AdminLogin_Controller/logout/"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>

                  </ul>

                </li>

	

	           <li role="presentation" class="dropdown"><!--ITEM request-->

			   <?php if($type==2){ ?>

				<a href="<?php echo base_url();?>WarehouseMaster/itemRequest" class="dropdown-toggle info-number" aria-expanded="false">

                    <i class="fa fa-bitbucket"></i>

                    <span class="badge bg-green" id="ItemRequests" ></span>

                  </a>

			   <?php } ?>  

			   

			   </li>

			   

                <li role="presentation" class="dropdown"> <!-- notification icon-->

				

				  <a href="" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">

                    <i class="fa fa-bell" aria-hidden="true"></i>

                    <span class="badge bg-green" id="NumberNot" onclick="addNotificationstatus();"></span>

                  </a>

                  

				  

				  

                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">

					

                    

                    <!--<li>

                      <a>

                        <span class="image"><img src="<?php echo base_url();?>Admin/images/img-1.jpg" alt="Profile Image" /></span>

                        <span>

                          <span>John Smith</span>

                          <span class="time">3 mins ago</span>

                        </span>

                        <span class="message">

                          Film festivals used to be do-or-die moments for movie makers. They were where...

                        </span>

                      </a>

                    </li>

                    <li>

                      <a>

                        <span class="image"><img src="<?php echo base_url();?>Admin/images/img-1.jpg" alt="Profile Image" /></span>

                        <span>

                          <span>John Smith</span>

                          <span class="time">3 mins ago</span>

                        </span>

                        <span class="message">

                          Film festivals used to be do-or-die moments for movie makers. They were where...

                        </span>

                      </a>

                    </li>

                    <li>

                      <a>

                        <span class="image"><img src="<?php echo base_url();?>Admin/images/img-1.jpg" alt="Profile Image" /></span>

                        <span>

                          <span>John Smith</span>

                          <span class="time">3 mins ago</span>

                        </span>

                        <span class="message">

                          Film festivals used to be do-or-die moments for movie makers. They were where...

                        </span>

                      </a>

                    </li>-->

                    

                  </ul>

                </li>

              </ul>

            </nav>

          </div>

        </div>

        <!-- /top navigation -->

	</div>

	</div>

	<script>

	$(document).ready(function() {

		

   ShowNotification();

   ShowAllNotification();

	

   <?php if($type==2){

   echo "ShowRequests();";

   }

   ?>

});

setInterval(function(){

    ShowNotification() // this will run after every 5 seconds

}, 1000);

setInterval(function(){

    ShowAllNotification() // this will run after every 5 seconds

}, 1000);



setInterval(function(){

   <?php if($type==2){

   echo "ShowRequests();";

   }

   ?> // this will run after every 5 seconds

}, 1000);

	function ShowNotification(){

		var url="<?php echo base_url();?>UserMaster/showNotification";

		//alert(url);

		$.ajax({

			url:url,

			type:'ajax',

			dataType:'json',

			success:function(data){

				var html1="";

				

				

				

				for(var i=0;i<data.length;i++){

					//alert(data.length);

					html1 +='<li>'+

						

                      '<a>'+

                        '<span>';

						   if(data[i].Type==1){

							   html1 +='New Order Notification';

						   }

						  else if(data[i].Type==2) {

							   html1 +='New InVoice Notification ';

						  }

						  else if(data[i].Type==3) {

							  html1 +='Order Status Update Notification ';

						  }

						  else if(data[i].Type==4) {

							  html1 +='Consignment Status Update ';

						  }

						  else if(data[i].Type==5) {

							  html1 +='New Stock Add Notification';

						  }

						  else if(data[i].Type==6) {

							  html1 +='New Stock Out Notification';

						  }

						  else if(data[i].Type==7) {

							  html1 +='New Stock Damage Notification'; 

						  }

						  else if(data[i].Type==8) {

							  html1 +='New Stock Return Notification';

						  }							  

							 html1 += '</span>'+

                         

                       

                        '<span class="message">'+ data[i].Detail+' </span>'+

                      '</a>'+

                    '</li>';

				}

				html1 +='<li>'+

                      '<div class="text-center">'+

                        '<a href="<?php echo base_url();?>AdminLogin_Controller/notification">'+

                          '<strong>See All Notifications</strong>'+

                          '<i class="fa fa-angle-right"></i>'+

                        '</a>'+

                      '</div>'+

                    '</li>';

				//alert (html1)

				$('#menu1').html("");

				$('#menu1').html(html1);

			},

			error:function(){

				//alert("Notification Sorry");

				//alert(url);

			}

		});

	}

	

	

	function ShowAllNotification(){

		var url="<?php echo base_url();?>UserMaster/showNotificationcount";

		

		$.ajax({

			url:url,

			type:'ajax',

			dataType:'json',

			success:function(data){

				var html="";

				var Count=0;
				
				//alert('length:'+data.length);

				if(data.length>0)

				{

					//alert('Viewd:'+data[0].Viewd);
					
					//Count=parseInt(data[0].Viewed)-data.length;

					Count=data.length-parseInt(data[0].Viewed);

					

				}

				else

				{

					Count=0;

				}

				//alert(Count);

				html =html+Count.toString();
				
				

				$('#NumberNot').html('');

				$('#NumberNot').html(html);

				

			},

			error:function(){

				//alert("All Notification Sorry");

				//alert(url);

			}

		});

	}

	

	function addNotificationstatus(){

		//alert('test');
		
		

		var url="<?php echo base_url();?>UserMaster/addNotificationstatus";
		//alert(url);

		$.ajax({

			url:url,

			type:'ajax',

			success:function(){},

			error:function(){

				alert('error in notification status add');

			}

		});

		
	}

	

	function ShowRequests(){

		var url="<?php echo base_url();?>WarehouseMaster/showallrequests";

		var html="";

		$.ajax({

			url:url,

			type:'ajax',

			dataType:'json',

			success:function(data){

				html +=data.length;

				$('#ItemRequests').html('');

				$('#ItemRequests').html(html);

			},

			error:function(){

				//alert('ItemRequests faiul');

			}

		});

	}

	

	</script>

	</body>

</html>



