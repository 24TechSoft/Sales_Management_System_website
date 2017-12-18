<!DOCTYPE html>

<html lang="en">

  <head>

	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="/agriculture-food/js/jquery-1.7.1.min.js"></script>

    <title> Login</title>

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

        

       

        <!-- page content -->

        <div class="right_col" role="main" style="min-height:400px;">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Login</h3>

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

                    <h2>Login</h2>

                    <ul class="nav navbar-right panel_toolbox">

                      <li>

                      </li>

                      <li class="dropdown">

                        

                      </li>

                      <li>

                      </li>

                    </ul>

                    <div class="clearfix"></div>

                  </div>

                  <div class="x_content">

                    <br />

                    <form action="<?php echo base_url();?>AdminLogin_Controller/login" method="post" enctype="multipart/form-data"  class="form-horizontal form-label-left">

					

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Type <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                           <select class="form-control" name="userType">

                            <option value="1">Admin</option>

                            <option value="2">Warehouse Admin</option>

                            <option value="3">Observer</option>

							<option value="4">Delivery Personnel</option>

                          </select>

                        </div>

                      </div>

					  

					  

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User ID <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" id="first-name" name="userid" required="required" class="form-control col-md-7 col-xs-12">

                        </div>

                      </div>

                      

					  <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password <span class="required">*</span>

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                         <input type="password" name="password" class="form-control" value="passwordonetwo">

                        </div>

                      </div>

					

                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                         

                          <button type="submit" class="btn btn-success">Login</button>

						  

                        </div>

                      </div>

					</form>

                    

                  </div>

                </div>

              </div>

            </div>

			

			



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

	



	

  </body>

</html>

